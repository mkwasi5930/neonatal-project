<?php

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$UserName = $_POST['UserName'];
$Email  = $_POST['Email'];
$Profession = $_POST['Profession'];
$Gender = $_POST['Gender'];
$Password = $_POST['psd'];
$Contract = $_POST['Contract'];

      $host="localhost";
      $dbUsername="root";
      $dbPassword="";
      $dbName="newborn";
$conn = new mysqli( $host,$dbUsername,$dbPassword ,$dbName);

if($conn->connect_error){
           die('connection failed:' . $conn->connect_error);
     }else{
        $stmt= $conn->prepare("insert into doctor(FirstName,LastName,UserName,Email,Profession,Gender,Password,Contract)
        values(?,?,?,?,?,?,?,?) ");
        $stmt->bind_param("ssssssis", $FirstName, $LastName, $UserName,$Email, $Profession, $Gender, $Password, $Contract);
        $stmt->execute();
        echo("<script LANGUAGE='JavaScript'> window.alert('Successfully Registered');window.location.href='docterRecords.php';</script>");
        $stmt->close();
        $conn->close();
     }




?> 