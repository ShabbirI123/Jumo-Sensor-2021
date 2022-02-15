<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</head>
<body class="antialiased">
<x-side-navigation-bar></x-side-navigation-bar>
<div class="mybody">
    <div class="dashboard">
        <nav class="topnav" id="myTopnav">
            <a id="coBtn">Co2</a>
            <a id="tempBtn">Temperature</a>
            <a id="vocBtn" d>VOC</a>
            <a id="humBtn">Humidity</a>
            <a id="preBtn">Pressure</a>
            <a id="outBtn">Outdoor Temperature</a>
            <a id="refreshBtn">Refresh</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars">Menu</i>
            </a>
        </nav>
        <div id="iframes">
            <!-- CO2 -->
            <iframe class="keepclearofsidebar" id="co" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=2" width="650"
                    height="400"></iframe>
            <!-- Temp -->
            <iframe class="keepclearofsidebar" id="temp" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=4" width="650"
                    height="400"></iframe>
            <!-- VOC -->
            <iframe class="keepclearofsidebar" id="voc" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=6" width="650"
                    height="400"></iframe>
            <!-- Humidity -->
            <iframe class="keepclearofsidebar" id="hum" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=8" width="650"
                    height="400"></iframe>
            <!-- Pressure -->
            <iframe class="keepclearofsidebar" id="pre" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=10" width="650"
                    height="400"></iframe>
            <!-- Outdoor Temp -->
            <iframe class="keepclearofsidebar" id="out" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=12" width="650"
                    height="400"></iframe>
        </div>
    </div>
</div>

</body>
</html>
