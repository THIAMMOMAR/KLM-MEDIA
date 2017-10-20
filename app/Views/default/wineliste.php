<?php $this->layout('layout', ['title' => 'Wines list']) ?>


<?php $this->start('main_content') ?>

<h1>Wines</h1>
<div class=" col-sm-7 row">
	<?php foreach ($resultat as $value) {
	# code...
 ?>
 
	<div class="container" >
		<a href="<?= $this->url('showwine', ['id' => $value['id']]) ?>">
            <div class="col-sm-3">
                <div class="col-sm-12 thumbnail text-center">
                    <img alt="listwine" class="img-responsive" src="http://localhost:8888/<?= $value['img'] ?>">

                    <div class="caption">
                        <h4><?= $value['nom_produit'] ?></h4>
                        <p><?= $value['prix'] ?> $</p>
                    </div>
                </div></a>
            </div>
                    <?php } ?>
        </div>

        
<?php $this->stop('main_content') ?>