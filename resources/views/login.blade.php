<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">

<div id="app" style="margin-left: -75px !important;">
    <x-header></x-header>
    <div class="container box">
        <h3>Login</h3><br/>

        @if(isset(Auth::user()->role))
        <script>window.location = "/home";</script>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ url('/checklogin') }}" class="login_form">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="name"/>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password"/>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login"/>
            </div>
        </form>
    </div>
    <x-footer></x-footer>
</div>
</body>
</html>
