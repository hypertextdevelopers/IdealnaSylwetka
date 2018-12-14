<?php

    session_start();

    if(isset($_SESSION['permissionFile'])){
        $_SESSION['activehref'] = true;
        header("Location: http://htdev.uczymyzywienia.pl/activehref.php#permissionBox");
        unset($_SESSION['permissionFile']);
    }
?>