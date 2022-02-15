<link href="{{asset("css/component.css")}}" rel="stylesheet">
<div>
    <div class="sidebar">
        <ul class="nav_list">
            <li>
                <a href="/home">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="/dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/recommendation">
                    <i class='bx bx-bulb'></i>
                    <span class="links_name">Recommendation</span>
                </a>
                <span class="tooltip">Recommendation</span>
            </li>
            <li>
                <a href="/users">
                    <i class='bx bxs-user-account'></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="profile">
                    <i class='bx bx-user'></i>
                    <span class="links_name">My Profile</span>
                </a>
                <span class="tooltip">My Profile</span>
            </li>
            <li>
                <a href="/download">
                    <i class='bx bxs-download' id="downloadBtn"></i>
                    <span class="links_name">Download</span>
                </a>
                <span class="tooltip">Download</span>
            </li>
            <li>
                <a href="/settings">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li>
                <a href="/logout">
                    <i class='bx bx-log-out' id="log_out"></i>
                    <span class="links_name">Sign Out</span>
                </a>
                <span class="tooltip">Sign Out</span>
            </li>
        </ul>
        @if(Session::has('last_active'))
        <div class="logout-timer-block">
            <p id="logout-timer">1200</p>
        </div>
        @endif
    </div>
</div>
@if(Session::has('last_active'))
<script>
    {{--console.log('{{ Session::get('last_active');}}')--}}
    var intervalID = setInterval(timer, 1000, '{{ Session::get('last_active');}}');

    function timer(lastTime)
    {
        let currentTime = Math.floor(new Date().getTime() / 1000);
        // Your code here
        // Parameters are purely optional.

        let actualTime = currentTime -lastTime;
        let timeRemaining = 1200 - parseInt(actualTime);
        document.getElementById("logout-timer").innerHTML = timeRemaining.toString();

        if (timeRemaining === 0){
            window.location = "/logout";
        }
    }
</script>
@endif
