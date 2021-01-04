
<?php
session_start();
$hostname="localhost";
$username="root";
$password="";
$db="blood_bank";
$con=mysqli_connect($hostname,$username,$password,$db);

 if(!$con ) {
               die('Could not connect: ' . mysql_error());
            }


?>