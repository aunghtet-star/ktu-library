<!-- navbar-->
<header class="header mb-5 pb-3">
    <nav class="nav navbar fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                            <use xlink:href="#menu-1"> </use>
                        </svg></a><a class="navbar-brand ms-2" href="index.html">
                        <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">Technological University </span><strong class="text-primary text-sm"> Kyaukse</strong></div></a></div>
                <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">

                    <!-- Log out-->
                    <li class="nav-item"><a class="nav-link text-white text-sm ps-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#"> <span class="d-none d-sm-inline-block">Logout</span>
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                <use xlink:href="#security-1"> </use>
                            </svg></a></li>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </ul>
            </div>
        </div>
    </nav>
</header>
