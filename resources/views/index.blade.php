<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<x-header></x-header>

<main id="main">
   <section class="main">
       <section id="welcome">
           <div>
               <h1><span>Jumo Sensor</span> <br> We digitize data</h1>
           </div>
       </section>

       <section id="info">
           <div>
           </div>
       </section>
   </section>
</main>

<x-footer></x-footer>
</body>
</html>
