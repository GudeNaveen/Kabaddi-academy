<?php

$conn=mysqli_connect("localhost","root","","logindetails");
/*
if($conn){
    echo "connected"."<br/>";

}
else{
    echo "not connected"."<br/>";
}


$create="create database project";
$createdata=mysqli_query($conn,$create);
if($createdata)
    echo "created database"."<br/>";
else
    echo "not created database"."<br/>";

$use="use project";
$usage=mysqli_query($conn,$use);
if($usage)
    echo "Database ready to use"."<br/>";
else
    echo "Database not selected";

    $table="create table player(firstName varchar(20),lastName varchar(20),email varchar(20),phone varchar(10),gender varchar(10),role varchar(20),dob varchar(20), address varchar(20),city varchar(10),state varchar(20))";
    $tablecreated=mysqli_query($conn,$table);
    if($tablecreated)
        echo "table created";
    else
        echo "table not created";

*/

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];


$insert = "insert into user values('$firstName', '$lastName', '$email', '$password', '$gender', '$dob')";
$insert_data=mysqli_query($conn,$insert);
if ($insert_data) {
    // Redirect to the login page
    header("Location: login.html");
    exit;
} else {
    echo "Signup failed. Please try again.";
}
?>
