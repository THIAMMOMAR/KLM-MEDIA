<?php $this->layout('layout', ['title' => 'Home']) ?>


<?php $this->start('main_content') ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<!-- Slider -->
		<div class="slider" id="main-slider"><!-- outermost container element -->
			<div class="slider-wrapper"><!-- innermost wrapper element -->
				<img src="<?= $this->assetUrl('img/slide/1.jpg') ?>" alt="First" class="slide" /><!-- slides -->
				<img src="<?= $this->assetUrl('img/slide/2.jpg') ?>" alt="Second" class="slide" />
				<img src="<?= $this->assetUrl('img/slide/3.jpg') ?>" alt="Third" class="slide" />
			</div>
		</div>
	</div>
</div>	




<h1 class="white">News Arrivals</h1>
<div class="row">
	<?php foreach ($resultat as $value) {
			# code...
		?>
		<figure class="snip1543">
			<img src="<?= $value['img'] ?>" alt="NewWine" />
			<figcaption>
				<h3><?= $value['nom_produit'] ?></h3>
				<p><?= $value['prix'] ?> $</p>
			</figcaption>
			<a href="<?= $this->url('showwine', ['id' => $value['id']]) ?>"></a>
		</figure>
		<?php } ?>

	</div> 
	




	<?php $this->stop('main_content') ?>
