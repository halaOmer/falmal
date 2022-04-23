<?php
 
 $conn = mysqli_connect("localhost", "falmalco_falmal", "Fd[G1w1OG#3~", "falmalco_falmal") or die("unable to connect to host");
 // Check connection

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 ?>
  