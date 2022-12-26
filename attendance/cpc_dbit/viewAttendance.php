<?php 
  error_reporting(0);
  include '../dbcon.php';
  // include '../Includes/session.php';
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
</head>

<body id="page-top">
  <div id="wrapper">
    
    <?php include "Includes/sidebar.php";?>
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
        <?php include "Includes/topbar.php";?>
      
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Class Attendance</h1>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">View Class Attendance</h6>

                  <?php echo $statusMsg; ?>

                </div>

                <div class="card-body">
                  <form method="post">
                    <div class="form-group row mb-3">
                      <div class="col-xl-6">
                        <label class="form-control-label">Select Date<span class="text-danger ml-2">*</span></label>
                        <input type="date" class="form-control" name="dateTaken" id="exampleInputFirstName" placeholder="Class Arm Name">
                      </div>
                    </div>

                    <button type="submit" name="view" class="btn btn-primary">View Attendance</button>
                  </form>
                </div>
              </div>
  
              <div class="row">
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Class Attendance</h6>
                    </div>

                    <div class="table-responsive p-3">
                      <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Admission No</th>
                            <th>Remarks</th>
                            <th>Status</th>
                            <th>Date</th>
                          </tr>
                        </thead>

                        <tbody>

                          <?php
                            if(isset($_POST['view'])) {
                              $dateTaken =  $_POST['dateTaken'];

                              $query = "SELECT * FROM computer_programming_concept_dbit_3 WHERE dateTimeTaken = '$dateTaken'";
                              $rs = $conn->query($query);
                              $num = $rs->num_rows;
                              $sn=0;
                              $status="";

                              if($num > 0) { 
                                while ($rows = $rs->fetch_assoc()) {
                                  if($rows['attendance'] == '1'){
                                    $status = "Present"; $colour="#00FF00";
                                  }else{
                                    $status = "Absent";$colour="#FF0000";
                                  }

                                  $sn = $sn + 1;

                                  echo"
                                  <tr>
                                  <td>".$sn."</td>
                                  <td>".$rows['firstName']."</td>
                                  <td>".$rows['lastName']."</td>
                                  <td>".$rows['regNumber']."</td>
                                  <td>".$rows['remarks']."</td>
                                  <td style='background-color:".$colour."'>".$status."</td>
                                  <td>".$rows['dateTimeTaken']."</td>
                                  </tr>";
                                }
                              } else {
                                echo   
                                  "<div class='alert alert-danger' role='alert'>
                                    No Record Found!
                                  </div>";
                              }
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
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