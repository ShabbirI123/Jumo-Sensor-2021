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
    @if(Auth::user()->role=='admin'||Auth::user()->role=='superuser')
    <div id="app">
        <div class="download">
            <h1>Download</h1>
            <div id="download_form">
                <p>Select a option to download the data</p>
                <form id="data_form" action="getData" method="GET">
                    <div class="form_only">
                        <div class="download-option-block">
                            <input type="checkbox" name="temperature" id="temperature" class="download-checkbox">
                            <label>Temperature</label>
                        </div>
                        <div class="download-option-block">
                            <input type="checkbox" name="pressure" id="pressure" class="download-checkbox">
                            <label>Pressure</label>
                        </div>
                        <div class="download-option-block">
                            <input type="checkbox" name="humidity" id="humidity" class="download-checkbox">
                            <label>Humidity</label>
                        </div>
                    </div>
                    <div class="form_only">
                        <p>Additional Options:</p>
                        <div class="download-option-block">
                            <input type="checkbox" name="Co2" id="Co2" class="download-checkbox">
                            <label>Co<sup>2</sup></label>
                        </div>
                        <div class="download-option-block">
                            <input type="checkbox" name="voc" id="voc" class="download-checkbox">
                            <label>VOC</label>
                        </div>
                        <div class="download-option-block">
                            <input type="checkbox" name="all" id="show-all-data" class="download-checkbox">
                            <label>All Data</label>
                        </div>
                        <div class="download-add-option-block">
                            <label>From:</label>
                            <input type="date" name="StartDate" placeholder="Ex.: 2021-07-01" class="Datepicker"
                                   max="<?= date('Y-m-d'); ?>" required>
                            <label>To:</label>
                            <input type="date" name="EndDate" placeholder="Ex.: 2021-07-01" class="Datepicker"
                                   max="<?= date('Y-m-d'); ?>" required>
                        </div>
                        <small>*From and To dates must not be more than 3 months apart!</small>
                    </div>
                    <input type="submit" value="Download" name="submit" class="btn btn-primary">
                </form>
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error')}}
                </div>
                @endif
            </div>
        </div>
    </div>
    @else
    <script>
        window.alert("Can only access with admin or superuser rights!");
    </script>
    <script>window.location = "/home";</script>
    @endif
</div>
</body>
</html>
