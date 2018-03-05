<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setup-системы безопасности</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">

<!--   SLIDER -->
    <link rel="stylesheet" href="../slider/css/smoothbox.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script type="text/javascript" src="../slider/js/smoothbox.min.js"></script>
<!--   -->

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
                    <span itemprop="telephone" class="phone">(093) 031 94 64</span>
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
     <h1>Наши работы</h1>

    <div class="image-g">
         <li class="sb-li">
             <a class="sb" title="Рабочие моменты" href="../images/work/domofon/dom2.jpg">
                 <img class="sb-img" src="../images/work/domofon/dom2.jpg" >
             </a>
         </li>
         <li class="sb-li">
             <a class="sb" href="../images/work/domofon/dom1.jpg" title="Hey here's a caption">
                 <img class="sb-img" src="../images/work/domofon/dom1.jpg" >
             </a>
         </li>
         <li class="sb-li">
             <a class="sb" href="../images/work/domofon/dom4.jpg" title="Установка видео наблюдения...Установка видео наблюдения...Установка видео наблюдения...Установка видео наблюдения...">
                 <img class="sb-img" src="../images/work/domofon/dom4.jpg">
             </a>
          </li>
        <li class="sb-li">
            <a class="sb" href="../images/work/domofon/dom4.jpg" title="Whoa, another caption. What are the odds of that happening?">
<!--                <img src="../master/images/2.jpg">-->
            </a><br>
        </li>
    </div>



      <h1>Цены</h1>
            <table>
                <tbody>
                <tr>
                    <td>
                        Комплект
                    </td>
                    <td>
                        Из чего состоит
                    </td>
                    <td>
                        Цена, грн.
                    </td>
                    <td>
                        Гарантия, мес.
                    </td>
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

       <div class="brands">
        <h1>Бренды</h1>
        <ul>
            <?php
        $categories = array();
        if ($result = $mysqli->query('SELECT * FROM brands')) {
            while($tmp = $result->fetch_assoc()) {
                $categories[] = $tmp;
            }
            $result->close();
        }?>
        <?php foreach ($categories as $categoryItem): ?>

            <li>
                <a><img class="photo-brands" src="../images/brand/<?php echo  $categoryItem['image'];?>"></a>
            </li>

            <?php endforeach; ?>
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