<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="antialiased">
<x-side-navigation-bar></x-side-navigation-bar>
    <div class="mybody">
        @if(isset(Auth::user()->name))
            @if(Auth::user()->role=='admin'||Auth::user()->role=='superuser')
                <div id="app">
                    <div class="download">
                        <h1>Download</h1>
                        <div id="download_form">
                            <p>Select data to download</p>
                            <form id="data_form" action="export" method="GET">
                                <div class="form_only">
                                    <input type="checkbox" name="Temperature" id="Temperature">Temperature<br>
                                    <input type="checkbox" name="Co2" id="Co2">Co2<br>
                                    <input type="checkbox" name="Humidity" id="Humidity">Humidity<br>
                                    From: <br><input type="text" name="StartDate" placeholder="Ex.: 2021-07-01 11:08:10" class="Datepicker"><br>
                                    To: <br><input type="text" name="EndDate" placeholder="Ex.: 2021-07-01 11:08:11" class="Datepicker"><br>
                                    <input type="submit" value="Download" name="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <script>
                    window.alert("Can only access with admin or superuser rights!");
                </script>
                <script>window.location = "/home";</script>
            @endif
        @else
            <script>window.location = "/login";</script>
        @endif
    </div>

</body>
</html>
