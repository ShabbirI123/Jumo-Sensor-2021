<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/about.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased" style="margin-left: -75px !important;">

<x-header></x-header>
<x-side-navigation-bar></x-side-navigation-bar>

<div class="about-wrapper">
    <div class="about-section">
        <h1>About Us Page</h1>
        <div id="about-content">
            <p>Resize the browser window to see that this page is responsive by the way.</p>
            <p>Some text about who we are and what we do.</p>
        </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="../img/1.jpg" height="200px">
                <div class="container">
                    <h2>Linus Fulton</h2>
                    <p class="title">Frontend & Security</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>1@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../img/2.jpg" height="200px">
                <div class="container">
                    <h2>Lukas Geier</h2>
                    <p class="title">Database & Security</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>2@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../img/3.jpg" height="200px">
                <div class="container">
                    <h2>Shabbir Islam</h2>
                    <p class="title">AI & Fullstack</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>3@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="../img/4.jpg" height="200px">
                <div class="container">
                    <h2>Alexander Kottisch</h2>
                    <p class="title">AI & Backend</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>4@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
</body>
</html>
<?php
