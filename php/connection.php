<?php

    $db_ip = "172.16.0.1";
    $login = "j8324_htdev";
    $password = "5jBp9a85aaSC";
    $db_name = "j8324_htdev";

    $conn = new Mysqli($db_ip , $login , $password , $db_name);

    if($conn -> connect_error){
        die("Connection failed: " . $conn -> connect_error);
    }

?>