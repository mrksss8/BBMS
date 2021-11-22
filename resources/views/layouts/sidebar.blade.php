<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">BBMS</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <a href="">BBMS</a> {{-- <img class="navbar-brand-full" src="{{ asset('img/logo.png') }}" width="45px" alt=""/> --}}
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
      <div class="sidebar-brand">
        <a href="{{route ('home')}}">BBMS</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
            <a href="">BBMS</a> 
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu mt-3">
        <!-- menu header -->
          <hr class = "mx-4 my-0">
        <!-- menu item -->
        <li class ="mx-2"><a class="nav-link" href = "{{route ('dashboard.index')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
        <li class ="mx-2"><a class="nav-link" href ="{{route ('analytics.index')}}"><i class="fas fa-users"></i><span>Brgy Analytics</span></a></li>
        <li class ="mx-2"><a class="nav-link" href ="{{route ('residence.index')}}"><i class="fas fa-users"></i><span>Residence Records</span></a></li>
        <li class ="mx-2"><a class="nav-link" href ="{{route('blotters.index')}}"><i class="fas fa-user-lock"></i><span>Blotter Records</span></a></li>
        <li class ="mx-2"><a class="nav-link" href ="{{route('certificate')}}"><i class="fas fa-file-alt"></i><span>Permit Records</span></a></li>
        <li class ="mx-2"><a class="nav-link" href ="{{route('officials.index')}}"><i class="fas fa-user-tie"></i><span>Brgy Officials</span></a></li>
        <li class ="mx-2"><a class="nav-link" href ="{{route('reports.index')}}"><i class="fas fa-file"></i><span>Reports</span></a></li>
      </ul>
    </aside>
  </div>

  <style>
    li a:hover{
      background-color: #6777ef !important;
    }

    li a:active{
      background-color: #6777ef !important;
    }
  </style>