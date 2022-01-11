<?php
session_start();

$con=mysqli_connect('localhost','root','','blood_bank');
$donorid=$_POST["DonorID"];
$bg=$_POST["bg"];
$dod=$_POST["dod"];
$amtd=$_POST["amtd"];
$reg="insert into donated_blood(DONOR_ID,DOD,BLOOD_GROUP,AMT_DONATED) values ('$donorid','$dod','$bg','$amtd')";
mysqli_query($con,$reg);
echo("Data Added Successfull");
//header('location:Donates.php');
    


?>