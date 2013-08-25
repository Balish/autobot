<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="language" content="ru" />

	<!-- blueprint CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <link rel="shortcut icon" href="img/favicon.ico" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <div class="content-wrapper">
        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <div id="logo">
                <a href="#"><img src="img/logo.png" alt="Logo" /></a>
            </div>
            
            <!-- Add Post -->
            <div id="add_post">
                <a href="#left"><div id="post_left">
                    <img src="img/post_left.png" />
                    <div id="post_text_left"><b>Продать автомобиль</b></div>
                </div></a><a href="#right">
                <div id="post_right">
                    <img src="img/post_right.png" />
                    <div id="post_text_right"><b>Продать запчасть</b></div>
                </div></a>
            </div>
            
            <!-- Profile -->
            <div id="profile">
                <div id="name">Магомед Магомедов</div>
                <div id="tools"><a href="#">0 ЛС</a> <a href="#">Блокнот</a> <a href="#">Выйти</a></div>
                <div id="profile_image"><img src="img/profile_image.png" /></div>
            </div>
        </div>
        
        <!-- Menu -->
        <div id="menu">
            <div class="nav">
                <div class="item first"><a href="#">Автомобили</a></div>
                <div class="item"><a href="#">Запчасти</a></div>
                <div class="item"><a href="#">Услуги</a></div>
                <div class="item"><a href="#">Отзывы</a></div>
                <div class="item"><a href="#">Новости</a></div>
                <div class="item last"><a href="#">Контакты</a></div>
            </div>
        </div>
        
        <!-- Advertisemen A -->
        <div class="advertisementA">
            <img src="img/advertisement A.png" width="100%" />
        </div>
        
        <!-- Search -->
        <div id="search">
            <img src="img/slide A.png" width="100%" />
            <div class="left">Хочешь новые диски?</div>
            <div class="right">Мы поможем вам найти запчасти</div>
            <div class="button"><img src="img/button.png" width="100%"/><p>Найти запчасть</p></div>
        </div>
        
        <?=$content?>

        <div class="autobot">
            <div class="left"><p>Автобот.ру — крупнейший и самый посещаемый автомобильный сайт в Дагестане. У нас самая обширная база объявлений о продаже разных видов транспортных средств.</p></div>
            <div class="center"><p>Автобот.ру — крупнейший и самый посещаемый автомобильный сайт в Дагестане. У нас самая обширная база объявлений о продаже разных видов транспортных средств.</p></div>
            <div class="right"><p>Мы предлагаем большой выбор легковых автомобилей, грузового и коммерческого транспорта, автозапчастей. Также мы предлагаем услуги по поиску запчастей.</p></div>
        </div>
        <div class="footer">
            <div class="top">
                <div id="logo">
                    <img src="img/logo.png" alt="Logo" />
                </div>
                <div class="social"><p>Социальные сервисы:</p><img src="img/twitter.png"/><img src="img/odnoklassniki.png"/><img src="img/vkontakte.png"/><img src="img/facebook.png"/></div>
            </div>
            <div class="middle">
                <div class="media">
                    <strong>Сервисы:</strong>
                    <ul>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                    </ul>
                </div>
                <div class="media">
                    <strong>Сервисы:</strong>
                    <ul>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                    </ul>
                </div>
                <div class="media">
                    <strong>Сервисы:</strong>
                    <ul>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                    </ul>
                </div>
                <div class="media">
                    <strong>Сервисы:</strong>
                    <ul>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                        <li>–Продажа ТС</li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <div class="left">
                    <p>© Сервис принадлежит ООО «АВТОБОТ», 1997–2013 AUTOBOT ® – зарегистрированный товарный знак</p>
                </div>
                <div class="right">
                    <input type="text" placeholder="Поиск"/><img src="img/search.png" />
                </div>
            </div>
        </div>-->
    </div>
<!-- Scripts -->
<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>

</body>
</html>