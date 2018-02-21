<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setup</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/my_scripts.js"></script>
    <script type="text/javascript" src="../js/my_scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="../css/fotorama.css" rel="stylesheet">
    <script src="../js/fotorama.js"></script>
</head>
<body>
<script type="text/javascript">
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    });
</script>
<?php include_once  '../mysql.php';?>

<header>
    <div class="header-content">
        <div class="header-top">
            <div class="logo-image">
                <a href="../index.php"><img src="../images/logo.jpg" alt="logo" class="logo"></a>
            </div>
            <div class="top-menu-phone">
                <div class="phone">
                    <span itemprop="telephone" class="phone">(093) 031 94 64</span>
                    <span class="vert-line">|</span>
                    <span itemprop="telephone" class="phone">(044) 591 10 90</span>
                    <span class="vert-line">|</span>
                    <span itemprop="telephone" class="phone">(093) 031 94 64</span>
                </div>
                <div class="email">
                    <a>butsyk1@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="main-content">
 <div class="group-main" id="domofony">
            <h1>Домофоны</h1>
     
            <div class="link_group">
        <a class="show_popup" rel="photo_win" href="#">
            <img src="../images/work/domofon/dom1.jpg" alt="" class="photo-gallery">
            <img src="../images/work/domofon/3.jpg" alt="" class="photo-gallery">
            <img src="../images/work/domofon/1.jpg" alt="" class="photo-gallery">
            <img src="../images/work/domofon/dom4.jpg" alt="" class="photo-gallery">
            <img src="../images/work/domofon/1.jpg" alt="" class="photo-gallery">
            <img src="../images/work/domofon/3.jpg" alt="" class="photo-gallery">
        </a>
    </div>
    <div class="popup photo_win">
        <a class="close" href="#">Close</a>
        <div class="img_wrap">
            <div class="fotorama" data-navposition="bot" data-nav="thumbs" data-loop="true">
                    <div data-img="images/work/domofon/dom22.jpg" class="descr">Some description1</div>
                    <div data-img="images/work/domofon/dom1.jpg" class="descr">Some description2</div>
                    <div data-img="images/work/domofon/dom3.jpg" class="descr">Some description3</div>
                    <div data-img="images/work/domofon/dom4.jpg" class="descr">Some description4</div>
                    <div data-img="images/work/domofon/dom3.jpg" class="descr">Some description5</div>                
                    <div data-img="images/work/domofon/1.jpg" class="descr">Some description6</div>
            </div>    

        </div>
    </div>






            <table>
                <tbody>
                <tr>
                    <th>
                        Комплект
                    </th>
                    <th>
                        Из чего состоит
                    </th>
                    <th>
                        Цена, грн.
                    </th>
                    <th>
                        Гарантия, мес.
                    </th>
                </tr>
                <tr>
                    <td>
                        Домофон (монитор 4″) с установкой
                    </td>
                    <td>
                        Видеодомофон с TFT монитором 4″, функция открывание замка с панели, антивандальная вызывная панель
                    </td>
                    <td>
                        3900
                    </td>
                    <td>
                        18
                    </td>
                </tr>
                <tr>
                    <td>
                        Домофон (монитор 4″) с электромеханическим замком и установкой
                    </td>
                    <td>
                        Видеодомофон с TFT монитором 7″, электромеханический замок, антивандальная вызывная панель
                    </td>
                    <td>
                        6200
                    </td>
                    <td>
                        18
                    </td>
                </tr>
                <tr>
                    <td>
                        Домофон (монитор 7″) с установкой
                    </td>
                    <td>
                        Видеодомофон с TFT монитором 7″, функция открывание замка с панели, антивандальная вызывная панель
                    </td>
                    <td>
                        4700
                    </td>
                    <td>
                        18
                    </td>
                </tr>
                <tr>
                    <td>
                        Домофон (монитор 7″) с электромеханическим замком и установкой
                    </td>
                    <td>
                        Видеодомофон с TFT монитором 7″ , электромеханический замок, антивандальная вызывная панель
                    </td>
                    <td>
                        6750
                    </td>
                    <td>
                        18
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="brands" id="brand">
            <h1>Бренды</h1>
            <ul>
                <li>
                    <a><img class="photo-brands" src="../images/brand/ajax.jpg" alt="dahua" title="dahua"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/arny.png"></a>
                </li>

                <li>
                    <a><img class="photo-brands" src="../images/brand/atis.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/commax.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/dahua.gif"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/eltis.jpg"></a>
                </li>
                <li>
                    <a><img class="photo-brands" src="../images/brand/finmark.jpg"></a>
                </li>
                <li>
                    <a>  <img class="photo-brands" src="../images/brand/fullenergy.png"></a>
                </li>
                <li>
                    <a><img class="photo-brands" src="../images/brand/gardi.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/geze.gif"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/hikvision.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/infinity.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/ironlogic.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/kocom.gif"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/neolight.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/odeskabel.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/policecam.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/satel.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/seagate.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/slinex.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/tamron.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/tantos.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/tecsar.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/twist.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/visit.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/western.jpg"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/yli.png"></a>
                </li>
                <li>
                    <a> <img class="photo-brands" src="../images/brand/zben.jpg"></a>
                </li>
            </ul>
        </div>
    </div>
</main>




<a href="#" class="scrollup">Наверх</a>
<footer>
    <div class="footer-content-main">
        <div class="h3">
            <h3>С нами легко связаться</h3>
            <hr>
        </div>
        <div class="footer-content-left"></div>
        <div class="footer-content-mid">

            <span itemprop="telephone" class="footer-phone">(093) 031 94 64</span><br>
            <span itemprop="telephone" class="footer-phone">(093) 031 94 64</span><br>
            <span itemprop="telephone" class="footer-phone">(093) 031 94 64</span>
        </div>
        <div class="footer-content-right">
            <h4>Мы в cоцсетях</h4>
            <hr class="hr-soc">
            <div class="soc-link">
                <ul>
                    <li><a class="svg fb" target="_blank" href="#"></a></li>
                    <li><a class="svg yt" target="_blank" href="#"></a></li>
                    <li><a class="svg in" target="_blank" href="#"></a></li>
                    <li><a class="svg tw" target="_blank" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="web-pool">
        Разроботка сайта - WebSpace
    </div>
</footer>
</body>
</html>