<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                <span class="mr-2 d-lg-inline text-primary small">{{auth()->user()->name}}</span>
                <img class="img-profile rounded-circle" src="{{asset('assets/img/user.png')}}" />
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-sm animated--grow-in" aria-labelledby="userDropdown">
                <h6 class="dropdown-header">
                    Pengguna
                </h6>
                <a class="dropdown-item d-flex" href="{{route('user.change')}}">
                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ubah Password
                </a>
                {{-- <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item d-flex" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
