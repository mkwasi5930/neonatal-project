<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['update'])){

$id = $_POST['updateid'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender  = $_POST['gender'];
$date1 = $_POST['date1'];
$place = $_POST['place'];
$vaccine = $_POST['vaccine'];

$query ="UPDATE child SET name='$name',age='$age',gender='$gender',date1='$date1',place='$place',vaccine='$vaccine' WHERE id='$id' ";
$query_run = mysqli_query($conn, $query);

if($query_run){
    echo("<script LANGUAGE='JavaScript'> window.alert('Data updated successfully');window.location.href='schedule.php';</script>");
//    header('Location: mother.php');
}
else{
    echo'<script>alert("Failed to update"); </script>';   
}


}



?> 