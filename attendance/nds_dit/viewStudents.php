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
                <h1 class="h3 mb-0 text-gray-800">All Student in Class</h1>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">All Student In Class</h6>
                        </div>

                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                              <tr>
                                <th>#</th>
                                <th>Registration Number</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Course</th>
                              </tr>
                            </thead>

                            <tbody>

                              <?php
                                $query = "SELECT * FROM students_table WHERE unit2 = 'Network design & setup'";
                                $rs = $conn->query($query);
                                $num = $rs->num_rows;

                                $sn = 0;
                                $status = "";

                                if($num > 0) { 
                                  while ($rows = $rs->fetch_assoc()) {
                                    $sn = $sn + 1;

                                    echo"
                                      <tr>
                                        <td>".$sn."</td>
                                        <td>".$rows['regNumber']."</td>
                                        <td>".$rows['firstName']."</td>
                                        <td>".$rows['lastName']."</td>
                                        <td>".$rows['course']."</td>
                                      </tr>";
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
                        </div>
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