<?php
session_start();

$con=mysqli_connect('localhost','root','','blood_bank');
$patientid=$_POST["PatientID"];
$bg=$_POST["bg"];
$dor=$_POST["dor"];
$amtp=$_POST["amtp"];
$sql="select * from blood_stock where BLOOD_GROUP='$bg';";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
if($amtp>$row['AMT_AVAILABLE']){
    echo("Required amount of blood of given bloog-group is not available.");
    //header('location:Patient.php');
}
else{
    $reg="insert into received_blood(PATIENT_ID,DOR,BLOOD_GROUP,AMT_RECEIVED) values ('$patientid','$dor','$bg','$amtp')";
    mysqli_query($con,$reg);
    echo("Data Added Successfull");
    //header('location:Donates.php');
}


?>