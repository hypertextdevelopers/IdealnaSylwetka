<?php

ini_set('session.gc_maxlifetime', 3600);

session_set_cookie_params(3600);
    session_start();

    if(!isset($_SESSION['fullSiteOpened'])){
    
        header("Location: http://htdev.uczymyzywienia.pl/errorPage.php");

    }

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
    <script src="scripts js/scrollTo2.js"></script>
    <title>Michał Wrzosek</title>
</head>
<body>

    <div id="container">

        <div id="mainFirst">

            <nav>
            
                <div id="navLeft">

                    <ul>

                        <li><a href="index.php?backToMain"><img src="graphic/logo.png"></a></li>
                        <li class="mobileDis"><a href="index.php?backToMain">Wróć do strony głównej</a></li>
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

                            <button id="more2">ZOBACZ WIĘCEJ</button>

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
        
        <div id="mainFourth">
        
            <div id="weekFirst">
            
                <div id="weekFirstLeft">

                    <div id="weekFirstHeader">

                        <p>TYDZIEŃ 1</P>

                    </div>

                    <div id="weekFirstTopic">

                        <p>Selecting The Right Apnea Treatment</p>

                    </div>

                    <div id="weekFIrstContent">

                        <p>Every new computer that’s brought home from the store has an operating system installed onto it. But what most new computer users don’t realize, is that without an <br/>operating system, that computer would be <br/>a simple shell of possibilities.</p>

                    </div>

                </div>

                <div id="weekFirstRight">

                    <iframe id="firstVideoClip" frameborder="0" allowfullscreen></iframe>
                        
                    <div id="firstVideo">

                        <button id="firstVideoButton">ODTWÓRZ</button>

                    </div>

                </div>
            
            </div>

                <div style="clear:both"></div>

            <div id="weekSecond">
            
                <div id="weekSecondLeft">

                    <iframe id="secondVideoClip" frameborder="0" allowfullscreen></iframe>
                        
                    <div id="secondVideo">

                        <button id="secondVideoButton">ODTWÓRZ</button>

                    </div>

                </div>

                <div id="weekSecondRight">

                    <div id="weekSecondHeader">

                        <p>TYDZIEŃ 2</P>

                    </div>

                    <div id="weekSecondTopic">

                        <p>Start With A Baseline</p>

                    </div>

                    <div id="weekSecondContent">

                        <p>Every new computer that’s brought home from the store has an operating system installed onto it. But what most new computer users don’t realize, is that without an operating system, that computer would be a simple shell of possibilities.</p>

                    </div>

                </div>
            
            </div>

                <div style="clear:both"></div>

            <div id="weekThird">
            
                <div id="weekThirdLeft">

                    <div id="weekThirdHeader">

                        <p>TYDZIEŃ 3</P>

                    </div>

                    <div id="weekThirdTopic">

                        <p>Sometimes Typhoons Come</p>

                    </div>

                    <div id="weekThirdContent">

                        <p>Every new computer that’s brought home from the store has an operating system installed onto it. But what most new computer users don’t realize, is that without an operating system, that computer would be a simple shell of possibilities.</p>

                    </div>

                </div>

                <div id="weekThirdRight">

                    <iframe id="thirdVideoClip" frameborder="0" allowfullscreen></iframe>
                        
                    <div id="thirdVideo">

                        <button id="thirdVideoButton">ODTWÓRZ</button>

                    </div>

                </div>
            
            </div>
            
                <div style="clear:both"></div>

            <div id="weekFourth">
            
                <div id="weekFourthLeft">

                    <iframe id="fourthVideoClip" frameborder="0" allowfullscreen></iframe>
                        
                    <div id="fourthVideo">

                        <button id="fourthVideoButton">ODTWÓRZ</button>

                    </div>

                </div>

                <div id="weekFourthRight">

                    <div id="weekFourthHeader">

                        <p>TYDZIEŃ 4</P>

                    </div>

                    <div id="weekFourthTopic">

                        <p>It S A Habit</p>

                    </div>

                    <div id="weekFourthContent">

                        <p>Every new computer that’s brought home from the store has an operating system installed onto it. But what most new computer users don’t realize, is that without an operating system, that computer would be a simple shell of possibilities.</p>

                    </div>

                </div>
            
            </div>

                <div style="clear:both"></div>

        </div>

            <div id="endPath">

                <img src="graphic/endPath.png" />

            </div>

        <div id="footer">

            <div id="footerLeft">

                <div id="footerImage"></div>

            </div>

            <div id="footerRight">

                <div id="footerHeader">

                    <p>Dziękuje, że wziąłeś udział w tym cyklu merytorycznym!</p>

                </div>

                <div id="footerContent">

                    <p>Jeśli chciałbyś więcej takich materiałów oraz być na bieżąco z informacjami ze świata dietetyki zapraszam Cię do polubienia i zasubskrybowania moich kanałów.</p>

                </div>

                <div id="footerButton">

                    <a href="https://michalwrzosek.pl/konsultacje-dietetyczne-online/" target="_blank"><button id="footerButton">INDYWIDUALNA DIETA ONLINE</button></a>

                </div>

                <div id="footerSocials">

                    <ul>

                        <li><a id="s3"href="https://www.youtube.com/channel/UCsmNMaZjnz52DSooPamqpZQ/featured" target="_blank"><i><span class="icon-youtube-play"></span></i></a></li>
                        <li><a id="s2"href="https://www.instagram.com/michal_wrzosek/" target="_blank"><i><span class="icon-instagram"></span></i></a></li>
                        <li><a id="s1"href="https://www.facebook.com/DietetykSportowyMichalWrzosek/" target="_blank"><i><span class="icon-facebook-official"></span></i></a></li>

                    </ul>

                </div>

                <div id="footerTrans">

                    <ul>

                        <li><img src="graphic/MW_black85@3x.png"></li>
                        <li><a href="index.php">Polityka prywatności</a></li>
                        <li><a href="https://michalwrzosek.pl/konsultacje-dietetyczne-online/" target="_blank">Regulamin</a></li>

                    </ul>

                </div>

                <div id="developers">

                    <ul>

                        <li>Projektant: Andrzej Kowalski</li>
                        <li><a href="https://www.linkedin.com/in/bartosz-parfanowicz-127815162/" target="_blank">Wykonawca: Bartosz Parfanowicz</a></li>

                    </ul>

                </div>

            </div>

            <div style="clear:both"></div>

        </footer>
        
   </div> 

</body>
</html>
