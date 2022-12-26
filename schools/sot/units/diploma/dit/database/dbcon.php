<?php
    $host = "localhost"; 
    $username = "root"; 
    $word = "";
    $db_name = "kca";
    $tbl_name = "cbit_students";
    $tbl_name2 = "students_table";

    $dbhandle = new mysqli($host, $username, $word) or die("Unable to connect to MySQL");
    $selected = mysqli_select_db($dbhandle, "kca") or die("Could not select examples");

    $conn = mysqli_connect("$host", "$username", "$word", "$db_name") or die("cannot connect");

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>