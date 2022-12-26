<?php 
    include('../class/User.php');
    $user = new User();
    $user->adminLoginStatus();
	include('include/header.php');
?>

<title>Reports</title>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>	

<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />

<style>
    .btn {
        color: black;
        padding: 15px;
        margin: 10px;
    }
    a {
        text-decoration: none;
        color: black;
    }
    a:hover {
        text-decoration: none;
        color: white;
    }
</style>

<script src="js/users2.js"></script>	

<link rel="stylesheet" href="css/style.css">

<div class="container contact">	
	<?php include 'menus.php'; ?>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<a href="#"><strong><span class="fa fa-dashboard"></span>Download Reports</strong></a>
		<hr>		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
                    <h2>CBIT</h2>
					<button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordFcCbit.php">Fundamentals of Computing</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCrCbit.php">Customer Relations</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordIwCbit.php">Internet and the Web</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordBimCbit.php">Business Information Management</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordBemCbit.php">Business and Enterprise Management</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCsCbit.php">Communication Skills</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordBmCbit.php">Business Mathematics</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordFaCbit.php">Fundamentals of Accounting</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCasCbit.php">Computer Application Software</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCoaCbit.php">Computer Organisational and Architecture</a>
                    </button>
				</div>
                <div class="col-md-10">
                    <h2>CIT</h2>
					<button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordCrCit.php">Customer Relation</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCaSoCit.php">Computer and Society</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordIwCit.php">Internet and the Web</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordFpCit.php">Foundation Physics</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordIsCit.php">Information System</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCoaCit.php">Computer Organisational and Architecture</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCsCit.php">Communication Skills</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordMsCit.php">Mathematics for Science</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCasCit.php">Computer Application Software</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordOsCit.php">Operating Systems</a>
                    </button>
				</div>
				<div class="col-md-10">
                    <h2>DIT</h2>
					<button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordCoaDit.php">Computer Organisational and Architecture</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCsDit.php">Communication Skills</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordMsDit.php">Mathematics for Science</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCasDit.php">Computer Application Software</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordOsDit.php">Operating System</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordHalsDit.php">Health Awareness Life Skills</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordSadDit.php">System Analysis and Design</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordIlDit.php">Information Literacy</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPdDit.php">Principles of Database</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordWddDit.php">Web Design and Development</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordDsaDit.php">Data Structures and Algorithm</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordFcnDit.php">Fundamentals of Computer Networks</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordEDit.php">Entrepreneurship</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPmDit.php">Programming Methodology</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordFmDit.php">Financial Management for IT</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordHciDit.php">Human Computer Interaction</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordNdsDit.php">Network Design and Setup</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordScDit.php">Structured Cabling</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordJpDit.php">Java Programming</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordApDit.php">Application Programming</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordEcomDit.php">E-Commerce</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordFomDit.php">Fundamentals of Organisational Management</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPDit.php">Project</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPcdmDit.php">Principles of Computer Support and Maintenance</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordDpveDit.php">Desktop Photography and Video Editing</a>
                    </button>
                    <!-- <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordADit.php">Attachment</a>
                    </button>     -->
			    </div>
                <div class="col-md-10">
                    <h2>DBIT</h2>
					<button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordCsDbit.php">Communication Skills</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordBmDbit.php">Business Mathematics</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordFaDbit.php">Fundamentals of Accounting</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCasDbit.php">Computer Application Software</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCoaDbit.php">Computer Organization and Architecture</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordHalsDbit.php">Health Awareness Life Skills</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordIlDbit.php">Information Literacy</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordDmsDbit.php">Database Management System</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPmDbit.php">Principles of Management</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordSadDbit.php">System Analysis and Design</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordBmaDbit.php">Business Management</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCpcDbit.php">Computer Programming Concepts</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordIapDbit.php">Internet Application Programming</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordEsDbit.php">Entrepreneurship Skills</a>
                    </button>
					<button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCosDbit.php">Computer Operating System</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordBasDbit.php">Business Application Software</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordOoadDbit.php">Object Oriented Analysis and Design</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordDsaDbit.php">Data Structures and Algorithm</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPmaDbit.php">Principles of Marketing</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs" name="add" id="addUser">
                        <a class="collapse-item" href="./reports/downloadRecordGeDbit.php">General Economics</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordBisDbit.php">Business Information Strategy</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordCaDbit.php">Cost Accounting</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordPDbit.php">Project</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordHrmDbit.php">Human Resource Management</a>
                    </button>
					<!-- <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordDpveDit.php">Desktop Photography and Video Editing</a>
                    </button>
                    <button type="button" class="btn btn-success btn-xs">
                        <a class="collapse-item" href="./reports/downloadRecordADit.php">Attachment</a>
                    </button> -->
				</div>
			</div>
		</div>
</div>
</div>	
<?php include('include/footer.php');?>