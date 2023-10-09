 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <li class="Route::is('admin.dashboard') ? 'active' : ''">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    
                    <li class="Route::is('users') ? 'active' : ''">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>users</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('users') ? 'active' : '' }}"><a href="{{ route('users') }}">Users</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->