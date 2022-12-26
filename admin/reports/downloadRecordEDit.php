<?php 
    error_reporting(0);
    include '../../dbcon.php';
    // include '../Includes/session.php';
?>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Admission No</th>
            <th>Reason</th>
            <th>Attendance</th>
            <th>Date</th>
        </tr>
    </thead>

    <?php 
        $filename="Entrepreneurship DIT Attendance list";
        $dateTaken = date("Y-m-d");

        $cnt=1;			
        $ret = mysqli_query($conn,"SELECT * FROM entrepreneurship_dit_3");

        if(mysqli_num_rows($ret) > 0 ) {
            while ($row=mysqli_fetch_array($ret)) { 
                if($row['attendance'] == '1') {
                    $status = "Present"; $colour="#00FF00";
                }else{
                    $status = "Absent";$colour="#FF0000";
                }

                echo '  
                    <tr>  
                        <td>'.$cnt.'</td> 
                        <td>'.$firstName= $row['firstName'].'</td> 
                        <td>'.$lastName= $row['lastName'].'</td>
                        <td>'.$admissionNumber= $row['regNumber'].'</td> 
                        <td>'.$className= $row['remarks'].'</td>
                        <td>'.$status=$status.'</td>	 	
                        <td>'.$dateTimeTaken=$row['dateTimeTaken'].'</td>	 					
                    </tr>  
                ';

                header("Content-type: application/octet-stream");
                header("Content-Disposition: attachment; filename=".$filename."-report.xls");
                header("Pragma: no-cache");
                header("Expires: 0");
                
                $cnt++;
            }
        }
    ?>
</table>