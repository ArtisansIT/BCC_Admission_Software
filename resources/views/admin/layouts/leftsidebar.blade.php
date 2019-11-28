  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/css/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ route('admin.dashboard') }} "><i class="fa fa-dashboard text-red"></i> <span>Dashboard</span></a></li>
 
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span></span>Batch</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.batch.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create A Batch </span></a></li>
            <li><a href="{{ route('admin.batch.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View all Batch </span></a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span></span>Student Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.all_pending_student') }}"><i class="fa fa-circle-o text-aqua"></i><span>Pending Students </span></a></li>
            <li><a href="{{ route('admin.all_complete_student') }}"><i class="fa fa-circle-o text-aqua"></i><span>Complete Students </span></a></li>
          </ul>
        </li>


        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Grades && Marks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.Result.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create A New Grades && Marks </span></a></li>
            <li><a href="{{ route('admin.Result.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View all Grades && Marks </span></a></li>
          </ul>
        </li>


        <li class=" treeview">
          <a href="#">
            <i class="fa  fa-list text-yellow"></i> <span>Last Degree </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.Last-degree.create') }}"><i class="fa fa-circle-o text-aqua"></i><span>Create A New Last Degree </span></a></li>
            <li><a href="{{ route('admin.Last-degree.index') }}"><i class="fa fa-circle-o text-aqua"></i><span>View all Last Degree </span></a></li>
          </ul>
        </li>


        {{-- <li><a href="#"><span>Warning</span></a></li>
        <li><a href="#"></i> <span>Information</span></a></li> --}}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>