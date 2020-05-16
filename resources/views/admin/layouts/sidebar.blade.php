

<aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
           <!-- <img src="dist/img/user2-160x160.jpg" class="img-fluid rounded-circle mb-3" alt="User Image">-->
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
        <li class=""><a href="{{ route('admin.home') }}"><i class="fa fa-circle-o"></i>Home</a></li>
        <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i>Banners</a></li>
        <li class=""><a href="{{ route('room.index') }}"><i class="fa fa-circle-o"></i>Room PT</a></li>
        <li class=""><a href="{{ route('roomeng.index') }}"><i class="fa fa-circle-o"></i>Room ENG</a></li>
          <li class=""><a href="{{ route('reserve.index') }}"><i class="fa fa-circle-o"></i>Reserve</a></li>
          
        <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i>User</a></li>
       
        <!--  <li class=""><a href="{{ route('in') }}"><i class="fa fa-circle-o"></i>Info</a></li> -->
                
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>