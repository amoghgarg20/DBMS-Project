<?php
session_start();

$con=mysqli_connect('localhost','root','','blood_bank');
$patientid=$_POST["PatientID"];
$fname=$_POST["Fname"];
$lname=$_POST["Lname"];
$pnumber=$_POST["Pnumber"];
$pdob=$_POST["Pdob"];
$s="select * from patient where PATIENT_ID='$donorid'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "<script type='text/javascript'>alert('PATIENT-ID already exists!');window.location='Patient.php'</script>";
}
else{
    $reg="insert into patient(PATIENT_ID,PFIRST_NAME,PLAST_NAME,PDOB,PPHONE) values ('$patientid','$fname','$lname','$pdob','$pnumber')";
    mysqli_query($con,$reg);
    echo("Registration Successfull");
    header('location:Receives.php');
    
}


?>