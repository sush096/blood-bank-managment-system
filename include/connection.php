<?php
// session_start();
   $username=mysqli_real_escape_string($con,$_POST['email']);
   $password=mysqli_real_escape_string($con,$_POST['password']);
   $name=mysqli_real_escape_string($con,$_POST['name']);
   $phn=mysqli_real_escape_string($con,$_POST['mobile']);
   $dob=mysqli_real_escape_string($con,$_POST['dob']);
   $bld_grp=mysqli_real_escape_string($con,$_POST['blood_group']);
   $address=mysqli_real_escape_string($con,$_POST['address']);
   $gender=mysqli_real_escape_string($con,$_POST['gender']);
   $description=mysqli_real_escape_string($con,$_POST['description']);

 

?>