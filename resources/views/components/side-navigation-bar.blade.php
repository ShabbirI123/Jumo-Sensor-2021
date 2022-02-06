<link href="{{asset("css/component.css")}}" rel="stylesheet">
<div>
    <div class="sidebar">
        <div>
            <span>{{ session()->get('last_activity_time') }}</span>
        </div>
        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error')}}
        </div>
        @endif
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
    </div>
</div>
