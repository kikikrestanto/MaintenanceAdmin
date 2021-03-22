<html>

<head>
    <title>Add New User</title>
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
                            <i class="fas fa-user"></i>
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
                    <li>
                        My Dashboard
                    </li>
                </a>
                <a href="{{route('reportIndex')}}">
                    <li>
                        Reports
                    </li>
                </a>
                <a href="{{route('user.index')}}">
                    <li class="active-link">
                    Users
                    </li>
                </a>
                <a href="#">
                    <li>
                        Log Out
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Add New User
                </p>
                <nav aria-label="sitemap-ts breadcrumb">
                    <ol class="breadcrumb" style="margin-left: -15px; background: none;">
                        <li class="breadcrumb-item"><a style="color: #C7C7C7;" href="{{route('user.index')}}">User</a></li>
                        <li style="color: #21272C;" class="breadcrumb-item active" aria-current="page">Let's we add new
                            user
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">

                    <div class="row">
                        <div class="col-4">
                            <div class="wrap-user-picture-circle">
                                <img class="primary-user-picture-circle" src="{{url('images/icon_nopic.png') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="form-new-user row">
                        
                        <div class="col-md-6">
                            <form method="POST" action="{{route('user.store')}}">
                        @csrf
                                    <div class="form-group content-sign-in">
                                            <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">NIP</label>
                                            <input type="text" class="form-control input-type-primary-tiketsaya" placeholder="NIP" name="nip">
                                        </div>

                                <div class="form-group content-sign-in">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Name
                                        </label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="name">
                                </div>
                                <div class="form-group content-sign-in">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Lastname
                                        </label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lastname" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control input-type-primary-tiketsaya"
                                        id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div style="margin-bottom: -40px; visibility: hidden;"
                                    class="form-group content-sign-in">
                                    <input id="image_file" type="file" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Save Now</button>
                                <a href="{{route('user.index')}}" style="margin-left: 10px;" 
                                    class="btn btn-cancel-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>



            </div>



        </div>
    </div>
    </div>


    <script type="text/javascript" src="{{url('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{url ('js/main.js')}}"></script>

</body>

</html>