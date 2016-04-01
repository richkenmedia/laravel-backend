<div class="header-strip">
    <div class="col-md-1">
        <nav class="main-menu-button"><span></span><span></span><span></span></nav>
    </div>
    <div class="col-md-4">
        <div class="logo-cover"><a href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" alt=""></a></div>
    </div>
    <div class="col-md-6">
        @yield('top-right-menu')  
        <span class="user-cover pull-right">
            <h2><a href="#">{{ucfirst(strtolower(Sentinel::check()->first_name)) . " " . ucfirst(strtolower(Sentinel::check()->last_name))}}</a></h2>
            <p>Logged in as {{Sentinel::check()->username}}</p>
        </span>
    </div>
    <div class="col-md-1 top-drop-down">
        <nav>
            <ul class="drop-down-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="{{ url('admin') }}">Admin</a></li>
                <li><a href="{{ url('user/logout') }}">Logout</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="main-menu-strip">
    <div class="container">
        <nav>
            <ul>
                <li> <a href="">Trust Performance</a></li>
                <li>
                    <a href="">CCG Performance</a>
                    <ul>
                        <li><a href="{{ url('dashboard/rtt') }}">Referral to Treatment</a></li>
                    </ul>
                </li>

                <li> <a href="">Benchmarking </a>
                <li> <a href="">Scorecard </a> </li>
            </ul>
         </nav>
    </div>
</div>