<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>      

    
    <!DOCTYPE html>

    <h1>  CHILDS HEALTHY PROGRESS   <i class="fas fa-child    "></i></h1>
       
    
</head>
<body>



<!-- delete EDIT-->



<!-- fetching from database to the table -->

          <div class="card">
              <div class="card-body">
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

$query = "SELECT * FROM child";
$query_run = mysqli_query($conn, $query);
?>
              <table class="table table-dark">
  <thead>
    <h3>SCHEDULE</h3>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Names</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Date</th>
      <th scope="col">Birth Place</th>
      <th scope="col">Birth Place</th>
  
    </tr>
  </thead>

  <?php
if($query_run){
foreach($query_run as $row){
      ?>

  <tbody>
  
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['date1']; ?></td>
      <td><?php echo $row['place']; ?></td>
      <td><?php echo $row['vaccine']; ?></td>
      
    </tr>
    
  </tbody> 

  <?php
    }
}
else{
    echo "No Record Found";
}

?>

</table>


              </div>
           </div>
       

      </div>
      <a class="btn btn-primary" href="index.html" role="button">Back Home</a>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- JAVASCRIPT CODES TO UPDATE  AND EDIT DATA-->
<script>
  $(document).ready(function () {
            $('.deletebtn').on('click',function(){
 
              $('#deletemodal').modal('show');

              $tr = $(this).closest('tr');

              var data =$tr.children("td").map(function(){
                return $(this).text();

              }).get();

              console.log(data);
//<!--deletes by use of id in the input boxes-->
             $('#deleteid').val(data[0]);
            });
      });
</script>

    <script>
       $(document).ready(function () {
            $('.editbtn').on('click',function(){
 
              $('#editmodal').modal('show');

              $tr = $(this).closest('tr');

              var data =$tr.children("td").map(function(){
                return $(this).text();

              }).get();

              console.log(data);
// ...<!--update by use of id in the input boxes-->
              $('#updateid').val(data[0]);
              $('#name').val(data[1]);
              $('#age').val(data[2]);
              $('#gender').val(data[3]);
              $('#date1').val(data[4]);
              $('#place').val(data[5]);
              $('#vaccine').val(data[6]);

       });
      });
    


    </script>
</body>
</html>