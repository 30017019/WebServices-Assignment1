<html>
  <head>
    <style>
      #img-justify{
        align-items: center;
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        vertical-align: middle;
        
      }

      .flip-box {
        align-items: center;
        background-color: transparent;
        img-fluid;
        
        width: 600px;
        height: 400px;
        border: 1px solid #f1f1f1;
        perspective: 1000px; /* Remove this if you don't want the 3D effect */
      }

      /* This container is needed to position the front and back side */
      .flip-box-inner {
        align-items: center;
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
      }

      /* Do an horizontal flip when you move the mouse over the flip box container */
      .flip-box:hover .flip-box-inner {
        align-items: center;
        transform: rotateY(180deg);
      }

      /* Position the front and back side */
      .flip-box-front, .flip-box-back {
        align-items: center;
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden; /* Safari */
        backface-visibility: hidden;
      }

      /* Style the front side (fallback if image is missing) */
      .flip-box-front {
        align-items: center;
        background-color: #bbb;
        color: black;
      }

      /* Style the back side */
      .flip-box-back {
        align-items: center;
        background-color: dodgerblue;
        color: white;
        transform: rotateY(180deg);
      }
    </style>
  </head>
  <body class="container">

<link rel="stylesheet" type="text/css" href="style.css">
<!-- include header.php this contains html code above our main content -->
<?php include 'template/header.php'; ?>
<!-- Display record in div below -->
    <!-- <div class="row">
        <div  class="col"> -->
        <?php
        // check if the subject get value exits
        
        if(isset($_GET['product']))
        {
            // remove single quotes from subject get value
            $item_number = trim($_GET['product'], "'");

            // run sql command to select record based on get value
            $record = $connection->query("select * from product where item_no='$item_number'") or die($connection->error());

            // convert $record into an array for us to echo out on screen
            $row = $record->fetch_assoc();
            
            // create variables that hold data from db fields
            $item = $row['item_no'];
            $object_class = $row['object_class'];
            $procedures = $row['procedures'];
            $description = $row['description'];
            $subject_image = $row['subject_image'];
            $ch=$row['ch'];
            $sta=$row['sta'];
            $an=$row['an'];
            $appa=$row['appa'];
            $mhe=$row['mhe'];
            $appb=$row['appb'];
            $dod=$row['dod'];
            $ooo=$row['ooo'];
            $desb=$row['desb'];
            $ref=$row['ref'];


            // strip out \n and replace with linebreaks
            $item=str_replace('\n','<br><br>', $item);
            $object_class=str_replace('\n','<br><br>', $object_class);
            $procedures=str_replace('\n','<br><br>', $procedures);
            $description=str_replace('\n','<br><br>', $descriptionm);
            $subject_image=str_replace('\n','<br><br>', $subject_image);
            $ch=str_replace('\n','<br><br>', $ch);
            $sta=str_replace('\n','<br><br>', $sta);
            $an=str_replace('\n','<br><br>', $an);
            $appa=str_replace('\n','<br><br>', $appa);
            $mhe=str_replace('\n','<br><br>', $mhe);
            $appb=str_replace('\n','<br><br>', $appb);
            $dod=str_replace('\n','<br><br>', $dod);
            $ooo=str_replace('\n','<br><br>', $ooo);
            $desb=str_replace('\n','<br><br>', $desb);
            $ref=str_replace('\n','<br><br>', $ref);
            // $procedures = str_replace('\n', '<br><br>', $procedures);
            // $description = str_replace('\n', '<br><br>', $description);
           
            

            // if subject does not have an image
            
            if(empty($item))
            {
              // Display db subject record to screen
              echo "<h1>SCP Foundation</h1>
              
              <h2><b>Item:</h2>
              {$item}
              
              <h3>Object Class: {$object_class}</h3>
              <h3>Procedures</h3>
              <p>{$procedures}</p>
              <h3>Description</h3>
              <p>{$description}</p>
              <h3>Chronological History</h3>
              <p>{$ch}</p>
              <h3>Space-Time Anomalies</h3>
              <p>{$sta}</p>
              <h3>Additional Notes</h3>
              <p>{$an}</p>
              <h3>Appendix A</h3>
              <p>{$appa}</p>
              <h3>Mental Health Effects</h3>
              <p>{$mhe}</p>
              <h3>Appendix B</h3>
              <p>{$appb}</p>
              <h3>Date Of Discovery</h3>
              <p>{$dod}</p>
              <h3>Object Of Origin</h3>
              <p>{$ooo}</p>
              <h3>Appendix B Description</h3>
              <p>{$desb}</p>
              <h3>References</h3>
              <p>{$ref}</p>
                        
              ";
            }
            else
            {
              // Display db fields including image
              echo "
              <div class='row border border-primary'>
              <ul>
              <h1>SCP ITEMS</h1>
              <br>
              <li><b>Item:</b>
              {$item}</li>
              <li><b>Object Class:</b> {$object_class}</li>
              <li><b>Procedures</b></li>
              <li>{$procedures}</li>
              <li><b>Description</b></li>
              <li>{$description}</li>
              <li><b>Chronological History</b></li>
              <li>{$ch}</li>
              <li><b>Space-Time Anomalies</b></li>
              <li>{$sta}</li>
              <li><b>Additional Notes</b></li>
              <li>{$an}</li>
              <li><b>Appendix A</b></li>
              <li>{$appa}</li>
              <li><b>Mental Health Effects</b></li>
              <li>{$mhe}</li>
              <li><b>Appendix B</b></li>
              <li>{$appb}</li>
              <li><b>Date Of Discovery</b></li>
              <li>{$dod}</li>
              <li><b>Object Of Origin</b></li>
              <li>{$ooo}</li>
              <li><b>Appendix B Description</b></li>
              <li>{$desb}</li>
              <li><b>References</b></li>
              <li>{$ref}</li>
              <br>
              <p class='text-center'><img class='img-fluid rounded mx-auto d-block' src='images/{$subject_image}'></p>
              </div>
              ";
            }
        }
        else{
          echo"
          <div class='row'>
          <div class='col col-centered'>
            <div class='flip-box'>
              <div class='flip-box-inner'>
                <div class='flip-box-front'>
                    <img src='images/protect.jpg' alt='Paris' class='img-fluid rounded mx-auto d-block img-responsive'>
                </div>
              <div class='flip-box-back text-center'>
              <h2>SCP FOUNDATION</h2>
              <p >SECURE CONTAIN PROTECT</p>
            </div>
          </div>
          
        </div>
        ";
        }
        
        ?>
    <?php include 'template/footer.php'; ?>

    </body>
</html>