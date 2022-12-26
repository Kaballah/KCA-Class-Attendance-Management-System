<?php
include('../class/User.php');

if(!empty($_POST['action']) && $_POST['action'] == 'addUser') {
	$user->addUser();
}
?>