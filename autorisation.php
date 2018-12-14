<?php

    session_start();

    include 'php/connection.php';


    if(isset($_POST['adm']) && $_POST['adm'] !== ''){

        $_SESSION['autMail'] = TRUE;
        
        $autorisationMail = $_POST['adm'];

        $checkMail = "SELECT * FROM users WHERE adm = '$autorisationMail'";

        $checkMailResult = $conn -> query($checkMail);

        if($checkMailResult -> num_rows > 0){

            while($row = $checkMailResult -> fetch_assoc()){

                if($row['activated'] == 1){

                    $_SESSION['fullSiteOpened'] = TRUE;
                    header("Location: http://htdev.uczymyzywienia.pl/fullsite.php?activationComplete");

                }else{

                    header("Location: http://htdev.uczymyzywienia.pl/errorPageActivation.php");
                    
                    unset($_SESSION['fullSiteOpened']);

                }

            }

        }else{

            echo "Podaj poprawny adres e-mail.";

        }


    }else{

        header("Location: http://htdev.uczymyzywienia.pl/index.php?fieldsError#modalBox");
        die();

    }

?>