<?php

    include "connection.php";
    session_start();

    if( isset($_POST['iden']) && $_POST['iden'] !== "" && isset($_POST['adm']) && $_POST['adm'] !== "" && $_POST['rules'] == "on"){

        $_iden = $_POST['iden'];

        $_adm = $_POST['adm'];

        $hash = md5($_iden.$_adm);

        $id = ' ';

        $sbj = "Pełny dostęp do serwisu.";

        $txt = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Mail</title>
        </head>
        <body style="margin:0; padding:0;">
        
            <table align="center" cellpadding = "0" cellspacing = "0" style=" font-size: 16px; font-weight: 300; line-height: 25px; font-family:"Helvetica"; margin-bottom: 30px;">
        
                <tbody>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                            <td colspan="2">&nbsp;</td>
            
                        </tr>
                    
                    <tr>
        
                        <td colspan="2">
        
                                <center><img style="width:56px;" src="htdev.uczymyzywienia.pl/Logo@2x.png"/></center>
        
                        </td>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <center><td style="height: 76px;width: 379px;text-align:center;	font-size: 32px;	font-weight: bold;	line-height: 38px;">Potwierdzenie dołączenia do poradnika</td></center>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <center><td style="height: 104px;width: 652px;text-align:center;	font-size: 16px;	font-weight: 400;	line-height: 25px;">Otrzymujesz tę wiadomość, ponieważ zapisałeś się do 4 tygodniowego cyklu video.<br/><br/>
        
                                Jeśli chcesz mieć dostęp do nagrań filmowych na stronie oraz otrzymywać przypomnienia <br/>o nowo dodanych pozycjach proszę o kliknięcie w przycisk:</td></center>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <center><td style="height: 56px; box-shadow: 4px 4px 2px 0px #FFCC4D;">
        
                            <center><a href="http://htdev.uczymyzywienia.pl/activation.php?hashkey=[klucz]"><button style="width:220px; height: 65px;background: #1a1a1c;border:none;outline: none;line-height: 65px;text-align:center;box-sizing: border-box;color:white;font-size: 15px;font-weight: 700;-webkit-box-shadow: 4px 4px 2px 0px #FFCC4D;-moz-box-shadow: 4px 4p#FFCC4D;box-shadow: 4px 4px 2px 0px #FFCC4D;transition: all .1s linear;">OGLĄDAJ VIDEO</button></a></center>
        
                        </td></center>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2" style="border-bottom:1px solid #EBEBEB;">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <td colspan="2">&nbsp;</td>
        
                    </tr>
        
                    <tr>
        
                        <center><td style="	height: 66px;	width: 652px;	color: #7D7D7D;		font-size: 14px;	line-height: 22px;	text-align: center;">Nie przekazuje Twoich danych innym firmom czy osobom niepowołanym. Masz pewność, że Twoje dane są bezpieczne. W każdym momencie możesz zrezygnować z dostępu do poradnika oraz otrzymywania wiadomości przypominających <a href="http://htdev.uczymyzywienia.pl/du.php"><span style="text-decoration:underline; color:#7D7D7D; cursor: pointer;">klikając tutaj.</span></a></td></center>
        
                    </tr>
        
                </tbody>
        
            </table>
            
        </body>
        </html>';


        $txt = str_replace("[klucz]" , $hash , $txt);

         $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

        $time = time();

        $sql = "INSERT INTO users  VALUES ('$id' , '$_iden' , '$_adm' , 0 , '$hash')";

        $checkMailInDB = "SELECT * FROM users WHERE adm = '$_adm'";

        $checkMAIL = $conn -> query($checkMailInDB);

        if($checkMAIL -> num_rows > 0){

            header("Location: http://htdev.uczymyzywienia.pl/index.php?mailUsed#modalBox");

        }else{

            if($conn -> query($sql) === TRUE){

                $_SESSION['hash'] = true;
    
                $_SESSION['permissionFile'] = true;
    
                header("Location: http://htdev.uczymyzywienia.pl/permissionFile.php");
                
                mail($_adm , $sbj , $txt , $headers);
    
            }else {
                
                echo "Ups coś poszło nie tak...";
                die();
    
            }
    

        }

        

    }else{

        header("Location: http://htdev.uczymyzywienia.pl/index.php?fieldsError#modalBox");
        die();
    }

?>
