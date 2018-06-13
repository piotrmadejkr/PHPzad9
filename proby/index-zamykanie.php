<?php include('views/settings.php') ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Piotr Madej Portfolio</title>
</head>    
<!-- www.madejpiotr.pl/Strony//Site7/ -->
<body>
        <input type="checkbox" id="fota1" hidden>
            <div class="portfolio-item-big1 portfolio-item-big">
            <iframe class="iMain" src="http://www.madejpiotr.pl/Strony/Site6/"></iframe>  
            <label class="wylacznik" for="fota1"><p class="zam"><i class="fa fa-window-close" aria-hidden="true"></i>  Zamknij</p> </label>
            <a class="full" href="http://madejpiotr.pl/Strony/Site6/" ><p class="pow"><i class="fas fa-expand"></i>  Pełny ekran</p></a>
        </div>
            
        <input type="checkbox" id="fota2" hidden>
            <div class="portfolio-item-big2 portfolio-item-big">
            <iframe class="iMain" src="http://madejpiotr.pl/Strony/knajpa2/"></iframe>
            <label class="wylacznik" for="fota2"><p class="zam"><i class="fa fa-window-close" aria-hidden="true"></i> Zamknij</p></label> 
            <a class="full" href="http://madejpiotr.pl/Strony/knajpa2/" ><p class="pow"><i class="fas fa-expand"></i> Pełny ekran</p></a>
        </div>
        <input type="checkbox" id="fota3" hidden>
            <div class="portfolio-item-big3 portfolio-item-big">
            <iframe class="iMain" src="http://www.madejpiotr.pl/Strony/Site5/"></iframe>
            <label class="wylacznik" for="fota3"><p class="zam"><i class="fa fa-window-close" aria-hidden="true"></i> Zamknij</p></label>
            <a class="full" href="www.madejpiotr.pl/Strony//Site5/" ><p class="pow"><i class="fas fa-expand"></i> Pełny ekran</p></a>
        </div>
        <input type="checkbox" id="fota4" hidden>
            <div class="portfolio-item-big4 portfolio-item-big">
            <iframe class="iMain" src="http://www.madejpiotr.pl/Strony/Site7/"></iframe>
            <label class="wylacznik" for="fota4"><p class="zam"><i class="fa fa-window-close" aria-hidden="true"></i> Zamknij</p></label>
            <a class="full" href="www.madejpiotr.pl/Strony//Site7/" ><p class="pow"><i class="fas fa-expand"></i> Pełny ekran</p></a>
        </div>
        <input type="checkbox" id="fota5" hidden>
        <label for="fota5" class="portfolio-item-big5 portfolio-item-big"><img class="img-responsive photo" src="http://img/mokap1.jpg"></label>
        <input type="checkbox" id="fota6" hidden>
        <label for="fota6" class="portfolio-item-big6 portfolio-item-big"><img class="img-responsive photo" src="http://img/mokap1.jpg"></label>
    
   
    <main>
        
        <input type="checkbox" id="side" hidden>
            <div class="wrapper toggled">
             <!-- burger menu start --> 
       
    <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
                <ul id="menu">
                
                    <li class="min-group-item"><a href="?p=omnie">O mnie</a></li>
                    <li class="min-group-item"><a href="?p=galeria">Galeria</a></li>
                    <li class="min-group-item"><a href="?p=kontakt">Kontakt</a></li>
                </ul>
            </div>
       
        <!-- burger menu end    -->
                <nav class="nav sidebar-nav">
                    <div class="row">
                        <div class="col colMenu col-xs-10">
                            <div class="profilowe"></div>
                            <ul class="list-group">        
                                <li class="list-group-item"><a href="?p=omnie">O mnie</a></li>
                                <li class="list-group-item"><a href="?p=galeria">Galeria</a></li>
                                <li class="list-group-item"><a href="?p=kontakt">Kontakt</a></li> 
                            </ul>     
                            <div class="social">
                               <span><p><a href="https://www.linkedin.com/in/piotr-madej-51b956105/"> <i class="fab fa-linkedin"></i></a>  <a href="https://github.com/piotrmadejkr"><i class="fab fa-github"></i></a></p><span>
                            </div>
                        </div> 
                        <div class="col col-xs-2">
                            <div class="row sideLabel">
                            </div>
                            <label for ="side" class="row sideLabel Ok">
                                <p class="rotate">Wysuń&nbsp;&nbsp;&nbsp;Menu</p>   
                            </label>   
                        </div>    
                    </div>
                </nav> 
                <?php include('views/'.$page.'.php'); ?>
            </div>
    </main>  
    <script src="http://https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</body>
</html>





<!-- https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260 -->