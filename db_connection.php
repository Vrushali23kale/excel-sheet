<?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "root";
         $db = "import export exel";
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
         
        //  if($conn)
        //     echo "connected";     
    ?>

