 
 <html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}" />
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

                <div class="item-menu ">
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

                <div class="item-menu inactive">
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
            {{$user->name}}
            </p>
            <p class="admin-level">
                Admin
            </p>
            <ul class="admin-menus">
                <a href="{{route('dashboard')}}">
                    <li class="active-link">
                        My Dashboard
                    </li>
                </a>
                <a href="{{route('reportIndex')}}">
                    <li>
                        Reports
                    </li>
                </a>
                <a href="{{route('user.index')}}">
                    <li>
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
                    My Dashboard
                </p>
                <p class="sub-header-title">
                   
                </p>
            </div>
        </div>
        <div class="row report-group">

            <div class="col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="images/icon_total_sales.png" alt="">
                            <p class="title-item">
                                REPORTS
                            </p>
                            <p class="value-item">
                                {{$data}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="images/icon_total_pengguna.png" alt="">
                            <p class="title-item">
                                USERS
                            </p>
                            <p class="value-item">
                                {{$account}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="images/icon_total_wisata.png" alt="">
                            <p class="title-item">
                                WISATA
                            </p>
                            <p class="subtitle-item">
                                PLACE THAT AVAILABLE
                            </p>
                            <p class="value-item">
                                6
                            </p>
                            <p class="desc-item">
                                around the Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div> 

        <div class="row report-group">
            <div class="col-md-4"> 
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <p class="title-item">
                                AC
                            </p>
                            <p class="value-item">
                            {{$AC}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        
        
            <div class="col-md-4"> 
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <p class="title-item">
                                GENSET
                            </p>
                            <p class="value-item">
                                {{$genset}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4"> 
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <p class="title-item">
                                MOBIL
                            </p>
                            <p class="value-item">
                                {{$mobil}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row report-group">
        <div class="col-md-4"> 
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <p class="title-item">
                                CONTROL EXHAUST FAN
                            </p>
                            <p class="value-item">
                                {{$fan}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
    
            <div class="col-md-4"> 
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <p class="title-item">
                                POMPA
                            </p>
                            <p class="value-item">
                                {{$pompa}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4"> 
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <p class="title-item">
                                TORN
                            </p>
                            <p class="value-item">
                                {{$torn}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row report-group">
            <div class="col-md-4"> 
                    <div class="item-report col-md-12">
                        <div class="row">
                            <div class="content col-md-12">
                                <p class="title-item">
                                    CRYSTAL MARMER
                                </p>
                                <p class="value-item">
                                    {{$crystalMarmer}}
                                </p>
                            </div>
                        </div>
                    </div>

             </div>  

            <div class="col-md-4"> 
                    <div class="item-report col-md-12">
                        <div class="row">
                            <div class="content col-md-12">
                                <p class="title-item">
                                    PEMBERSIHAN GUDANG
                                </p>
                                <p class="value-item">
                                    {{$pembersihanGudang}}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>  

            <div class="col-md-4"> 
                    <div class="item-report col-md-12">
                        <div class="row">
                            <div class="content col-md-12">
                                <p class="title-item">
                                    PEMBERSIHAN KOLAM
                                </p>
                                <p class="value-item">
                                    {{$pembersihanKolam}}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>        
     </div>

        <div class="row report-group">
            <div class="col-md-4"> 
                    <div class="item-report col-md-12">
                        <div class="row">
                            <div class="content col-md-12">
                                <p class="title-item">
                                    PEMBERSIHAN SALURAN AIR
                                </p>
                                <p class="value-item">
                                    {{$pembersihanSaluranAir}}
                                </p>
                            </div>
                        </div>
                    </div>  
            </div>

            <div class="col-md-4"> 
                    <div class="item-report col-md-12">
                        <div class="row">
                            <div class="content col-md-12">
                                <p class="title-item">
                                    BUFFING LANTAI
                                </p>
                                <p class="value-item">
                                    {{$buffingLantai}}
                                </p>
                            </div>
                        </div>
                    </div>
             </div>  
        </div>
    </div>


    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/main.js')}}"></script>

</body>

</html>