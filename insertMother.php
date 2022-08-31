<?php

$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$UserName = $_POST['UserName'];
$Email  = $_POST['email'];
$Status = $_POST['status'];
$Password = $_POST['psw'];


      $host="localhost";
      $dbUsername="root";
      $dbPassword="";
      $dbName="newborn";
$conn = new mysqli( $host,$dbUsername,$dbPassword ,$dbName);

if($conn->connect_error){
           die('connection failed:' . $conn->connect_error);
     }else{
        $stmt= $conn->prepare("insert into mother( FirstName,LastName,UserName,Email,MaritalStatus,Password)
        values(?,?,?,?,?,?) ");
        $stmt->bind_param("ssssss", $FirstName, $LastName, $UserName,$Email,$Status, $Password);
        $stmt->execute();
        echo("<script LANGUAGE='JavaScript'> window.alert('Mother Registered Successfuly');window.location.href='motherLogin.php';</script>");
        $stmt->close();
        $conn->close();
     }




?> 