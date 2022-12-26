<style>
  .sidebar-brand-text .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    font-weight: bolder;
    margin-left: 50px;
    color: black;
    padding-bottom: 0px;
    margin-bottom: 0px;
  }

  .sidebar {
    z-index: 1; 
    top: 0;
    left: 0;
    background-image: linear-gradient(120deg, #F9E7FE 0%, #B5F0F0 100%);
    overflow-x: hidden;
    transition: 0.5s;
  }

  .sidebar-brand {
    background: #c4e3f3 !important;
    color: grey !important;
  }

  .sidebar a {
    padding: 8px 8px 8px 32px;
    font-size: 25px;
    font-weight: bold;
    color: black;
    display: block;
    transition: 0.3s;
  }

  .sidebar a:hover {
    color: rgb(140, 183, 204) !important;
  }

  .collapse-item {
    font-size: 13px !important;
  }

  .sidebar-heading {
    color: black !important;
    font-size: 15px !important;
  }

  .nav-item {
    color: black !important;
  }
</style>

<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

  <a class="sidebar-brand d-flex align-items-center bg-gradient-primary justify-content-center" href="../../lecturers/dashboard_sot.php">
    <div class="sidebar-brand-icon"> </div>

    <div class="sidebar-brand-text mx-3">Dashboard</div>
  </a>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">Students</div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
    aria-expanded="true" aria-controls="collapseBootstrap2">
      <i class="fas fa-user-graduate"></i>
      <span>Manage Students</span>
    </a>

    <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Manage Students</h6>
        <a class="collapse-item" href="viewStudents.php">View Students</a>
      </div>
    </div>
  </li>

  <hr class="sidebar-divider">
  <div class="sidebar-heading">Attendance</div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcon"
    aria-expanded="true" aria-controls="collapseBootstrapcon">
      <i class="fa fa-calendar-alt"></i>
      <span>Manage Attendance</span>
    </a>

    <div id="collapseBootstrapcon" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Manage Attendance</h6>

        <a class="collapse-item" href="takeAttendance.php">Take Attendance</a>
        <a class="collapse-item" href="viewAttendance.php">View Class Attendance</a>
        <a class="collapse-item" href="downloadRecord.php">Today's Report (xls)</a>
      </div>
    </div>
  </li>

  <hr class="sidebar-divider">
</ul>