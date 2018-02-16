<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Setup</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="jquery.bxslider.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="jquery.bxslider.min.js"></script>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
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
<?php require_once 'mysql.php';?>

<header>
		<div class="header-content">
        <div class="header-top">
                <div class="logo-image">
                    <a href="index.php"><img src="images/logo.jpg" alt="logo" class="logo"></a>
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
		<div class="header-bottom">
						<div class="left-menu-title">
							<span class="left-menu grad">Все услуги</span>
                            <?php
                            $categories = array();
                            if ($result = $mysqli->query('SELECT * FROM category')) {
                            while($tmp = $result->fetch_assoc()) {
                            $categories[] = $tmp;
                            }
                            $result->close();
                            }?>
							<div class="sidebar">
								<ul>
                                    <?php foreach ($categories as $categoryItem): ?>
                                        <li>
                                            <a href="index.php#<?php echo $categoryItem['url'];?>"><?php echo $categoryItem['name'];?></a>
                                        </li>
                                    <?php endforeach; ?>
                                        <li>
                                            <a href="index.php#brand">Бренды</a>
                                        </li>

								</ul>
							</div>
						</div>
						<div class="slider">
							<script src="slider.js"></script>

                            <ul class="bxslider">
                                <?php
                                $sliders = array();
                                if ($result = $mysqli->query('SELECT * FROM slider')) {
                                    while($tmp = $result->fetch_assoc()) {
                                        $sliders[] = $tmp;
                                    }
                                    $result->close();
                                }?>
                                <?php foreach ($sliders as $sliderItem): ?>
                                   <li>
                                       <img src="images/slider/<?php echo  $sliderItem['name'];?>" alt="<?php echo  $sliderItem['id'];?>">
                                   </li>
                                <?php endforeach; ?>
                            </ul>
						</div>
		</div>
</div>
</header>
<main>
	<div class="main-content">
        <?php
        $categories = array();
        if ($result = $mysqli->query('SELECT * FROM category')) {
            while($tmp = $result->fetch_assoc()) {
                $categories[] = $tmp;
            }
            $result->close();
        }?>
        <?php foreach ($categories as $categoryItem): ?>

        <div class="group" id="<?php echo  $categoryItem['url'];?>">
		<h1><?php echo  $categoryItem['name'];?></h1>

            <div>
				<a class="image" href="<?php echo  $categoryItem['url'];?>.php">
                 <img src="images/category/<?php echo  $categoryItem['image'];?>" class="photo-observ">
                </a>
            	<p class="text"><?php echo  $categoryItem['text'];?>
                <br><a href="<?php echo  $categoryItem['url'];?>.php">
                        <strong style="padding: 20px;display: block;">Посмотреть подробнее...</strong></a></p>
            </div>
        </div>
        <?php endforeach; ?>

	<div class="brands" id="brand">
		<h1>Бренды</h1>
		<ul>
			<li>
                <a><img class="photo-brands" src="images/brand/ajax.jpg" alt="dahua" title="dahua"></a>
            </li>
			<li>
               <a> <img class="photo-brands" src="images/brand/arny.png"></a>
            </li>

			<li>
                <a><img class="photo-brands" src="images/brand/atis.png"></a>
            </li>
			<li>
                <a> <img class="photo-brands" src="images/brand/commax.jpg"></a>
            </li>
			<li>
                <a> <img class="photo-brands" src="images/brand/dahua.gif"></a>
            </li>
			<li>
                <a> <img class="photo-brands" src="images/brand/eltis.jpg"></a>
            </li>
			<li>
                <a><img class="photo-brands" src="images/brand/finmark.jpg"></a>
            </li>
			<li>
                <a>  <img class="photo-brands" src="images/brand/fullenergy.png"></a>
            </li>
			<li>
                <a><img class="photo-brands" src="images/brand/gardi.jpg"></a>
            </li>
			<li>
                <a> <img class="photo-brands" src="images/brand/geze.gif"></a>
            </li>
			<li>
                <a> <img class="photo-brands" src="images/brand/hikvision.jpg"></a>
            </li>
			<li>
                <a> <img class="photo-brands" src="images/brand/infinity.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/ironlogic.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/kocom.gif"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/neolight.png"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/odeskabel.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/policecam.png"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/satel.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/seagate.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/slinex.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/tamron.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/tantos.png"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/tecsar.png"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/twist.png"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/visit.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/western.jpg"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/yli.png"></a>
            </li>
            <li>
                <a> <img class="photo-brands" src="images/brand/zben.jpg"></a>
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