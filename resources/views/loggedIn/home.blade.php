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
<body>
    <x-side-navigation-bar></x-side-navigation-bar>
    <div class="home">
        <h1>Welcome </h1>
        <p class="content-wrapper">JUMO GmbH & Co. KG is a leading global supplier of components and systems for individual sensor and automation solutions.
            In addition to components for the measuring ranges temperature, liquid analysis, pressure, level, flow, and humidity
            the focus is also on automation challenges such as recording and monitoring as well as control and automation. </p>
        <br>

        <div class="container">
            <div style="text-align:center">
                <h2>Contact Us</h2>
                <p>Swing by for a cup of coffee, or leave us a message:</p>
            </div>
            <div class="row">
                <div class="column">
                    <img src="https://commons.wikimedia.org/wiki/File:Google_Maps_icon_(2015-2020).svg" style="width:100%">
                </div>
                <div class="column">
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Austria</option>
                            <option value="canada">Germany</option>
                            <option value="usa">Hungary</option>
                        </select>
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
