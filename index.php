<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/large.css" rel="stylesheet" />
    <link href="styles/medium.css" rel="stylesheet" />
    <link href="styles/small.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto:400,500,700" rel="stylesheet">
    <link href="fontello/fontello-13b7e2d0/css/fontello.css" rel="stylesheet" />
    <link href="fontello/fontello-9fe6a5f6/css/fontello.css" rel="stylesheet" />
    <script src="scripts js/intro.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts js/scrollTo.js"></script>
    <script src="scripts js/modalBoxSwitch.js"></script>
    <title>Michał Wrzosek</title>
</head>
<body>

    <div id="container">

         <?php

            if( isset($_GET['backToMain']) ){

                unset($_SESSION['fullSiteOpened']);
                session_destroy();

            }

            ?>

   
        <div id="mainFirst">

            <nav>
            
                <div id="navLeft">

                    <ul>

                        <li><a href="index.php"><img src="graphic/logo.png"></a></li>
                        <li class="mobileDis"><a href="index.php">Wróć do strony głównej</a></li>
                        <li class="mobileDis"><a href="https://michalwrzosek.pl/konsultacje-dietetyczne-online/" target="_blank">Indywidualna dieta online</a></li>
                        <li id="mobileLi"><a href="https://michalwrzosek.pl/" target="_blank">Przejdź do michalwrzosek.pl</a></li>

                    </ul>

                </div>

                <div id="navRight">

                    <ul>

                        <li><a id="s1"href="https://www.facebook.com/DietetykSportowyMichalWrzosek/" target="_blank"><i><span class="icon-facebook-official"></span></i></a></li>
                        <li><a id="s2"href="https://www.instagram.com/michal_wrzosek/" target="_blank"><i><span class="icon-instagram"></span></i></a></li>
                        <li><a id="s3"href="https://www.youtube.com/channel/UCsmNMaZjnz52DSooPamqpZQ/featured" target="_blank"><i><span class="icon-youtube-play"></span></i></a></li>

                    </ul>

                    <div style="clear:both;"></div>

                </div>

                <div style="clear:both"></div>
            
            </nav>

            <a href="https://michalwrzosek.pl/konsultacje-dietetyczne-online/" target="_blank"><div id="mobileOnly1Box"><div id="mobileOnly1">

                <div id="mobileSalat"></div>
                <div id="mobileDiet">Indywidualna dieta online</div>
                <div id="mobileArrow"></div>

            </div></div></a>

            <section>

                <div id="mainFirstSection">

                    <article>

                        <div id="mainFirstArticleDiv1">

                            <p>Cześć!</p>

                        </div>

                        <div id="mainFirstArticleDiv2">

                            <p>Przygotowałem specjalnie dla Ciebie to czego potrzebujesz - kompletny poradnik „Jak osiągnąć wymarzoną sylwetkę„ dostępny całkowicie bezpłatnie.</p>

                        </div>

                        <div id="mainFirstArticleDiv3">

                            <p>W najblizszych tygodniach otrzymasz nowe poradniki video - wystarczy się zarejestrować!<p>

                        </div>

                        <div id="mainFirstArticleDiv4">

                            <button id="more">ZOBACZ WIĘCEJ</button>

                        </div>

                    </article>

                    <div id="prof">

                        <img src="graphic/wrzosekdesktop@2x.png" />

                    </div>

                </div>

            </section>
        
        </div> 

        <div id="mainSecond">
        
            <section>

                <div id="mainSecondStart">

                    <p>Marzeniem każdego z nas jest idealna sylwetka. Wszyscy lubimy oglądać spektakularne przemiany osób, zastanawiamy się wtedy, jak im się to udało, co trzeba zrobić, aby osiągnąć podobne efekty? </p>

                </div>

                <div id="mainSecondIntro">

                    <iframe id="introVideo" frameborder="0" allowfullscreen></iframe>

                    <div id="intro">

                        <button id="introButton">ZOBACZ INTRO</button>

                    </div>

                </div>

            </section>

        </div>

            <div style="clear:both"></div>
        
        <div id="modalBox2">

            <div id="bubble"><i class="icon-lock-filled"></i></div>

            <div id="modalBoxText">

                <p>Podaj swój adres e-mail w celu autoryzacji.</p>

            </div>

            <form method="POST" action="autorisation.php">

                <div id="modalMail">

                    <p>Adres email</p>

                     <?php

                        if( isset($_GET['fieldsError']) ){

                            echo '<input type="email" name="adm" style="border:3px solid #e07272"/>';

                        }else{

                            echo '<input type="email" name="adm"/>';
                                
                        }

                    ?> 

                </div>

                <div id="modalButton">

                    <button type="submit" id="formB">AUTORYZUJ</button>

                </div>

                <div id="notRegistered">

                    <p id="goRegist">Zarejestruj się.</p>

                </div>
                        
            </form>

        </div>
        
        <div id="mainThird">

            <div id="gradientBox">

                <div id="gradientBoxLeft">

                    <div id="week1">

                        <p>TYDZIEŃ 1</p>

                    </div>

                    <div id="week1Header">

                        <p>Selecting The Right Apnea Treatment</p>

                    </div>

                    <div id="week1Article">

                        Every new computer that's brought home from the store has an operating system installed onto it. But

                    </div>

                </div>

                <div id="gradientBoxRight">

                    <button id="gradientButton">ODTWÓRZ</button>

                </div>

                <div id="mainGradient"></div>

            </div>

            <div id="modalBox">

                <div id="bubble"><i class="icon-lock-filled"></i></div>

                <div id="modalBoxText">

                    <p>Zapisz się aby uzyskać dostęp do materiałów ze strony.</p>

                </div>

                <form method="POST" action="php/enroll.php">

                    <div id="modalName">

                        <p>Imię i nazwisko</p>
                        
                        <?php

                             if( isset($_GET['fieldsError']) ){

                                echo '<input type="text" name="iden" style="border:3px solid #e07272"/>';

                            }else{

                                echo '<input type="text" name="iden"/> ';

                            }

                        ?>

                    </div>

                    <div id="modalMail">

                        <p>Adres email</p>

                        <?php

                             if( isset($_GET['fieldsError']) || isset($_GET['mailUsed'])){

                                echo '<input type="email" name="adm" style="border:3px solid #e07272"/>';

                            }else{

                                echo '<input type="email" name="adm"/>';
                                
                            }

                        ?>

                    </div>

                    <div id="modalCheckBox">

                        <input type="checkbox" name="rules"/>

                        <p>Oświadczam, że zapoznałem się z Regulaminem i akceptuję go w całości.</p>

                    </div>

                    <div id="modalButton">

                        <button type="submit" id="formB">ZAPISZ</button>

                    </div>

                    <div id="alreadyRegistered">

                        <p id="registered">Już zarejestrowany?</p>

                    </div>
                        
                </form>

            </div>

        </div>

   </div> 

</body>
</html>