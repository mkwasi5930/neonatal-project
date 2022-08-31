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
        echo("<script LANGUAGE='JavaScript'> window.alert('log  in Successful');window.location.href='childId.php';</script>");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <title>Hello, admin</title>
  </head>
  <body  >
   
     <div class="container-fluid"   >
        <form action="" method="post" >
           
          
            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <br>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <br>
               
              <button type="submit">Login</button> 
              <br>                                   

              if you dont have un account register    <a  href="motherform.html">Register</a>
              <br>
            </div>
          
            
          </form>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>