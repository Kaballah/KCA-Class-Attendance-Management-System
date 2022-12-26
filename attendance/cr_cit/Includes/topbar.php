<style>
    .navbar {
        width: 150% !important;
        margin-left: 0%;
        z-index: 2;
    }
    .navbar-collapse {
        float: right;
        right: 0px;
        margin-left: 55%;
    }
</style>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top navbar-expand mb-4 topbar" style="background:#c4e3f3;color:white;border-color:white;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-circle"></i>

                        <?php echo strtoupper($_SESSION['name']); ?> 
                        
                        <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li>
                            <a href="../../lecturers/account.php">
                                <i class="fa fa-user-secret"></i>
                                My Profile
                            </a>
                        </li>						
                    </ul>
                </li>

                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>    
</div>