<?php

    // Create Database credential variables
    $user = "a3001701_a30017019";
    $password = "Toiohomai1234";
    $db = "a3001701_product";

    // Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get all data from the table and save in a variable for use on our page application
    $result = $connection->query("select * from product") or die($connection->error);

    // Check if form has been filled out by checking POST value, then insert form contents into database.
    if(isset($_POST['item_no']))
    {
        // save all $_POST values from form into separate variables
        $item_no = $_POST['item_no'];
        $object_class = $_POST['object_class'];
        $subject_image = $_POST['subject_image'];
        $description = $_POST['description'];
        $procedures = $_POST['procedures'];
        $ch = $_POST['ch'];
        $sta = $_POST['sta'];
        $an = $_POST['an'];
        $appa = $_POST['appa'];
        $mhe = $_POST['mhe'];
        $appb = $_POST['appb'];
        $dod = $_POST['dod'];
        $ooo = $_POST['ooo'];
        $desb = $_POST['desb'];
        $ref = $_POST['ref'];
        

        $item=str_replace("'"," ", $item);
        $object_class=str_replace("'"," ", $object_class);
        $procedures=str_replace("'"," ", $procedures);
        $description=str_replace("'"," ", $descriptionm);
        $subject_image=str_replace("'"," ", $subject_image);
        $ch=str_replace("'"," ", $ch);
        $sta=str_replace("'"," ", $sta);
        $an=str_replace("'"," ", $an);
        $appa=str_replace("'"," ", $appa);
        $mhe=str_replace("'"," ", $mhe);
        $appb=str_replace("'"," ", $appb);
        $dod=str_replace("'"," ", $dod);
        $ooo=str_replace("'"," ", $ooo);
        $desb=str_replace("'"," ", $desb);
        $ref=str_replace("'"," ", $ref);
      

        // create insert command
        $sql = "insert into product(item_no, object_class, subject_image, description, procedures,ch,sta, an,appa,mhe,appb,dod,ooo,desb,ref) values('$item_no', '$object_class', '$subject_image', '$description', '$procedures','$ch','$sta', '$an','$appa','$mhe','$appb','$dod','$ooo','$desb','$ref')"; 
        

        if ($connection->query($sql) === TRUE) {
            include 'template/insert_header.php';
            echo "<h1>Record created successfully</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'template/footer.php';
           } 
           else 
           {
               include 'template/insert_header.php';
               echo "<h1>Error creating record: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
               include 'template/footer.php';
           }

        
    } 
   

?>