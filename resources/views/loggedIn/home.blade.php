<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<x-side-navigation-bar></x-side-navigation-bar>
<div class="home">
    <h1>Welcome </h1>
    <p class="content-wrapper">JUMO GmbH & Co. KG is a leading global supplier of components and systems for individual
        sensor and automation solutions.
        In addition to components for the measuring ranges temperature, liquid analysis, pressure, level, flow, and
        humidity
        the focus is also on automation challenges such as recording and monitoring as well as control and
        automation. </p>
    <br>

    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
        </div>
        <div class="row">
            <div class="column">
                <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJYSqmIR2pbUcRGO0Y7MOWMeE&key=AIzaSyCxkx0sMJlqv6Zv_fXbJQlMgIWsyXq0exg"></iframe>
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname" class="contactform">First Name</label>
                    <br>
                    <div class="contactformfield">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                    <br>
                    <label for="lname" class="contactform">Last Name</label>
                    <br>
                    <div class="contactformfield">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    </div>
                    <br>
                    <label for="country" class="contactform">Country</label>
                    <br>
                    <div class="contactformfield">
                        <select id="country" name="country">
                            <option value="australia">Austria</option>
                            <option value="canada">Germany</option>
                            <option value="usa">Hungary</option>
                        </select>
                    </div>
                    <br>
                    <label for="subject" class="contactform">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                              style="height:170px"></textarea>
                    <div class="contactformfield">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<x-footer-log></x-footer-log>
</body>
</html>
