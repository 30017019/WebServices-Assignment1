<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP - Subject Files</title>
  </head>
  <body class="container">
  

  <?php include 'connection.php'; ?>
  
<!-- menu row -->
    <div class="row" style="box-shadow: 0 4px 20px; height:60px; align-items:center;">
      <div class="col-4">
      <a href="index.php">
        <img src="images/logo.png" class="img-rounded" alt="Cinque Terre" style="width:100px;">
      </a>
      </div>
      
      
      <div class="col-8 d-flex justify-content-end">
        <a href="index.php">
          <button type="button" class="btn btn-info mr-4 mb-2" >HOME</button>
        </a>
        <a href="insert.php">  
        <button type="button" class="btn btn-info mr-4 mb-2" >ENTER DATA</button>
        </a>
        
      </div>

     
</div>
 </div>
<br>
    <br><br>
    <div class="row" style="height:60px; border:3px solid; border-color:#EEEEEE; ">

        <div  class="col">
        
        
            <ul class="nav ">

             <?php foreach($result as $menu_item): ?>
              
                <li class="nav-item active">
                
                <a class="nav-link text-white" href="index.php?product='<?php echo $menu_item['item_no']; ?>'">
                    <button type="button" class="btn btn-primary mr-4 mb-2">
                   
                    <?php echo $menu_item['item_no']; ?></button>
                    </a>
                    
                                      
                </li>
              
              <?php endforeach; ?>

              <li class="nav-item active">
              <!-- <button type="button" class="btn btn-primary mr-4">
                    <a class="nav-link text-white" href="insert.php">
                    ENTER NEW SUBJECT
                    </a>
                    </button> -->
                </li>

            </ul>
            
            <hr width="100%">
        
        </div>
    </div>
  