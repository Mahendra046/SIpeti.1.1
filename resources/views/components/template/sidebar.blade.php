<aside class="main-sidebar sidebar-light-info elevation-4 position-fixed">

    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color: rgba(237, 36, 36, 0.5);">
        <img src="{{ url('public/admin') }}/dist/img/spt-box1.png" alt="AdminLTE Logo"
            class="brand-image img elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-bold text-black">SIPETI KALINILAM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->nama}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-header">{{$header}}</li>
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                @include('menu.'.$menu)
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
