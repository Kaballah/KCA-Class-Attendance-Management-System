<?php 
include('./php_connects/header.php');
session_start();

if(isset($_POST['save']))
{ 
    $member_id = $_POST['regNumber'];
    $email = $row['name']; 
    $checklistSQL = $connect->query("SELECT * FROM fundamentals_of_computing_cbit WHERE RegNumber = '$member_id' "); 
    $answer = $_POST['answer'];
    $remarks = $_POST['remarks'];
    $insertSQL = $connect->query("INSERT INTO cbit_students (attendance, remarks) VALUES ('$answer', '$remarks') ");
}
?>

<style>
    .header {
        background: #c4e3f3;
        max-width: 100%;
        height: 50px;
        padding: 10px;
        top: 0;
    }
    .logo {
        font-size: xx-large;
        font-weight: bold;
        margin-left: 2%;
        margin-top: 15px;
    }
    .logo a {
        text-decoration: none;
        color: #9d9d9d !important ;
    }
</style>

<body>

    <div class="header" draggable="false">
        <div class="logo">
            <a href="../../../../../lecturers/dashboard_sot.php">KCAU</a>
        </div>
    </div>
    
    <div class="container">
    <br>
    <br>
    <form action="./php_connects/insert.php" method="post">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <div class="alert alert-success">
                <h2 style="text-align:center; font-family:cursive;">Computer Organization and Architecture</h2>
            </div>
            <thead>
                <tr>
                    <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Registration Number</th>
                    <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Student Name</th>
                    <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Attendance</th>
                    <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Attendance</th>
                    <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Remarks</th>
                </tr>
            </thead>

            <tbody>
            <?php 
                $query = mysqli_query($dbhandle, "SELECT * FROM computer_organization_and_architecture_cbit_2")or die(mysql_error());
                while($row = mysqli_fetch_assoc($query)){
                    $id = $row['regNumber'];
                    $email = $row['name'];

                    $checklistSQL = mysqli_query($dbhandle, "SELECT * FROM computer_organization_and_architecture_cbit_2")or die(mysql_error());
                    ($row = $checklistSQL -> fetch_assoc());
            ?>

                <tr>
                    <td>
                        <?php echo $row['regNumber'] ?>
                    </td>
                    <td>
                        <?php echo $email ?>
                    </td>
                    <td>
                        <input type="checkbox" name="answer" value="yes" 
                            <?php if(isset ($_POST['yes'])){ echo "Yes";  } ?> 
                        /> Present
                    </td>
                    <td>
                        <input type="checkbox" name="answer" value="no" 
                            <?php if(isset($_POST['no'])) { echo "No"; } ?> 
                        /> Absent
                    </td>
                    <td>
                        <input type="text" name="remarks" class="remarks" placeholder"Remarks"/>
                    </td>

            <?php  
                }
            ?>						 
            </tbody>
        </table>
        <br/>
        <button class="btn btn-success pull-right" style="font-family:cursive;" name="submit_mult" type="submit">
            Submit
        </button>
    </form>
    </div>
</body>
</html>