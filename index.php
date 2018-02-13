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
		<div class="header-top-wrap">
	<div class="header-top">
				<div class="logo-image">
					<a href="index.php"><img src="logo.jpg" alt="logo" class="logo"></a>
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
		<div class="header-content">
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
										<a href="#">Контроль доступ</a>
									</li>
									<li>
										<a href="#">Сигнализация</a>
									</li>
									<li>
										<a href="#">Удаленка</a>
									</li>
									<li>
										<a href="index.php#brand">Бренды</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="slider">
							<script src="slider.js"></script>
                            <ul class="bxslider">
                                   <li><img src="images/slider/photo11.jpg" alt="1"></li>
                                   <li><img src="images/slider/photo21.jpg" alt="2"></li>
                                   <li><img src="images/slider/photo31.jpg" alt="3"></li>
                                   <!-- <li><img src="images/slider/photo41.jpg" alt="4"></li> -->
                            </ul>
						</div>
		</div>
</div>
</header>
<main>
	<div class="main-content">
	<div class="group" id="video">
		<h1>Видеонаблюдение</h1>
			<div>
				<img src="images/work/video/1.jpg" class="photo-observ">
				<img src="images/work/video/2.jpg" class="photo-observ photo-margin">
				<img src="images/work/video/3.jpg" class="photo-observ photo-margin">
				<img src="images/work/video/3.jpg" class="photo-observ">
				<img src="images/work/video/1.jpg" class="photo-observ photo-margin">
				<img src="images/work/video/2.jpg" class="photo-observ photo-margin">
			</div>	
			<div>
			<p class="text">Мы полностью производим монтаж и установку систем видеонаблюдения по стандартам.
				Настраиваем удаленный просмотр с мобильных устройств через интернет.
				Мы консультируем, составляем сметы и выполняем замеры объектов бесплатно.
				Мы поставляем готовые решения в сфере безопасности от проектирования до монтажа камер видеонаблюдения,
				охранных систем и контроля доступа для дома, офиса, производства.
			</p>
			</div>
	</div>
	<div class="group" id="domofony">
		<h1>Домофоны</h1>

		<img src="images/work/domofon/1.jpg" class="photo-intercom">
		<img src="images/work/domofon/2.png" class="photo-intercom">
		<img src="images/work/domofon/3.jpg" class="photo-intercom">
		<img src="images/work/domofon/3.jpg" class="photo-intercom">
		<img src="images/work/domofon/1.jpg" class="photo-intercom">
		<img src="images/work/domofon/2.png" class="photo-intercom">

	<p class="text">
		Домофоны давно плотно вошли в нашу жизнь.
		Установка домофона производится практически повсеместно: в многоквартирных домах, коттеджах, предприятиях, и т.д.
		Своевременное обслуживание домофона является залогом стабильности и долговечности работы домофона.
		Но тем менее иногда всё же возникают ситуации, в которых необходим срочный ремонт домофона.
	</p>
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
			<li><img class="photo-brands" src="images/brand/dahua.jpg" alt="dahua" title="dahua"></li>
			<li><img class="photo-brands" src="images/brand/slinex.jpg"></li>
			<li><img class="photo-brands" src="images/brand/atis.jpg"></li>
			<li><img class="photo-brands" src="images/brand/hikvision.jpg"></li>
			<li><img class="photo-brands" src="images/brand/neolight.jpg"></li>
			<li><img class="photo-brands" src="images/brand/tantos.png"></li>
			<li><img class="photo-brands" src="images/brand/samsung.png"></li>
			<li><img class="photo-brands" src="images/brand/axis.png"></li>
			<li><img class="photo-brands" src="images/brand/myers.png"></li>
			<li><img class="photo-brands" src="images/brand/odeskabel.png"></li>
			<li><img class="photo-brands" src="images/brand/policecam.png"></li>
			<li><img class="photo-brands" src="images/brand/policecam.png"></li>
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