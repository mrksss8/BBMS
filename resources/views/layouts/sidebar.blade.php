<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">BBMS</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <a href="">BBMS</a> {{-- /> --}}
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>

<!-- Sidebar outter -->
<div class="main-sidebar"> 
    <!-- sidebar wrapper -->
    <aside id="sidebar-wrapper">
      <!-- sidebar brand -->
      <div class="sidebar-brand" style="line-height: 16px; padding-top: 20px;">
        <img class="navbar-brand-full" src="{{ asset('../img/brgy-bayog-logo.png') }}" width="75px" alt="BRGY LOGO">
        <br>
        <br>
        <span><strong>Barangay Bayog <br> Management System</strong> </span>

      </div>
      <div class="sidebar-brand sidebar-brand-sm">
            <a href="">BBMS</a> 
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu mt-4">
        <!-- menu header -->
          <hr class = "mx-4 my-0">
        <!-- menu item -->
        <li class ="mx-2 {{ request()->is('dashboard') ? 'active-nav' : '' }}"><a class="nav-link" href = "{{route ('dashboard.index')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
        <li class ="mx-2 {{ request()->is('Brgy-Analytics/index') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route ('analytics.index')}}"><i class="fas fa-chart-pie"></i><span>Brgy Analytics</span></a></li>
        <li class ="mx-2 {{ request()->is('residents/*') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route ('residence.index')}}"><i class="fas fa-users"></i><span>Residents Record</span></a></li>
        <li class ="mx-2 {{ request()->is('Blotters/*') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route('blotters.index')}}"><i class="fas fa-user-lock"></i><span>Blotters Record</span></a></li>
        <li class ="mx-2 {{ request()->is('permits') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route('certificate')}}"><i class="fas fa-file-alt"></i><span>Permits Record</span></a></li>
        <li class ="mx-2 {{ request()->is('officials/*') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route('officials.index')}}"><i class="fas fa-user-tie"></i><span>Brgy Officials</span></a></li>
        <li class ="mx-2 {{ request()->is('Reports/*') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route('reports.index')}}"><i class="fas fa-file"></i><span>Reports</span></a></li>
        <li class ="mx-2 {{ request()->is('ActivityLog/*') ? 'active-nav' : '' }}"><a class="nav-link" href ="{{route('activity_logs.index')}}"><i class="fas fa-clipboard-list"></i><span>Activity Logs</span></a></li>
      </ul>
    </aside>
  </div>

  <style>
    li a:hover{
      background-color: #017cfd !important;
    }

    .active-nav{
      background-color: #017cfd !important;
    }
  </style>