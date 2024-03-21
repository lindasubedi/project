<?php
session_start();
$firstname=$_POST['fnames'];
$lastname=$_POST['lnames'];
$age=$_POST['ages'];
$weight=$_POST['weights'];
$bloodg=$_POST['blood'];
$email=$_POST['em'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$allergy=$_POST['allergys'];
//echo "$firstname","$lastname","$age","$weight","$email","$pass","$cpass","$allergy";
include"database.php";
if($pass == $cpass){
    $qer=mysqli_query($conn,"INSERT INTO `bloodmanage`(`fname`,`lname`,`age`,`weig`,`bloodg`,`email`,`passwo`,`cpasswo`,`allergy`,`donatedinfo`) 
    VALUES('$firstname','$lastname', $age , $weight ,'$bloodg', '$email','$pass','$cpass','$allergy','')");
    header("location:sign_in.html");
}

?>