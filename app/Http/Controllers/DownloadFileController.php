<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use File;

class DownloadFileController extends Controller
{
    public function getData(Request $request)
    {

        //$fileName = "Jumo_Data_".date("Y-m-d").".csv";
        $fileName = "Jumo_Data_".$request->input('Humidity').".csv";
        $data = DB::select("SELECT * FROM jumo_values");

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "public",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
        );

        //creating the download file
        $filename =  public_path("$fileName");
        $handle = fopen($filename, 'w');

        //adding the first row
        fputcsv($handle, [
            "Temp1",
            "Temp2",
        ]);

        //adding the data from the array
        foreach ($data as $each_user) {
            fputcsv($handle, [
                $each_user->Temp1,
                $each_user->Temp2,
            ]);

        }
        fclose($handle);

        //download command
        return Response::download($filename, $fileName, $headers);
    }
}
