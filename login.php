<?php
/*
$conn=mysqli_connect("localhost","root","","register");
/*if($conn){
    echo "connected"."<br/>";

}
else{
    echo "not connected"."<br/>";
}

$create="create database register";
$createdata=mysqli_query($conn,$create);
if($createdata)
    echo "created database"."<br/>";
else
    echo "not created database"."<br/>";

$use="use register";
$usage=mysqli_query($conn,$use);
if($usage)
    echo "Database ready to use"."<br/>";
else
    echo "Database not selected";

    $table="create table register_details(Name varchar(20),Email varchar(20),Password varchar(20),Cpassword varchar(20))";
    $tablecreated=mysqli_query($conn,$table);
    if($tablecreated)
        echo "table created";
    else
        echo "table not created";*/
/*
$name = $_POST['name'];
$product= $_POST['email'];
$quantity = $_POST['password'];
$address = $_POST['confirmpassword'];


$insert = "insert into register_details values('$name', '$product', '$quantity', '$address')";
$insert_data=mysqli_query($conn,$insert);
/*if($insert_data)
    echo "Data inserted"."<br/>";
else
    echo "Data not Inserted "."<br/>";*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="ecommers.html" method="get">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
