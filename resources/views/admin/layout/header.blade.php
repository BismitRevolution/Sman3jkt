<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Dashboard</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Berita<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" disabled href="#">Guru</a>
            </li>
            @if (Auth::guard('admin')->check())
            <li id="dashboard-nav" class="nav-item">
                <a class="nav-link" href="">Dashboard</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <form method="post" action="{{ route('admin.logout') }}">
                {{ csrf_field() }}
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-danger my-2 my-sm-0">Logout</button>
            </form>
            @else
        </ul>
        <ul class="navbar-nav ml-auto">
            <form method="get" action="{{ route('admin.login') }}">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-success my-2 my-sm-0">Login</button>
            </form>
            @endif
        </div>
    </nav>
