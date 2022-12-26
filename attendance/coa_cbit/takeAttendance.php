<?php 
  error_reporting(0);
  include '../dbcon.php';
  // include '../Includes/session.php';
  $dateTaken = date("Y-m-d");

  $qurty=mysqli_query($conn,"SELECT * from computer_organization_and_architecture_cbit_2  WHERE dateTimeTaken='$dateTaken'");
  $count = mysqli_num_rows($qurty);

  if($count == 0) { //if Record does not exsit, insert the new record

    //insert the students record into the attendance table on page load
    $qus=mysqli_query($conn,"SELECT * FROM students_table WHERE unit5 = 'Computer Organization & architecture' ");
    while ($ros = $qus->fetch_assoc()) {
      $qquery=mysqli_query($conn,"INSERT INTO computer_organization_and_architecture_cbit_2 (regNumber, firstName, lastName, attendance, remarks, dateTimeTaken) 
      value('$ros[regNumber]', '$ros[firstName]', '$ros[lastName]','0', '$ros[remarks]', '$dateTaken')");
    }
  }

  if(isset($_POST['save'])) {

    $admissionNo=$_POST['regNumber'];
    $check=$_POST['check'];
    $N = count($admissionNo);
    $status = "";

    //check if the attendance has not been taken i.e if no record has a status of 1
    $qurty=mysqli_query($conn,"SELECT * FROM computer_organization_and_architecture_cbit_2  WHERE dateTimeTaken='$dateTaken' AND attendance = '1'");
    $count = mysqli_num_rows($qurty);

    if($count > 0) {
      $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>Attendance has been taken for today!</div>";
    } else {
      for($i = 0; $i < $N; $i++) {
        $admissionNo[$i];

        if(isset($check[$i])) {
          $qquery=mysqli_query($conn,"UPDATE computer_organization_and_architecture_cbit_2 SET attendance='1' WHERE regNumber = '$check[$i]' AND dateTimeTaken='$dateTaken'");

          if ($qquery) {
            $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Attendance Taken Successfully!</div>";
          } else {
            $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
          }
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Attendance</title>

  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">



  <script>
    function classArmDropdown(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else { 
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","ajaxClassArms2.php?cid="+str,true);
        xmlhttp.send();
      }
    }
  </script>
</head>

<body id="page-top">
  <div id="wrapper">
    
    <?php include "Includes/sidebar.php";?>
  
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
        <?php include "Includes/topbar.php";?>
        
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
              Take Attendance (Today's Date : <?php echo $todaysDate = date("m-d-Y");?>)
            </h1>
          </div>

          <div class="row">
            <div class="col-lg-12">
              
              <form method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">All Student in Class</h6>
                        <h6 class="m-0 font-weight-bold text-danger">Note: <i>Click on the checkboxes besides each student to take attendance!</i></h6>
                      </div>
                      <div class="table-responsive p-3">
                        <?php echo $statusMsg; ?>
                        <table class="table align-items-center table-flush table-hover">
                          <thead class="thead-light">
                            <tr>
                              <th>#</th>
                              <th>Registration Number</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Class</th>
                              <th>Check</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $query = "SELECT * FROM students_table WHERE unit5 = 'Computer Organization & architecture'";
                              $rs = $conn->query($query);
                              $num = $rs->num_rows;
                              $sn=0;
                              $status="";

                              if($num > 0) { 
                                while ($rows = $rs->fetch_assoc()) {
                                  $sn = $sn + 1;
                                  echo"
                                    <tr>
                                    <td>".$sn."</td>
                                    <td>".$rows['regNumber']."</td>
                                    <td>".$rows['firstName']."</td>
                                    <td>".$rows['lastName']."</td>
                                    <td>".$rows['remarks']."</td>
                                    <td><input name='check[]' type='checkbox' value=".$rows['regNumber']." class='form-control'></td>
                                    </tr>";
                                  echo "<input name='regNumber[]' value=".$rows['regNumber']." type='hidden' class='form-control'>";
                                }
                              } else {
                                echo   
                                  "<div class='alert alert-danger' role='alert'>
                                    No Record Found!
                                  </div>";
                              }

                            ?>
                          </tbody>
                        </table>

                        <br>

                        <button type="submit" name="save" class="btn btn-primary">Take Attendance</button>

                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
  
        <?php include "Includes/footer.php";?>
  
      </div>
    </div>
  </div>
  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable();
      $('#dataTableHover').DataTable();
    });
  </script>
</body>

</html>