<html>

<head>
    <title>Users</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    <link rel="stylesheet" type="text/css" href="{{url ('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>


    <div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">
            <div class="emblemapp">
                <img height="29" alt="">
            </div>
            <div class="menus">

                <div class="item-menu inactive">
                    <a href="{{route('dashboard')}}">
                        <p class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </p>
                    </a>
                </div>
                <div class="item-menu inactive">
                    <a href="{{route('reportIndex')}}">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
                    <a href="{{route('user.index')}}">
                        <p class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="#">
                        <p class="icon-item-menu">
                            <i class="fas fa-power-off"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture">
                <img src="{{url('images/icon_nopic.png')}}" alt="">
            </div>
            <p class="admin-name">
            {{$data->name}}
            </p>
            <p class="admin-level">
                Admin
            </p>
            <ul class="admin-menus">
                <a href="{{route('dashboard')}}">
                    <li>
                        My Dashboard
                    </li>
                <a href="{{route('reportIndex')}}">
                    <li >
                        Reports
                    </li>
                </a>
                <a href="{{route('user.index')}}">
                    <li class="active-link">
                    Users
                    </li>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <li style="padding-top=120px;">
                    {{ __('Logout') }}
                    </li>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Users
                </p>
                <a href="{{route('user.create')}}" class="btn btn-active btn-view btn-primary btn-primary-tiketsaya">Add New</a>
            </div>
        </div>
        <div class="row report-group">
            @foreach ($user as $data)
            <div class="col-md-4">
                <div class="item-customer col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                
                            <p class="title">
                                {{$data -> nip }}
                            </p>
                            <p class="sub-title">
                                {{$data -> name }}
                            </p>
                            <p class="sub-title"> 
                                {{$data -> lastname}}
                            </p>

                            <a href="{{ route('user.show', $data->id) }}" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>
                        
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
    </div>
    @include('includes.script')

</body>

</html>