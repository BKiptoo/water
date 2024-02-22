<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('../Assets/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('home')}}">
                        <i class="fas fa-home"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                    </ul>
                </li>
                <li class="sidebar-title" style="font-size: smaller;">
                    Operations
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-lock"></i>Account
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="#"><i class="fas fa-user-circle"></i>Profile</a></li>
                        <li><a href="#"><i class="fas fa-user-secret"></i>Credentials</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Employees
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="#"><i class="fas fa-plus"></i>Add</a></li>
                        <li><a href="#"><i class="fas fa-list"></i>List</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-question-circle"></i>FAQ'S</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="#"><i class="fas fa-plus"></i>Add</a></li>
                        <li><a href="#"><i class="fas fa-list"></i>List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-envelope"></i>Inquiries
                    </a>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
