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
        $options = $this->read_request($request);

        //$fileName = "Jumo_Data_".date("Y-m-d").".csv";
        $fileName = "Jumo_Data_" . date("Y-m-d") . ".csv";
        if ($options[6] && $options[7]) {
            $data = DB::select("SELECT * FROM jumo_values WHERE createdAt >= :startDate and createdAt <= :endDate", array(
                'startDate' => $request->input('StartDate'),
                'endDate' => $request->input('EndDate'),
            ));
        } else {
            $data = DB::select("SELECT * FROM jumo_values");
        }
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "public",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0",
        );

        //creating the download file
        $filename = public_path("$fileName");
        $handle = fopen($filename, 'w');

        //adding the first row
        if ($options[5]) {
            fputcsv($handle, [
                "Temp1",
                "Temp2",
                "Temp3",
                "rH1",
                "rH2",
                "rH3",
                "P1",
                "P2",
                "P3",
                "TA",
                "TB",
                "VOC1",
                "VOC2",
                "CO2",
                "rH",
                "Created at"
            ]);

            //adding the data from the array
            foreach ($data as $each_user) {
                fputcsv($handle, [
                    $each_user->Temp1,
                    $each_user->Temp2,
                    $each_user->Temp3,
                    $each_user->rH1,
                    $each_user->rH2,
                    $each_user->rH3,
                    $each_user->P1,
                    $each_user->P2,
                    $each_user->P3,
                    $each_user->TA,
                    $each_user->TB,
                    $each_user->VOC1,
                    $each_user->VOC2,
                    $each_user->CO2,
                    $each_user->rH,
                    $each_user->createdAt
                ]);

            }
        } else {

            fputcsv($handle, $this->table_name_array($request));

            //adding the data from the array
            foreach ($data as $each_user) {
                fputcsv($handle, $this->data_array($request, $each_user));
            }
        }

        fclose($handle);

        //download command
        return Response::download($filename, $fileName, $headers);
    }

    function read_request(Request $request)
    {
        $temperature = ($request->input('temperature')) ? true : false;
        $pressure = ($request->input('pressure')) ? true : false;
        $humidity = ($request->input('humidity')) ? true : false;
        $coTwo = ($request->input('Co2')) ? true : false;
        $voc = ($request->input('voc')) ? true : false;
        $all = ($request->input('all')) ? true : false;
        $startDate = ($request->input('StartDate')) ? true : false;
        $endDate = ($request->input('EndDate')) ? true : false;
        return [$temperature, $pressure, $humidity, $coTwo, $voc, $all, $startDate, $endDate];
    }

    function table_name_array(Request $request)
    {
        $options = $this->read_request($request);
        $array = ['Temperature', 'Pressure', 'Humidity', 'VOC', 'CO2'];
        $new_array = [];
        for ($i = 0; $i < (count($options)-2); $i++) {
            if ($options[$i]) {
                array_push($new_array, $array[$i]);
            }
        }
        array_push($new_array, "Created at");
        return $new_array;
    }

    function data_array(Request $request, $data)
    {
        $options = $this->read_request($request);
        $new_array = [];

        if ($options[0])
            array_push($new_array, $data->Temp1);
        if ($options[1])
            array_push($new_array, $data->P1);
        if ($options[2])
            array_push($new_array, $data->rH1);
        if ($options[3])
            array_push($new_array, $data->VOC1);
        if ($options[4])
            array_push($new_array, $data->CO2);
        array_push($new_array, $data->createdAt);
        return $new_array;
    }
}
