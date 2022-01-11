<?php
session_start();

$con=mysqli_connect('localhost','root','','blood_bank');
$donorid=$_POST["DonorID"];
$fname=$_POST["Fname"];
$lname=$_POST["Lname"];
$dnumber=$_POST["Dnumber"];
$dob=$_POST["Ddob"];
$s="select * from donor where DONOR_ID='$donorid'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$cyear= date("Y");
$parts = explode('-', $dob);
$year=$parts[0];
if($num==1){
    echo "<script type='text/javascript'>alert('Donor-ID already exists!');window.location='Donor.php'</script>";
}
else if($cyear - $year <=18){
    echo "<script type='text/javascript'>alert('Donor age must be greater than 18');window.location='Donor.php'</script>";
}
else{
    $reg="insert into donor(DONOR_ID,FIRST_NAME,LAST_NAME,DOB,PHONE) values ('$donorid','$fname','$lname','$dob','$dnumber')";
    mysqli_query($con,$reg);
    echo("Registration Successfull");
    header('location:Donates.php');
    
}


?>