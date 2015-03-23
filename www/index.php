<!DOCTYPE html>
<html lang="en" ng-app="MainModule">
<head>
<title>Центр транслогістик</title>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="js/lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="js/lib/slick/slick-theme.css"/>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/lib/slick/slick.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="js/lib/angular-route.min.js"></script>

<link rel="stylesheet" href="css/styles.css" />
<script src="js/index.js"></script>
<script src="js/MainCtrl.js"></script>
<script src="js/ApplicationCtrl.js"></script>

</head>
<body>
<div ng-controller="MainCtrl" class="PageWrapper">

<!-- LOGO -->
<div class="Logo">
	Центр транслогистик
</div>

<!-- TOP BANNER -->
<div class="Banner">
	<img src="css/img/b1.jpg" class='BannerImg'/>
	<img src="css/img/b2.jpg" class='BannerImg'/>
	<img src="css/img/b3.jpg" class='BannerImg'/>
	<img src="css/img/b4.jpg" class='BannerImg'/>
	<img src="css/img/b5.jpg" class='BannerImg'/>
</div>
	
<!-- MAIN MENU -->
<div class="PageBuffer">
	<div class="MainMenu">
		<a href="#/"><div class="MenuItem I1">Главная</div></a>
		<a href="#/about"><div class="MenuItem I2">О Компании</div></a>
		<a href="#/contacts"><div class="MenuItem I3">Контакты</div></a>
		<a href="#/deal"><div class="MenuItem I4">Договор</div></a>
		<a href="#/application"><div class="MenuItem I5">Заявка Онлайн</div></a>
	</div>
</div>

<!-- MAIN AREA -->
<div class="MainArea">
	<div class="MainAreaContent">
		<ng-view></ng-view>
	</div>
</div>

</div>
		
<!-- FOOTER -->
<div class="PageFooter">
	<a href="#/">Главная</a>  |  
	<a href="#/about">О Компании</a>  |  
	<a href="#/contacts">Контакты</a>  |  
	<a href="#/deal">Договор</a>  |  
	<a href="#/application">Заявка Онлайн</a>  <!-- |  
	<a href="#/copyright">Авторские права на контент</a>--> <br> 
	ООО «Центр транслогистик»  |  г. Черкассы, 18000 ул. Благовисная, 210, оф. 31, <br> 
	тел. +38 0472 32 14 45, факс +38 0472 32 36 22 e-mail: logistik78@ukr.net
	
</div>

</body>
</html>
