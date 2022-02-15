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

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</head>
<body class="antialiased">
<x-side-navigation-bar></x-side-navigation-bar>
<div class="mybody">
    @if(isset(Auth::user()->name))
        <div id="app">
            <div id="rec_wrapper">
                <h1 style="text-align: left">Recommendation</h1>
                @foreach($data as $temp)
                    <div class="tempBox">Temperatur in 5 Minuten:
                        <p class="valueBox" id="tempValue">{{number_format($temp->jumo_predict, 1)}} °C</p>
                    </div>
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
                    <p class="recommendationBox" id="windowClose">"Close the window"</p>
                </div>
            </div>
            <br>
            <div id="room-accupancy">
                <form id="data_form" action="/save_occupancy" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Person in room*</label>
                        <input type="number" class="form-control" name="occupValue" id="occupValue" aria-describedby="valueHelp" placeholder="25" required>
                        <small id="occupValueHelp" class="form-text text-muted">Please enter the total number of the room occupancy!</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">School*</label>
                        <input type="text" class="form-control" name="school_place" id="school-place" placeholder="Traiskirchen Volkschule" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleCheck1">Classroom*</label>
                        <input type="text" class="form-control" name="classroom" id="classroom" placeholder="4.A" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error')}}
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
                @endif
                @if(Session::has('failure'))
                <div class="alert alert-danger">
                    {{ Session::get('failure')}}
                </div>
                @endif
            </div>
        </div>
    @else
        <script>window.location = "/login";</script>
    @endif
</div>
<x-footer-log></x-footer-log>
</body>
</html>
