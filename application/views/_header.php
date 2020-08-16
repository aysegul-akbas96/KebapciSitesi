<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?=$sayfa?><?=$veri[0]->title?></title>
	<meta name="description" content="<?=$veri[0]->description?>">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
	<meta name="author" content="<?=$veri[0]->meta?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style/slider.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="<?=$veri[0]->face?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?=$veri[0]->twitter?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?=$veri[0]->google?>"><i class="fa fa-google-plus"></i></a></li>
				
			</ul>
			<ul class="givusacall">
				<li>Telefon : <?=$veri[0]->telefon?> </li>
			</ul>
			
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="<?=base_url()?>home"><img src="<?=base_url()?>uploads/<?=$veri[0]->logo?>"  alt="" style="width:125px ; height:125px;"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="<?=base_url()?>home">Anasayfa</a> </li>
				<li>
					<a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a>
 
				</li>
				<li>
					<a href="<?=base_url()?>home/menu">Menüler</a>
 
				</li>
				<li>
					<a href="<?=base_url()?>home/galeri">Galeri</a>
 
				</li>
				<li>
					<a href="<?=base_url()?>home/iletisim">İletişim</a>
 
				</li>
					
				
			</ul>
		</div>
	</nav>
</div>