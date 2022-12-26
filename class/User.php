<?php
session_start();
require('../admin/include/config.php');
class User extends Dbconfig {	
    protected $hostName;
    protected $userName;
    protected $password;
	protected $dbName;
	private $userTable = 'user';
	private $studentTable = 'students_table';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 		
			$database = new dbConfig();            
            $this -> hostName = $database -> serverName;
            $this -> userName = $database -> userName;
            $this -> password = $database ->password;
			$this -> dbName = $database -> dbName;			
            $conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            } else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}	
    public function loginStatus (){
		if(empty($_SESSION["userid"])) {
			header("Location: login.php");
		}
	}	
	public function login(){		
		$errorMessage = '';
		if(!empty($_POST["login"]) && $_POST["loginId"]!=''&& $_POST["loginPass"]!='') {	
			$loginId = $_POST['loginId'];
			$password = $_POST['loginPass'];
			if(isset($_COOKIE["loginPass"]) && $_COOKIE["loginPass"] == $password) {
				$password = $_COOKIE["loginPass"];
			} else {
				$password = md5($password);
			}	
			$sqlQuery = "SELECT * FROM ".$this->userTable." 
				WHERE email='".$loginId."' AND password='".$password."' AND status = 'active'";
			$resultSet = mysqli_query($this->dbConnect, $sqlQuery);
			$isValidLogin = mysqli_num_rows($resultSet);	
			if($isValidLogin){
				if(!empty($_POST["remember"]) && $_POST["remember"] != '') {
					setcookie ("loginId", $loginId, time()+ (10 * 365 * 24 * 60 * 60));  
					setcookie ("loginPass",	$password,	time()+ (10 * 365 * 24 * 60 * 60));
				} else {
					$_COOKIE['loginId' ]='';
					$_COOKIE['loginPass'] = '';
				}
				$userDetails = mysqli_fetch_assoc($resultSet);
				$_SESSION["userid"] = $userDetails['id'];
				$_SESSION["name"] = $userDetails['first_name']." ".$userDetails['last_name'];
				header("location: dashboard_sot.php"); 		
			} else {		
				$errorMessage = "Invalid login!";		 
			}
		} else if(!empty($_POST["loginId"])){
			$errorMessage = "Enter Both user and password!";	
		}
		return $errorMessage; 		
	}
	public function adminLoginStatus (){
		if(empty($_SESSION["adminUserid"])) {
			header("Location: index.php");
		}
	}		
	public function adminLogin(){		
		$errorMessage = '';
		if(!empty($_POST["login"]) && $_POST["email"]!=''&& $_POST["password"]!='') {	
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sqlQuery = "SELECT * FROM ".$this->userTable." 
				WHERE email='".$email."' AND password='".md5($password)."' AND status = 'active' AND type = 'administrator'";
			$resultSet = mysqli_query($this->dbConnect, $sqlQuery);
			$isValidLogin = mysqli_num_rows($resultSet);	
			if($isValidLogin){
				$userDetails = mysqli_fetch_assoc($resultSet);
				$_SESSION["adminUserid"] = $userDetails['id'];
				$_SESSION["admin"] = $userDetails['first_name']." ".$userDetails['last_name'];
				header("location: dashboard.php"); 		
			} else {		
				$errorMessage = "Invalid login!";		 
			}
		} else if(!empty($_POST["login"])){
			$errorMessage = "Enter Both user and password!";	
		}
		return $errorMessage; 		
	}
	public function getAuthtoken($email) {
		$code = md5(889966);
		$authtoken = $code."".md5($email);
		return $authtoken;
	}
	public function userDetails () {
		$sqlQuery = "SELECT * FROM ".$this->userTable." 
			WHERE id ='".$_SESSION["userid"]."' AND type = 'administrator'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$userDetails = mysqli_fetch_assoc($result);
		return $userDetails;
	}
	public function lecturerDetails () {
		$sqlQuery = "SELECT * FROM ".$this->userTable." 
			WHERE id ='".$_SESSION["userid"]."' AND type = 'lecturer'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$userDetails = mysqli_fetch_assoc($result);
		return $userDetails;
	}
	public function editAccount () {
		$message = '';
		$updatePassword = '';
		if(!empty($_POST["passwd"]) && $_POST["passwd"] != '' && $_POST["passwd"] != $_POST["cpasswd"]) {
			$message = "Confirm passwords do not match.";
		} else if(!empty($_POST["passwd"]) && $_POST["passwd"] != '' && $_POST["passwd"] == $_POST["cpasswd"]) {
			$updatePassword = ", password='".md5($_POST["passwd"])."' ";
		}		
		$updateQuery = "UPDATE ".$this->userTable." 
			SET first_name = '".$_POST["firstname"]."', last_name = '".$_POST["lastname"]."', email = '".$_POST["email"]."', mobile = '".$_POST["mobile"]."' , designation = '".$_POST["designation"]."', gender = '".$_POST["gender"]."' $updatePassword
			WHERE id ='".$_SESSION["userid"]."'";
		$isUpdated = mysqli_query($this->dbConnect, $updateQuery);	
		if($isUpdated) {
			$_SESSION["name"] = $_POST['firstname']." ".$_POST['lastname'];
			$message = "Account details saved.";
		}
		return $message;
	}	
	public function resetPassword(){
		$message = '';
		if($_POST['email'] == '') {
			$message = "Please enter username or email to proceed with password reset";			
		} else {
			$sqlQuery = "
				SELECT email 
				FROM ".$this->userTable." 
				WHERE email='".$_POST['email']."'";			
			$result = mysqli_query($this->dbConnect, $sqlQuery);
			$numRows = mysqli_num_rows($result);
			if($numRows) {			
				$user = mysqli_fetch_assoc($result);
				$authtoken = $this->getAuthtoken($user['email']);
				$link="<a href='../lecturers/reset_password.php?authtoken=".$authtoken."'>Reset Password</a>";				
				$toEmail = $user['email'];
				$subject = "Reset your password on KCA Lecture Login";
				$msg = "Hi there, click on this ".$link." to reset your password.";
				$msg = wordwrap($msg,70);
				$headers = "From: 2004764@students.kcau.ac.ke";
				if(mail($toEmail, $subject, $msg, $headers)) {
					$message =  "Password reset link send. Please check your mailbox to reset password.";
				}				
			} else {
				$message = "No account exist with entered email address.";
			}
		}
		return $message;
	}
	public function savePassword(){
		$message = '';
		if($_POST['password'] != $_POST['cpassword']) {
			$message = "Password does not match the confirm password.";
		} else if($_POST['authtoken']) {
			$sqlQuery = "
				SELECT email, authtoken 
				FROM ".$this->userTable." 
				WHERE authtoken='".$_POST['authtoken']."'";			
			$result = mysqli_query($this->dbConnect, $sqlQuery);
			$numRows = mysqli_num_rows($result);
			if($numRows) {				
				$userDetails = mysqli_fetch_assoc($result);
				$authtoken = $this->getAuthtoken($userDetails['email']);
				if($authtoken == $_POST['authtoken']) {
					$sqlUpdate = "
						UPDATE ".$this->userTable." 
						SET password='".md5($_POST['password'])."'
						WHERE email='".$userDetails['email']."' AND authtoken='".$authtoken."'";	
					$isUpdated = mysqli_query($this->dbConnect, $sqlUpdate);	
					if($isUpdated) {
						$message = "Password saved successfully. Please <a href='login.php'>Login</a> to access account.";
					}
				} else {
					$message = "Invalid password change request.";
				}
			} else {
				$message = "Invalid password change request.";
			}	
		}
		return $message;
	}
	public function getUserList(){		
		$sqlQuery = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' AND type = 'administrator' ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= '(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR first_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR designation LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR status LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR mobile LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}	
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		
		$sqlQuery1 = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' ";
		$result1 = mysqli_query($this->dbConnect, $sqlQuery1);
		$numRows = mysqli_num_rows($result1);
		
		$userData = array();	
		while( $users = mysqli_fetch_assoc($result) ) {		
			$userRows = array();
			$status = '';
			if($users['status'] == 'active')	{
				$status = '<span class="label label-success">Active</span>';
			} else if($users['status'] == 'pending') {
				$status = '<span class="label label-warning">Inactive</span>';
			} else if($users['status'] == 'deleted') {
				$status = '<span class="label label-danger">Deleted</span>';
			}
			$userRows[] = $users['staff_id'];
			$userRows[] = ucfirst($users['first_name']." ".$users['last_name']);
			$userRows[] = $users['gender'];			
			$userRows[] = $users['email'];	
			$userRows[] = $users['mobile'];	
			$userRows[] = $users['type'];
			$userRows[] = $status;						
			$userRows[] = '<button type="button" name="update" id="'.$users["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$userRows[] = '<button type="button" name="delete" id="'.$users["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$userData[] = $userRows;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"  	=>  $numRows,
			"recordsFiltered" 	=> 	$numRows,
			"data"    			=> 	$userData
		);
		echo json_encode($output);
	}
	public function getUserList2(){		
		$sqlQuery = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' AND type = 'Lecturer' ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= '(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR first_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR designation LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR status LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR mobile LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}	
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		
		$sqlQuery1 = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' ";
		$result1 = mysqli_query($this->dbConnect, $sqlQuery1);
		$numRows = mysqli_num_rows($result1);
		
		$userData = array();	
		while( $users = mysqli_fetch_assoc($result) ) {		
			$userRows = array();
			$status = '';
			if($users['status'] == 'active')	{
				$status = '<span class="label label-success">Active</span>';
			} else if($users['status'] == 'pending') {
				$status = '<span class="label label-warning">Inactive</span>';
			} else if($users['status'] == 'deleted') {
				$status = '<span class="label label-danger">Deleted</span>';
			}
			$userRows[] = $users['staff_id'];
			$userRows[] = ucfirst($users['first_name']." ".$users['last_name']);
			$userRows[] = $users['gender'];			
			$userRows[] = $users['email'];	
			$userRows[] = $users['mobile'];	
			$userRows[] = $users['type'];
			$userRows[] = $status;						
			$userRows[] = '<button type="button" name="update" id="'.$users["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$userRows[] = '<button type="button" name="delete" id="'.$users["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$userData[] = $userRows;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"  	=>  $numRows,
			"recordsFiltered" 	=> 	$numRows,
			"data"    			=> 	$userData
		);
		echo json_encode($output);
	}
	public function getUserList3(){		
		$sqlQuery = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' AND type = 'student' ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= '(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR first_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR designation LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR status LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR mobile LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}	
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		
		$sqlQuery1 = "SELECT * FROM ".$this->userTable." WHERE id !='".$_SESSION['adminUserid']."' ";
		$result1 = mysqli_query($this->dbConnect, $sqlQuery1);
		$numRows = mysqli_num_rows($result1);
		
		$userData = array();	
		while( $users = mysqli_fetch_assoc($result) ) {		
			$userRows = array();
			$status = '';
			if($users['status'] == 'active')	{
				$status = '<span class="label label-success">Active</span>';
			} else if($users['status'] == 'pending') {
				$status = '<span class="label label-warning">Inactive</span>';
			} else if($users['status'] == 'deleted') {
				$status = '<span class="label label-danger">Deleted</span>';
			}
			$userRows[] = $users['staff_id'];
			$userRows[] = ucfirst($users['first_name']." ".$users['last_name']);
			$userRows[] = $users['designation'];			
			$userRows[] = $users['course'];	
			$userRows[] = ucfirst($users['unit1'].", ".$users['unit2'].", ".$users['unit3'].", ".$users['unit4'].", ".$users['unit5'].", ".$users['unit6'].", ".$users['unit7'].", ".$users['unit8']);
			$userRows[] = $users['type'];
			$userRows[] = $status;						
			$userRows[] = '<button type="button" name="update" id="'.$users["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$userRows[] = '<button type="button" name="delete" id="'.$users["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$userData[] = $userRows;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"  	=>  $numRows,
			"recordsFiltered" 	=> 	$numRows,
			"data"    			=> 	$userData
		);
		echo json_encode($output);
	}
	public function deleteUser(){
		if($_POST["userid"]) {
			$sqlUpdate = "
				UPDATE ".$this->userTable." SET status = 'deleted'
				WHERE id = '".$_POST["userid"]."'";		
			mysqli_query($this->dbConnect, $sqlUpdate);		
		}
	}
	public function getUser(){
		$sqlQuery = "
			SELECT * FROM ".$this->userTable." 
			WHERE id = '".$_POST["userid"]."'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo json_encode($row);
	}
	public function getStudent(){
		$sqlQuery = "
			SELECT * FROM ".$this->userTable." 
			WHERE id = '".$_POST["userid"]."' AND type='student'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo json_encode($row);
	}
	public function updateUser() {
		if($_POST['userid']) {	
			$updateQuery = "UPDATE ".$this->userTable." 
			SET first_name = '".$_POST["firstname"]."', last_name = '".$_POST["lastname"]."', email = '".$_POST["email"]."', mobile = '".$_POST["mobile"]."' , designation = '".$_POST["designation"]."', gender = '".$_POST["gender"]."', status = '".$_POST["status"]."', type = '".$_POST['user_type']."'
			WHERE id ='".$_POST["userid"]."'";
			$isUpdated = mysqli_query($this->dbConnect, $updateQuery);		
		}	
	}
	public function updateStudent() {
		if($_POST['userid']) {	
			$updateQuery = "UPDATE ".$this->userTable." 
			SET staff_id = '".$_POST["staffid"]."', first_name = '".$_POST["firstname"]."', last_name = '".$_POST["lastname"]."', designation = '".$_POST["designation"]."', course = '".$_POST["course"]."' , unit1 = '".$_POST["unit1"]."', unit2 = '".$_POST["unit2"]."', unit3 = '".$_POST["unit3"]."', unit4 = '".$_POST["unit4"]."', unit5 = '".$_POST["unit5"]."', unit6 = '".$_POST["unit6"]."', unit7 = '".$_POST["unit7"]."', unit8 = '".$_POST["unit8"]."', gender = '".$_POST["gender"]."', status = '".$_POST["status"]."', type = '".$_POST['user_type']."'
			WHERE id ='".$_POST["userid"]."'";
			$isUpdated = mysqli_query($this->dbConnect, $updateQuery);		
		}	
	}
	public function saveAdminPassword(){
		$message = '';
		if($_POST['password'] && $_POST['password'] != $_POST['cpassword']) {
			$message = "Password does not match the confirm password.";
		} else {			
			$sqlUpdate = "
				UPDATE ".$this->userTable." 
				SET password='".md5($_POST['password'])."'
				WHERE id='".$_SESSION['adminUserid']."' AND type='administrator'";	
			$isUpdated = mysqli_query($this->dbConnect, $sqlUpdate);	
			if($isUpdated) {
				$message = "Password saved successfully.";
			}				
		}
		return $message;
	}
	public function adminDetails () {
		$sqlQuery = "SELECT * FROM ".$this->userTable." 
			WHERE id ='".$_SESSION["adminUserid"]."'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$userDetails = mysqli_fetch_assoc($result);
		return $userDetails;
	}	
	public function addUser () {
		if($_POST["email"]) {
			$authtoken = $this->getAuthtoken($_POST['email']);
			$insertQuery = "INSERT INTO ".$this->userTable."(staff_id, first_name, last_name, email, course, gender, password, mobile, designation, type, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8, status, authtoken) 
				VALUES ('".$_POST["staffid"]."', '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["course"]."', '".$_POST["gender"]."', '".md5($_POST["password"])."', '".$_POST["mobile"]."', '".$_POST["designation"]."', '".$_POST['user_type']."', '".$_POST["unit1"]."', '".$_POST["unit2"]."', '".$_POST["unit3"]."', '".$_POST["unit4"]."', '".$_POST['unit5']."', '".$_POST['unit6']."', '".$_POST['unit7']."', '".$_POST['unit8']."', 'active', '".$authtoken."')";
			$userSaved = mysqli_query($this->dbConnect, $insertQuery);
		}
	}
	public function totalAdmins () {
		$query = '';
		$sqlQuery = "SELECT * FROM `user` WHERE type='administrator' $query";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	public function totalLecturers () {
		$query = '';
		$sqlQuery = "SELECT * FROM `user` WHERE type='lecturer' $query";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	public function totalStudents () {
		$query = '';
		$sqlQuery = "SELECT * FROM `user` WHERE type='student' $query";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	public function totalCourses () {
		$query = '';
		$sqlQuery = "SELECT * FROM `courses` $query";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
}
?>