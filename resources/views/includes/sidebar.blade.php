<div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">
            <div class="emblemapp">
                <img src="images/emblemapp.png" height="29" alt="">
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
                    <a href="{{route('report.index')}}">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>
                <div class="item-menu inactive">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <p class="icon-item-menu" style="padding-top = 120px;">
                            <i class="fas fa-power-off"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture">
                <img src="images/admin_picture.png" alt="">
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
                <a href="{{route('report.index')}}">
                    <li class="active-link">
                        Reports
                    </li>
                </a>
                <a href="{{route('user.index}}">
                    <li>
                        Users <span class="badge-tiketsaya badge badge-pill badge-primary">96</span>
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