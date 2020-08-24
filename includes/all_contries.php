<div class="col-md-12 jumbotron">
           
           
           
           <form action="" method="post" >
               
               <div class="input-group">
                   <input type="search" placeholder="Enter country name to search" name="country" class="form-control">
                   <input type="submit" value="Search" class="input-group-append btn btn-primary">
               </div>
               
           </form>
           
           <?php 
    
            if(isset($_POST['country']))
            {
                header("Location:index.php?source=all_contries#".strtolower($_POST['country']));
            }
    
            ?>
           
           
           <?php
           
           $json_data = file_get_contents("https://disease.sh/v3/covid-19/countries");
           $data = json_decode($json_data,true);
           
           foreach($data as $x=>$i)
           {
               ?>
               
               <h1 id="<?php echo strtolower($i['country']); ?>"><?php echo $i['country']; ?></h1>
               
               <div class="row">
               
               <div class="col-md-6">
                   <img src="<?php echo $i['countryInfo']['flag']; ?>" alt="">
               </div>
               
               <div class="col-md-6">
                   
                           <h5>Total cases: <?php  echo $i['cases']; ?></h5>
                           <h5>Total deaths: <?php echo $i['deaths']; ?></h5>
                           <h5>Total recovered: <?php echo $i['recovered']; ?></h5>
                           <a class="btn btn-primary" href="index.php?source=view_detail&country=<?php echo $x; ?>">View detail</a>
                       
               </div>
               
               </div>
               
               
               
               
               <hr>
               
<?php      }       ?>
           
           
           
           
           
             
      
           
           
       </div>