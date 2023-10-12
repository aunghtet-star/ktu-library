<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-inner">
        <!-- Sidebar Header    -->
        <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="https://tse3.mm.bing.net/th?id=OIP.hhvqM3zo1tKmDYkXNib9qQHaHd&pid=Api" alt="person">
                <h2 class="h5 text-white text-uppercase mb-0">TU Kse Library</h2>
                <p class="text-sm mb-0 text-muted">Web Developer</p>
            </div>
            <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
                <p class="h1 m-0">BD</p></a>
        </div>
        <!-- Sidebar Navigation Menus-->
        <span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Menu</span>
        <ul class="list-unstyled">
            <li class="sidebar-item"><a class="sidebar-link" href="{{url('admin/dashboard')}}">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                        <use xlink:href="#real-estate-1"> </use>
                    </svg>Home </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="{{route('students.index')}}">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                        <use xlink:href="#survey-1"> </use>
                    </svg>Students </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="{{route('articles.index')}}">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                        <use xlink:href="#sales-up-1"> </use>
                    </svg>Article </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="{{route('books.index')}}">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
                        <use xlink:href="#portfolio-grid-1"> </use>
                    </svg>Books </a></li>
        </ul>

    </div>
</nav>
