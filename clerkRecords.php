<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Code to Fetch All Data from MySQL Database and Display in html Table</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="float-left">
                <h2>CLERK  RECORDS</h2>
            </div>            
            <div class="float-right">
                <a href="clerkForm.html" class="btn btn-success">Add New CLERK</a>
                <a href="adminpage.php"  class="btn btn-danger"  >Back </a>
                <a href="index.html"  class="btn btn-danger"  >LogOut </a>
            </div>
           
            <table class="table">
              <thead>
                <tr>           
                  <th scope="col">FirstName</th>
                  <th scope="col">LastName</th>
                  <th scope="col">UserName</th>                                   
                  <th scope="col">Email</th>                  
                  <th scope="col">Gender</th>
                  <th scope="col">BatchNO</th>
                  <th scope="col">Password</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                 
                  
                </tr>
              </thead>
              <tbody>
                <?php
                      include 'css/connection.php';
                       $query="select * from clerk limit 20"; // Fetch all the data from the table customers
                      $result=mysqli_query($conn,$query);
                ?>
                
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>                  
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>                                                      
                    <td><a href="edit.php?custId=<?php echo $array[0];?>" class="btn btn-primary">Edit</a> </td>
                    <td> <a href="delete.php?custId=<?php echo $array[0];?>" class="btn btn-danger">Delete</a> </td>          
                                        
                </tr>
                <?php endwhile; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
   
</body>
</html>
