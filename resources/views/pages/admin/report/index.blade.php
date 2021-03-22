<html>

<head>
    <title>Reports</title>
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

                <div class="item-menu">
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
                    <li>
                        My Dashboard
                    </li>
                </a>
                <a href="{{route('reportIndex')}}">
                    <li  class="active-link">
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
            <div class="col-lg-12">
                <p class="header-title">
                    Reports
                </p>
            </div>
            <a href="{{route('reportExcel')}}" class="btn btn-small-table-right">Export to Excel</a>
        </div>

        <div class="row report-group">
            <div class="col-lg-12">
                <div class="item-big-report col-lg-12">


                    <table class="table-tiketsaya table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Teknisi</th>
                                <th scope="col">Nama Inventaris</th>
                                <th scope="col">Merk / Type</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">No.Inventaris</th>
                                <th scope="col">Jangka Waktu</br>Pemeliharaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($report as $data)
                            <tr>
                                <!---<td scope="row user-table-item"></td> -->
                                <td>{{$no++}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->jenisEdit}}</td>
                                <td>{{$data->merkEdit}}</td>
                                <td>{{$data->lokasiEdit}}</td>
                                <td>{{$data->inventarisEdit}}</td>
                                <td>{{$data->jangkaWaktu}}</td>
                                <td>
                                    <a href="{{route('reportShow', $data->id)}}" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>
                            
                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

    @include('includes.script')
</body>

</html>
