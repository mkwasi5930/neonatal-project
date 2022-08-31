<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<html>
  <head>
    <title>ChartJS - BarGraph</title>
    <style type="text/css">
      #chart-container {
        width: 500px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <center>
    <h1>PLACE OF BIRTH </h1>
   <h3> Home Vs Hospital   </h3>
    </center>
    <a href="index.html"  class="btn btn-danger"  >LogOut </a>
    <div id="chart-container">
      <canvas id="mycanvas"></canvas>
  
    </div>
    <script>
    $(document).ready(function(){
     $.ajax({
    url: "data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var Place = [];
      var Number = [];

      for(var i in data) {
        Place.push(data[i].Place);
        Number.push(data[i].Number);
      }

      var chartdata = {
        labels: Place,
        datasets : [
          {
            label: 'Place',
            backgroundColor: ['green','orange'],
            borderColor: 'orange',
            hoverBackgroundColor: 'gray',
            hoverBorderColor: 'gray',
            data: Number
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'pie',
        data: chartdata
      });
     },
    error: function(data) {
      console.log(data);
    }
  });
});
</script>
<!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>