<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
            href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item mr-auto">
            <a class="navbar-brand" href="index.php">
            <img class="brand-logo" alt="modern admin logo" src="{{asset('app-assets/images/logo/logo.png')}}">
            <h3 class="brand-text">Admin</h3>
            </a>
        </li>
        <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
        <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
        </li>
        </ul>
    </div>
    <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
            <div class="search-input">
                <input class="input" type="text" placeholder="Explore Modern...">
            </div>
            </li>
        </ul>
        <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                <span class="user-name text-bold-700">{{Auth::user()->name}}</span>
                </span>
                <span class="avatar avatar-online">
                {{-- <img src="img/category/zizo.png" alt=""><i></i></span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <a class="dropdown-item" href="#"><img width="300px" src="img/category/zizo.png" alt=""> --}}
                <a class="dropdown-item" href="#"><i class="ft-user"></i>  Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="http://localhost/projectlap/logout.php"><i class="ft-power"></i> Logout</a>
            </div>
            </li>



        </ul>
        </div>
    </div>
    </div>
</nav>
