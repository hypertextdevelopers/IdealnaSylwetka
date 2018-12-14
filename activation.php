<?php

    include 'php/connection.php';

    session_start();

    if(!isset($_SESSION['hash'])){

        header("Location: http://localhost/MW/errorPage.php");

    }else{

        if(isset($_GET['hashkey'])){

            $hashToCheck = $_GET['hashkey'];

            $updateActivation = "UPDATE users SET activated = 1 WHERE uniqCode = '$hashToCheck'";

            $hashResult = $conn -> query($updateActivation);

            if($hashResult === TRUE){
                
                $_SESSION['fullSiteOpened'] = TRUE;

                header("Location: http://htdev.uczymyzywienia.pl/fullsite.php?activationComplete");

                unset($_SESSION['hash']);

            }

        }

    }

?>