<?php
session_start();
$con=mysqli_connect('localhost','root','','blood_bank');
if(isset($_REQUEST["submit"])){
    $donorid=$_REQUEST["DonorID"];
    $s="select * from donor where DONOR_ID='$donorid'";
    $query=mysqli_query($con,$s);
    $q="select * from donated_blood where DONOR_ID='$donorid'";
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
    <title>Donor Details</title>
    <link href="View.css" rel="stylesheet"/>
</head>
<body>
    <div class="head">
        <h1>DONOR DETAILS</h1>
    </div>
    <div class="form">
        <form method="post">
            Enter the Donor-ID:
            <input type="number" name="DonorID">
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
                <td>Donor-ID</td>
                <td><?php echo($row["DONOR_ID"]) ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo($row["FIRST_NAME"]) ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo($row["LAST_NAME"]) ?></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><?php echo($row["DOB"]) ?></td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><?php echo($row["PHONE"]) ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="head">
            <h1>DONATION DETAILS</h1>
        </div>
        <table class="table2">
            <thead>
                <th>Date of Donation</th>
                <th>Blood Group</th>
                <th>Amount Donated in Units(1 Unit=100ml)</th>
            </thead>
            <?php
            if(isset($_REQUEST["submit"])){
                for($i=0;$i<$num;$i++){
                    $row2=mysqli_fetch_array($query2);
            ?>
            <tr>
                <td><?php echo($row2["DOD"]) ?></td>
                <td><?php echo($row2["BLOOD_GROUP"]) ?></td>
                <td><?php echo($row2["AMT_DONATED"]) ?></td>
            </tr>
            <?php }} ?>
        </table>
    </div>   
</body>
</html>