<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index" >
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-compact-disc"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AMPLIFIER</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index">
          <i class="fa fa-columns"></i>
          <span>Admin Dashboard</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
    
      <!-- Heading -->
      <div class="sidebar-heading">
        Modules
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="users">          
          <i class="fa fa-users"></i>
          <span>Users</span></a> 
      </li>

      <!-- Events  -->
      <li class="nav-item">
        <a class="nav-link" href="events">
          <i class="fa fa-calendar"></i>
          <span>Events</span></a>
      </li> 
       <!-- Services  -->
       <li class="nav-item">
        <a class="nav-link" href="services">
        <i class="fa fa-suitcase"></i>
          <span>Packages</span></a>
      </li>  
      <!-- History  -->
      <li class="nav-item">
        <a class="nav-link" href="history">
          <i class="fa fa-flag"></i>
          <span>History</span></a>
      </li>  
      <!-- Reports  -->
      <li class="nav-item">
        <a class="nav-link" href="reports">
          <i class="fa fa-exclamation-triangle"></i>
          <span>Reports</span></a>
      </li>
      <!-- Notifications  -->
      <li class="nav-item">
        <a class="nav-link" href="notifications">
         <i class="fa fa-list-alt"></i>
          <span>Notifications</span></a>
      </li>

      <!-- Messages -->
      <li class="nav-item">
        <a class="nav-link" href="messages">
        <i class="fa fa-envelope-o"></i>
          <span>Messages</span></a>
      </li>

        <!-- Logout -->
        <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fa fa-share-square-o"></i>
          <span>Logout</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
  
    <?php include('logout_modal.php'); ?>
  
    <!-- End of Sidebar -->