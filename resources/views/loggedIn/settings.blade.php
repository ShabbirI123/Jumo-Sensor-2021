<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Settings</title>

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
                <app-component></app-component>
                    <!-- css was re-used from Download Section -->
                    <div class="settings">
                        <h1 style="text-align: left">Settings</h1>
                        <div id="settings_form">
                            <!-- implement form here -->
                            <label>Change Name</label>
                            <input type="text" name="name" placeholder="Max Mustermann"><br>
                            <label>Change Password</label>
                            <input type="text" name="password" placeholder="01.01.2000"><br>
                            <label>Manage Grafana</label>
                            <button class="btn btn-primary" onclick="window.location.href = 'http://195.201.96.148:3000/';">Grafana</button><br>
                            <input type="submit" value="Save" name="save" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <footer-component></footer-component>
            </div>
        @else
            <script>window.location = "/login";</script>
        @endif
    </div>
<x-footer></x-footer>

</body>
</html>
