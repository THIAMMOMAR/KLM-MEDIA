<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= $this->e($title) ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="<?= $this->assetUrl('css/vendor/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/vendor/bootstrap-theme.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/vendor/slide.css') ?>">

<script src="<?= $this->assetUrl('js/app.js') ?>"></script>

</head>
<body>
	<div class="tous">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        	<div class="container">
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>

        			<!-- The menu -->
        			<a class="navbar-brand" href="<?=$this->url('home') ?>">Home</a>
        			<a class="navbar-brand" href="<?=$this->url('winlist') ?>">Wine list</a>
        			<a class="navbar-brand" href="<?=$this->url('supplier') ?>">Suppliers</a>
        			<a class="navbar-brand" href="<?=$this->url('region') ?>">Regions</a>

        		</div>
        		<!-- Partie responsive  -->
        		<div id="navbar" class="navbar-collapse collapse">

        		</div>
        	</div>
        </nav>

       

        <div class="container">
        	<!-- Example row of columns -->

        	<div class="space">
        		<?= $this->section('main_content') ?>
        	</div>

        	<hr>

        	<footer>
        		<p class="white">&copy; KLF MEDIA WINES 2017</p>
        	</footer>
        </div> 
        <script src="<?= $this->assetUrl('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
        <!-- /container -->        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= $this->assetUrl('js/vendor/jquery-3.2.1.min.js') ?>"><\/script>')</script>

        <script src="<?= $this->assetUrl('js/vendor/bootstrap.min.js')?>"></script>

        <script src="<?= $this->assetUrl('js/main.js') ?>"></script>
         

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        	e.src='//www.google-analytics.com/analytics.js';
        	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </div>
</body>
</html>
