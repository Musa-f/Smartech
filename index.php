<?php
$style1 = '<link rel="stylesheet" href="css/stylebody.css">';
$style2 = '<link rel="stylesheet" href="css/carousel.css">';
$style3 = '<link rel="stylesheet" href="css/ca-responsive.css" media="only screen and (max-width:1024px)">';
require 'header.php';
?>

<section>
    <h2 class="titre"><span class="font-style1">LES</span> <span class="font-style2">NOUVEAUTÉS</span></h2>
    <div id="container">
        <div class="sliderContainer">
            <div class="sliderIcon" id="left">
                <div class="left">〈</div>
            </div>
            <div class="sliderContent">
                <div class="slide" id="slide1">
                    <div class="slideImg"><img src="ressources\carrousel\titre-apple.png" alt=""></div>
                </div>
                <div class="slide" id="slide2">
                    <div class="slideImg"><img src="ressources\carrousel\titre-huwaei.png" alt=""></div>
                </div>
                <div class="slide" id="slide3">
                    <div class="slideImg"><img src="ressources\carrousel\titre-oppo.png" alt=""></div>
                </div>
                <div class="slide" id="slide4">
                    <div class="slideImg"><img src="ressources\carrousel\titre-pixel.png" alt=""></div>
                </div>
                <div class="slide" id="slide5">
                    <div class="slideImg"><img src="ressources\carrousel\titre-sumsung.png" alt=""></div>
                </div>
            </div>
            <div class="sliderIcon" id="right">
                <div class="right">〉</div>
            </div>
        </div>
    </div>

    <hr class="espacement">

    <h2 class="titre"><span class="font-style2">NOTRE</span> <span class="font-style1">CATALOGUE</span></h2>
    <div class="logos1">
            <div class="one space"><a href="catalogue\apple.php"><img class="img1" src="ressources/apple.png" alt="Logo apple"></a></div>
            <div><a href="catalogue\huawei.php"><img class="img1" src="ressources/logohuawei.png" alt="Logo huawei"></a></div>
            <div><a href="catalogue\samsung.php"><img class="img1" src="ressources/logosamsung.png" alt="Logo Samsung"></a></div>
            <div><a href="catalogue\oppo.php"><img class="img1" src="ressources/oppologo.png" alt="Logo oppo"></a></div>
            <div><a href="catalogue\google.php"><img class="img1" src="ressources/gpixellogo.png" alt="Logo Logo g pixel"></a></div>
            <div><a href="catalogue\xiaomi.php"><img class="img1" src="ressources/xiaomi.png" alt="Logo Xiaomi"></a></div>
    </div>
</section>

<?php 
$script = '<script src="js/carousel.js"></script>';
require 'footer.php';
?>