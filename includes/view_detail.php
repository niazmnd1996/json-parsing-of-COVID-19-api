<div class="col-md-12 jumbotron">
           
           
           
           
           <?php
    
    if(isset($_GET['country']))
    {
        $country_index = $_GET['country'];
    
           
           $json_data = file_get_contents("https://disease.sh/v3/covid-19/countries");
           $data = json_decode($json_data,true);
        ?>
               
               
               <h1><?php echo $data[$country_index]['country']; ?></h1>
               
               <div class="row">
                   
                   <div class="col-md-4">
                       <img src="<?php echo $data[$country_index]['countryInfo']['flag']; ?>" alt="">
               
               
               
               
               
               
               
               
               <h5>Total cases: <?php echo $data[$country_index]['cases']; ?></h5>
               <h5>Today's Cases: <?php echo $data[$country_index]['todayCases']; ?></h5>
               <h5>Total deaths: <?php echo $data[$country_index]['deaths']; ?></h5>
               <h5>Today's deaths: <?php echo $data[$country_index]['todayDeaths']; ?></h5>
               <h5>Total recovered: <?php echo $data[$country_index]['recovered']; ?></h5>
               <h5>Today's Recovered: <?php echo $data[$country_index]['todayRecovered']; ?></h5>
               <h5>Active: <?php echo $data[$country_index]['active']; ?></h5>
               <h5>Critical: <?php echo $data[$country_index]['critical']; ?></h5>
               <h5>Population: <?php echo $data[$country_index]['population']; ?></h5>
                   </div>
                   
                   
               
               
               
               
                   
               
           
           
           <div class="col-md-8">
                       
                       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Total cases", <?php echo $data[$country_index]['cases']; ?>, "#00F"],
        ["Today's cases", <?php echo $data[$country_index]['todayCases']; ?>, "#00F"],
        ["Total deaths", <?php echo $data[$country_index]['deaths']; ?>, "#00F"],
        ["Today's deaths", <?php echo $data[$country_index]['todayDeaths']; ?>, "color: #00F"],
        ["Total recovered", <?php echo $data[$country_index]['recovered']; ?>, "color: #00F"],
        ["Today's recovered", <?php echo $data[$country_index]['todayRecovered']; ?>, "color: #00F"],
        ["Active", <?php echo $data[$country_index]['active']; ?>, "color: #00F"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
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
           
           
                        <?php } ?>
           
       </div>