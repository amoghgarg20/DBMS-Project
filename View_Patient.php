<?php
session_start();
$con=mysqli_connect('localhost','root','','blood_bank');
if(isset($_REQUEST["submit"])){
    $patientid=$_REQUEST["PatientID"];
    $s="select * from patient where PATIENT_ID='$patientid'";
    $query=mysqli_query($con,$s);
    $q="select * from received_blood where PATIENT_ID='$patientid'";
    $query2=mysqli_query($con,$q);
    $num=mysqli_num_rows($query2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link href="View.css" rel="stylesheet"/>
</head>
<body>
    <div class="head">
        <h1>PATIENT DETAILS</h1>
    </div>
    <div class="form">
        <form method="post">
            Enter the Patient-ID:
            <input type="number" name="PatientID">
            <input type="submit" name="submit" value="Search">
        </form>
    </div>
    <div>
        <table class="table1" border="1">
            <?php
            if(isset($_REQUEST["submit"])){
                $row=mysqli_fetch_array($query);
            ?>
            <tr>
                <td>Patient-ID</td>
                <td><?php echo($row["PATIENT_ID"]) ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo($row["PFIRST_NAME"]) ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo($row["PLAST_NAME"]) ?></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><?php echo($row["PDOB"]) ?></td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><?php echo($row["PPHONE"]) ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="head">
            <h1>RECEIVING DETAILS</h1>
        </div>
        <table class="table2">
            <thead>
                <th>Date of Receiving</th>
                <th>Blood Group</th>
                <th>Amount Received in Units(1 Unit=100ml)</th>
            </thead>
            <?php
            if(isset($_REQUEST["submit"])){
                for($i=0;$i<$num;$i++){
                    $row2=mysqli_fetch_array($query2);
            ?>
            <tr>
                <td><?php echo($row2["DOR"]) ?></td>
                <td><?php echo($row2["BLOOD_GROUP"]) ?></td>
                <td><?php echo($row2["AMT_RECEIVED"]) ?></td>
            </tr>
            <?php }} ?>
        </table>
    </div>   
</body>
</html>