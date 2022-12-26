<?php 
	include('../class/User.php');
	$user = new User();
	$user->adminLoginStatus();
	include('include/header.php');
?>
<title>Student List</title>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>	

<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />

<script src="js/users3.js"></script>	

<link rel="stylesheet" href="css/style.css">

<div class="container contact">	
	<?php include 'menus.php'; ?>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<a href="#"><strong><span class="fa fa-dashboard"></span> Student List</strong></a>
		<hr>		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Add</button>
				</div>
			</div>
		</div>
		<table id="userList" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Registration Number</th>
					<th>Name</th>
					<th>School</th>
					<th>Course</th>
					<th>Units Enrolled</th>
					<th>Role</th>		
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div id="userModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="userForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Student</h4>
    				</div>
    				<div class="modal-body">
                        <div class="form-group">
							<label for="staffid" class="control-label">Registration Number*</label>
							<input type="text" class="form-control" id="staffid" name="staffid" placeholder="00/00000" required>							
						</div>
						<div class="form-group">
							<label for="firstname" class="control-label">First Name*</label>
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>							
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Last Name*</label>							
							<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>							
						</div>
                        <div class="form-group">
							<label for="lastname" class="control-label">Email*</label>							
							<input type="text" class="form-control"  id="email" name="email" placeholder="Email" required>							
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">School*</label>							
							<input type="text" class="form-control" id="designation" name="designation" placeholder="School" required>							
						</div>	   	
						<div class="form-group">
							<label for="lastname" class="control-label">Course*</label>							
							<input type="text" class="form-control"  id="course" name="course" placeholder="Course" required>							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 1</label>							
							<input type="text" class="form-control"  id="unit1" name="unit1" placeholder="Unit 1">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 2</label>							
							<input type="text" class="form-control"  id="unit2" name="unit2" placeholder="Unit 2">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 3</label>							
							<input type="text" class="form-control"  id="unit3" name="unit3" placeholder="Unit 3">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 4</label>							
							<input type="text" class="form-control"  id="unit4" name="unit4" placeholder="Unit 4">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 5</label>							
							<input type="text" class="form-control"  id="unit5" name="unit5" placeholder="Unit 5">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 6</label>							
							<input type="text" class="form-control"  id="unit6" name="unit6" placeholder="Unit 6">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 7</label>							
							<input type="text" class="form-control"  id="unit7" name="unit7" placeholder="Unit 7">							
						</div>	 
						<div class="form-group" id="passwordSection">
							<label for="lastname" class="control-label">Unit 8</label>							
							<input type="text" class="form-control"  id="unit8" name="unit8" placeholder="Unit 8">							
						</div>
						<div class="form-group">
							<label for="gender" class="control-label">Gender</label>							
							<label class="radio-inline">
								<input type="radio" name="gender" id="male" value="male" required>Male
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" id="female" value="female" required>Female
							</label>							
						</div>
						<div class="form-group">
							<label for="gender" class="control-label">Status</label>							
							<label class="radio-inline">
								<input type="radio" name="status" id="active" value="active" required>Active
							</label>
							<label class="radio-inline">
								<input type="radio" name="status" id="pending" value="pending" required>Pending
							</label>							
						</div>
                        <div class="form-group">
							<label for="user_type" class="control-label">User Type</label>
                            <label class="radio-inline">
								<input type="radio" name="user_type" id="student" value="student" required>Student
							</label>
						</div>
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="userid" id="userid" />
    					<input type="hidden" name="action" id="action" value="updateUser" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<?php include('include/footer.php');?>