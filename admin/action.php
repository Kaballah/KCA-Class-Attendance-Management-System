<?php
include('../class/User.php');
$user = new User();
if(!empty($_POST['action']) && $_POST['action'] == 'listUser') {
	$user->getUserList();
}
if(!empty($_POST['action']) && $_POST['action'] == 'listUser2') {
	$user->getUserList2();
}
if(!empty($_POST['action']) && $_POST['action'] == 'listUser3') {
	$user->getUserList3();
}
if(!empty($_POST['action']) && $_POST['action'] == 'userDelete') {
	$user->deleteUser();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getUser') {
	$user->getUser();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getStudent') {
	$user->getStudent();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addUser') {
	$user->addUser();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateUser') {
	$user->updateUser();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateStudent') {
	$user->updateStudent();
}
?>