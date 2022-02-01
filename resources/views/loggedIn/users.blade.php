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
        @if(Auth::user()->role=='admin')
            <div id="app">
                <app-component></app-component>

                <div id="userAlert">
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                </div>
                <div id="createForm">
                    <form action="/users" method="POST">
                        {{ csrf_field() }}
                        <div class="form_only">
                            Username: <input type="text" name="name" placeholder="username" id="name" required><br>
                            Password: <input type="password" name="password" placeholder="password" id="password" required><br>
                            E-Mail: <input type="email" name="email" placeholder="e-mail" id="email" required><br>
                            Role: <select name="role" placeholder="role" id="role" required>
                                <option value="admin" name="admin" id="admin">Admin</option>
                                <option value="superuser" name="superuser" id="superuser">Superuser</option>
                                <option value="user" name="user" id="user">User</option>
                            </select><br>
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </div>
                    </form>
                </div>

                <footer-component></footer-component>
            </div>
        @else
            <script>
                window.alert("Can only access with admin rights!");
            </script>
            <script>window.location = "/home";</script>
        @endif
    @else
        <script>window.location = "/login";</script>
    @endif
</div>
<x-footer></x-footer>

</body>
</html>
