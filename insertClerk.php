<?php

$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$UserName = $_POST['UserName'];
$Email  = $_POST['email'];
$Gender = $_POST['gender'];
$Password = $_POST['psw'];
$BatchNo = $_POST['batchNo'];

      $host="localhost";
      $dbUsername="root";
      $dbPassword="";
      $dbName="newborn";
$conn = new mysqli( $host,$dbUsername,$dbPassword ,$dbName);

if($conn->connect_error){
           die('connection failed:' . $conn->connect_error);
     }else{
        $stmt= $conn->prepare("insert into clerk(FirstName,LastName,UserName,Email,Gender,BatchNo,Password)
        values(?,?,?,?,?,?,?) ");
        $stmt->bind_param("sssssss", $FirstName, $LastName, $UserName,$Email,$Gender, $Password,$BatchNo);
        $stmt->execute();
        echo("<script LANGUAGE='JavaScript'> window.alert('Successfully Registered');window.location.href='index.html';</script>");
        $stmt->close();
        $conn->close();
     }




?> 