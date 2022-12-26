<?php 
include('../class/User.php');
$user = new User();
$user->adminLoginStatus();
include('include/header.php');
?>
<title>Admin's Dashboard</title>
<link rel="stylesheet" href="css/style.css">
<div class="container contact">	
	<?php include 'menus.php'; ?>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<a href="#"><strong><span class="fa fa-dashboard"></span> My Dashboard</strong></a>
		<hr>		
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-primary text-light">
								<div class="stat-panel text-center">
									<div class="stat-panel-number h1 "><?php echo $user->totalAdmins(""); ?></div>
									<div class="stat-panel-title text-uppercase">Total Admins</div>
								</div>
							</div>											
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-success text-light">
								<div class="stat-panel text-center">
									<div class="stat-panel-number h1 "><?php echo $user->totalLecturers(); ?></div>
									<div class="stat-panel-title text-uppercase">Total Lecturers</div>
								</div>
							</div>											
						</div>
					</div>		
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-success text-light">
								<div class="stat-panel text-center">
									<div class="stat-panel-number h1 "><?php echo $user->totalStudents(); ?></div>
									<div class="stat-panel-title text-uppercase">Total Students</div>
								</div>
							</div>											
						</div>
					</div>													
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-danger text-light">
								<div class="stat-panel text-center">												
									<div class="stat-panel-number h1 "><?php echo $user->totalCourses(); ?></div>
									<div class="stat-panel-title text-uppercase">Total Courses</div>
								</div>
							</div>											
						</div>
					</div>							
				</div>
			</div>
		</div>		
	</div>
</div>	
<?php include('include/footer.php');?>