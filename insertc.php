<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['submit'])){

$name = $_POST['name'];
$health = $_POST['health'];
$age = $_POST['age'];
$gender  = $_POST['gender'];
$date1 = $_POST['date1'];
$place = $_POST['place'];
$vaccine = $_POST['vaccine'];

$query ="INSERT INTO child VALUES(null,'$name','$age','$gender','$date1','$place','$vaccine','$health')";
$query_run = mysqli_query($conn,$query);

if($query_run){
    
    $sql = "SELECT * FROM `place` WHERE `Place` = '$place'";
    $result = mysqli_query($conn,$sql);
    while($Num = mysqli_fetch_assoc($result)){
        $Num = $Num['Number'];
        $Num= $Num +1;
        $place = $_POST['place'];
        $sql ="UPDATE `place` SET `Number` = '$Num' WHERE `place` = '$place'";
        if($result=mysqli_query($conn,$sql)){
            echo("<script LANGUAGE='JavaScript'> window.alert('Succesfully Registered');window.location.href='child.php';</script>");
            //    header('Location: mother.php');
        }

    }
     
}
else{
    echo'<script>alert("Not Registered"); </script>';   
}


}



?> 