<?php

    include 'php/connection.php';

    $deleteUser = "DELETE FROM users WHERE adm = '$adm'";

    $deleteRsl = $conn -> query($deleteUser);

    if($deleteRsl === TRUE){
        header("Location: http://htdev.uczymyzywienia.pl/resigned.php");
    }else{

        echo "coś poszło nie tak";

    }

?>