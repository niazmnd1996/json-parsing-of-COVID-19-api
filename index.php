<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    
</head>
<body>
   
   
   <div class="container">
   
   <div class="col-md-12 jumbotron">
           <h1>COVID-19 recent statistic</h1>
       </div>
   
   <div class="row">
       
       
       
       <div class="col-md-3">
           <ul class="list-group">
               
               <a href="index.php?source=global"><li class="list-group-item">View Global COVID-19 statistics</li></a>
               <a href="index.php?source=all_contries"><li class="list-group-item">View Countries COVID-19 statistics</li></a>
               
           </ul>
       </div>
       
      
      
      <div class="col-md-9">
               
       
       
       <?php 
          
          if(isset($_GET['source']))
          {
              include "includes/".$_GET['source'].".php";
          }
          else
          {
              include "includes/global.php";
          }
          
          ?>
       
       
       
          
      </div>
       
       
       
   </div>
   
   
   
   <div class="col-md-12 bg-dark text-light" style="padding:20px;" >
           <p>Designed and developed by: Niaz Muhammad</p>
           <p>Gmail: niazmnd1996@gmail.com</p>
       </div>
   
   </div>
    
</body>
</html>