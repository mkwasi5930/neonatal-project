<?php 

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="newborn";
$conn = new mysqli( $host,$dbUsername,$dbPassword ,$dbName);

if($conn->connect_error){
     die('connection failed:' . $conn->connect_error);
}


if(isset($_POST['uname'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['psw'];
    
    $sql="select * from mother where UserName='".$uname."'AND Password='".$password."' limit 1";
    
    $result= mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo("<script LANGUAGE='JavaScript'> window.alert('log  in Successful');window.location.href='childrecords.php';</script>");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>