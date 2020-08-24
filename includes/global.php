<h1>Global</h1>





<div class="col-md-12 jumbotron">




<?php


$json_data = file_get_contents("https://disease.sh/v3/covid-19/all");
$data = json_decode($json_data,true);




?>




               
               <div class="row">
                   
                   <div class="col-md-4">
                       
               
               
               
               
               
               
               
               <h5>Total cases: <?php echo $data['cases']; ?></h5>
               <h5>Today's Cases: <?php echo $data['todayCases']; ?></h5>
               <h5>Total deaths: <?php echo $data['deaths']; ?></h5>
               <h5>Today's deaths: <?php echo $data['todayDeaths']; ?></h5>
               <h5>Total recovered: <?php echo $data['recovered']; ?></h5>
               <h5>Today's Recovered: <?php echo $data['todayRecovered']; ?></h5>
               <h5>Active: <?php echo $data['active']; ?></h5>
               <h5>Critical: <?php echo $data['critical']; ?></h5>
               <h5>Population: <?php echo $data['population']; ?></h5>
                   </div>
                   
                   
               
               
               
               
                   
               
           
           
           <div class="col-md-8">
                       
                       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Total cases", <?php echo $data['cases']; ?>, "#00F"],
        ["Today's cases", <?php echo $data['todayCases']; ?>, "#00F"],
        ["Total deaths", <?php echo $data['deaths']; ?>, "#00F"],
        ["Today's deaths", <?php echo $data['todayDeaths']; ?>, "color: #00F"],
        ["Total recovered", <?php echo $data['recovered']; ?>, "color: #00F"],
        ["Today's recovered", <?php echo $data['todayRecovered']; ?>, "color: #00F"],
        ["Active", <?php echo $data['active']; ?>, "color: #00F"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Recent statistic of COVID-19 globally",
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width:100%; margin:auto; overflow:hidden; height: 400px;"></div>
      
           
           

                       
                   </div>
                   
               </div>
           
       </div>