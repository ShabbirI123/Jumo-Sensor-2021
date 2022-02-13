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
                            <p>Select a option to download the data</p>
                            <form id="data_form" action="getData" method="GET">
                                <div class="form_only">
                                    <!--<p>Control sensor 1: Placed in the corner of the room at about 1.8 m height at the window
                                        side of the room.</p>-->
                                    <div class="download-option-block">
                                        <input type="checkbox" name="temperature" id="temperature">
                                        <label>Temperature</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="pressure" id="pressure">
                                        <label>Pressure</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="humidity" id="humidity">
                                        <label>Humidity</label>
                                    </div>
                                </div>
                                <!--<div class="form_only">
                                    <p>Control sensor 2: Placed at the middle of the wall at about 1.2 m height connecting the
                                        window side and the door side.</p>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="Temperature" id="Temperature">
                                        <label>Temperature</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="pressure" id="pressure">
                                        <label>Pressure</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="Humidity" id="Humidity">
                                        <label>Humidity</label>
                                    </div>
                                </div>
                                <div class="form_only">
                                    <p>Main sensor: Placed below the front radiator at the window side in about 0.1 m height.</p>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="Temperature" id="Temperature">
                                        <label>Temperature</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="pressure" id="pressure">
                                        <label>Pressure</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="Humidity" id="Humidity">
                                        <label>Humidity</label>
                                    </div>
                                </div>-->
                                <div class="form_only">
                                    <p>Additional Options:</p>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="Co2" id="Co2">
                                        <label>Co<sup>2</sup></label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="voc" id="voc">
                                        <label>VOC</label>
                                    </div>
                                    <div class="download-option-block">
                                        <input type="checkbox" name="all" id="show-all-data">
                                        <label>All Data</label>
                                    </div>
                                    <div class="download-add-option-block">
                                        <label>From:</label>
                                        <input type="text" name="StartDate" placeholder="Ex.: 2021-07-01 11:08:10" class="Datepicker">
                                        <label>To:</label>
                                        <input type="text" name="EndDate" placeholder="Ex.: 2021-07-01 11:08:11" class="Datepicker">
                                    </div>
                                </div>
                                <input type="submit" value="Download" name="submit" class="btn btn-primary">
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
