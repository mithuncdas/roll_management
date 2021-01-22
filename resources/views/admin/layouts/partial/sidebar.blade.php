<!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('admin_asset') }}/assets/images/icon/logo.png" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="@yield('home')">
                            <a href="{{ route('admin.home') }}"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            {{-- <ul class="collapse">
                                <li class="active"><a href="index.html">ICO dashboard</a></li>

                            </ul> --}}
                        </li>





                        <li class="@yield('roles')"><a href="{{ route('admin.roles.index') }}"><i class="ti-map-alt"></i> <span>Roles</span></a></li>
                        <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>




                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->
