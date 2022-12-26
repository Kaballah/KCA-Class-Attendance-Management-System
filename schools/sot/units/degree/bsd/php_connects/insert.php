<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Tab</title>

    <?php
        include('../database/dbcon.php');
    ?>

</head>
<body>
    <center>
    <?php
            // $regno = $_REQUEST['regNumber'];
            // $name;
            $answer = $_POST['answer'];
            $answer = $_POST['answer'];
            $remarks = $_POST['remarks'];
    
            $sql = "UPDATE fundamentals_of_computing_cbit SET attendance = '$answer', remarks = '$remarks' WHERE sn BETWEEN 1 AND 100";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>Thank you for filling the attendance.</h3>";
            } else{
                echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            }
            mysqli_close($conn);
        // }
    ?>
    </center>    

</body>
</html>