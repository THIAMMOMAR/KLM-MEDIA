<?php $this->layout('layout', ['title' => 'Wine']) ?>


<?php $this->start('main_content') ?>
<div class="product">
	<div class="header">
		<div class="back"></div>
	</div>
	<div class="main">
		<div class="left">
			<h1><?= $resultat['nom_produit'] ?></h1>
			
			<img class="imagesolo" src="http://localhost:8888/<?= $resultat['img'] ?>" alt="vin" />
			
			<h3 class="white"><?= $resultat['prix'] ?> $</h3>
		</div>
		<div class="right checkout">
			<p class="white"><b>Origin :</b> <?= $resultat['origine'] ?></p>
			<p class="white"><b>Creator :</b> <?= $resultat['createur'] ?></p>
			<p class="white"><?= $resultat['contenu'] ?></p>
			<p class="white"><b>Sugar content :</b> <?= $resultat['teneur_sucre'] ?></p>
			<p class="white">In stock.</p>

			<!-- Quantity part -->
			<p class="price white" data-price="<?= $resultat['prix'] ?>"><?= $resultat['prix'] ?> Unit</p>
			<p class="description white">Quantity:</p>
			<input type="text" class="quantity" value="1">

			<p class="total white">Total: <span id="total"><?= $resultat['prix'] ?></span></p>

			<button class="btn white">Submit Order</button>

			
		</div>
	</div>
	<div class="footer">
		<div class="left">
			<!-- <p id="price">$960.00</p> -->
		</div>
		<div class="right">
			<p>Add to Cart</p>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>