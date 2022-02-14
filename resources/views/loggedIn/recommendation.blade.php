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
<x-header></x-header>
<x-side-navigation-bar></x-side-navigation-bar>
<div class="mybody">
    @if(isset(Auth::user()->name))
        <div id="app">
            <div id="rec_wrapper">
                <p>Shabbir</p>
                @foreach($data as $temp)
                    <p>{{$temp->jumo_predict}}</p>
                @endforeach
                <div>
                    <p class="recommendationBox" id="heaterOn">"Turn the heater on"</p>
                </div>
                <div>
                    <p class="recommendationBox" id="heaterOff">"Turn the heater off"</p>
                </div>
                <div>
                    <p class="recommendationBox" id="windowOpen">"Open the window"</p>
                </div>
                <div>
                    <p class="recommendationBox" id="windowClose">Close the window</p>
                </div>
            </div>
        </div>
    @else
        <script>window.location = "/login";</script>
    @endif
</div>
<x-footer></x-footer>

</body>
</html>
