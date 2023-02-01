<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('https://avatars.githubusercontent.com/u/117936163?v=4')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="https://github.com/Keyron13" class="d-block">Keyron Aguilar</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                CANDIDATOS
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('candidatos.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Ingreso </p>
              </a>
            </li>
           </ul>
           <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('candidatos.ver')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Ver </p>
              </a>
            </li>
           </ul>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
