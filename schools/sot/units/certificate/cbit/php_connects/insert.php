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
            $id = $_POST['id'];
            // $answer = $_POST['answer'];
            // $answer = $_POST['answer'];
            // $remarks = $_POST['remarks'];

            $total = count((array)$id);
            $status = "";

            for($i = 0; $i < $total; $i++) {
                $id[$i]; //admission Number

                if(isset($check[$i])) //the checked checkboxes
                {
                      $qquery=mysqli_query($conn,"UPDATE fundamentals_of_computing_cbit SET status='Yes' WHERE sn = '$check[$i]'");

                      if ($qquery) {

                          $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Attendance Taken Successfully!</div>";
                      }
                      else
                      {
                          $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
                      }
                  
                }
            }

            // for($i = 0; $i < $total; $i++) {
            //     $studentid = $_POST['id'][$i];
            //     // $stuname = $_POST['stuname'][$i];
            //     // $stuclass = $_POST['stuclass'][$i];
            //     // $section = $_POST['section'][$i];
            //     // $attdate = $_POST['attdate'][$i];
            //     $attndc = $_POST['answer'][$i];
            //     $remarks = $_POST['remarks'][$i];
        
            //     $sql = $db->prepare("INSERT INTO fundamentals_of_computing_cbit (attendance, remarks) VALUES (?, ?)");
            //     $sql->bind_param($attndc, $remarks);
            //     $db->execute($sql);
            // }
    
            // $postValue = $id; // comma separated values
            // $ids = explode(', ', $postValue); // List of ids

            // foreach($ids as $id){
            //     $sql = "UPDATE fundamentals_of_computing_cbit SET attendance = '$answer', remarks = '$remarks'";
            // }

            // $sql = "UPDATE fundamentals_of_computing_cbit SET attendance = '$answer', remarks = '$remarks' WHERE sn BETWEEN 1 AND 100";
            
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