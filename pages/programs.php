<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setup</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
<?php include '../mysql.php';?>

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
        <div class="programs">
            <h1>Програмное обеспечение</h1>
                        <?php
                            $categories = array();
                            if ($result = $mysqli->query('SELECT * FROM soft')) {
                            while($tmp = $result->fetch_assoc()) {
                                 $categories[] = $tmp;
                                }
                               $result->close();
                            }
                        ?>
             <table>
                <tbody>
                    <?php foreach ($categories as $categoryItem): ?>
                <tr>
                    <td>
                       <?php echo $categoryItem['name'];?>
                    </td>
                    <td>
                      <?php echo $categoryItem['link'];?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="brands" id="brand" style="margin-top: 25px;">
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