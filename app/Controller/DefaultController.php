<?php

namespace Controller;

use \W\Controller\Controller;
use \w\Model\Model;
use \Model\WineModel;
use \Model\AfficheModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		// Afficher les 3 derniers Vins
		$affiche = new AfficheModel();
		$affiche->setTable('produits');
		$resultat = $affiche->affichelastproduit();

		$this->show('default/home',['resultat' => $resultat]);
	}

	public function showine($id)
	{
		// afin d'afficher le produit
		$affiche = new AfficheModel();
		$affiche->setTable('produits');
		$resultat = $affiche->afficheproduit($id);

		$this->show('default/showonewine',['resultat' => $resultat]);
	}

	public function listwine()
	{
		// Afin d'afficher les produits
		$affiche = new AfficheModel();
		$affiche->setTable('produits');
		$resultat = $affiche->affichelesproduits();

		$this->show('default/wineliste',['resultat' => $resultat]);
	}

	public function supplier()
	{
		$this->show('default/supplier');
	}

	public function region()
	{
		$this->show('default/region');
	}

	public function addwine()
	{
		$msg = array();

		if (isset($_POST['valid'])) {

			// Picture Controlle 
			// if (empty($_FILES['picture']['tmp_name'])) 
			// {
			// 	$msg['error']['picture'] = "The Picture is required";
			// }

			if (is_uploaded_file($_FILES['photo']['tmp_name']))
			{

				$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
				$extension_upload = strtolower(  substr(strrchr($_FILES['photo']['name'], '.')  ,1)  );
				if (!in_array($extension_upload,$extensions_valides) )
				{
					$msg['error']['photo'] = "The extention is invalid. ( jpg - jpeg - gif - png)";
				}
			}

			// Wine Name Controlle
			if (empty($_POST['winename'])) 
			{
				$msg['error']['winename'] = "The wine name is required";
			}

			// Price Controlle
			if (empty($_POST['price']))
			{
				$msg['error']['price'] = 'The price is required';
			}

			// Contents Controlle
			if (empty($_POST['content']))
			{
				$msg['error']['content'] = 'The contents is required';
			}

			// Origin Controlle
			if (empty($_POST['origin']))
			{
				$msg['error']['origin'] = 'The origin is required';
			}

			// Creator Controlle
			if (empty($_POST['creator']))
			{
				$msg['error']['creator'] = 'The creator is required';
			}

			// Sugar Controlle
			if (empty($_POST['sugar']))
			{
				$msg['error']['sugar'] = 'The sugar is required';
			}

			// Cut Controlle
			if (empty($_POST['cut']))
			{
				$msg['error']['cut'] = 'The cut is required';
			}

			// if we have an error
			if(!empty($msg['error']))
			{
				$this->show('default/addwine', ['msg' => $msg]);
			}
			else
			{
				$extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

				// extentions verification
				if (is_uploaded_file($_FILES['photo']['tmp_name']))
				{

					define('MAX_SIZE', 200000);    // maximum size we can upload 
					$image_sizes = getimagesize($_FILES['photo']['tmp_name']);
					if ($image_sizes[0] > MAX_SIZE OR $image_sizes[1] > MAX_SIZE) 
					{
						$msg['error']['photo'] = "the size of the picture is too big";
					}
				}

				if(!empty($msg['error']))
				{
					$this->show('default/addwine',['msg' => $msg]);
				}
				else
				{
					// No error
					$extension = pathinfo($_FILES['photo']['name'])['extension'];
					$hash      = md5_file($_FILES['photo']['tmp_name']) ;
					define('TARGET', 'assets/img/produit/'); 
					// copy the picture in the file (road)
					$destination = TARGET . "$hash.$extension";
					// rename the file (secured)
					$tmp_name  = $_FILES['photo']['tmp_name'];
					move_uploaded_file($tmp_name, $destination);
					
					// get the picture destination (where will be copied our images)
					$picture = $destination;
					// get the value from the formula
					$name = $_POST['winename'];
					$price = $_POST['price'];
					$content = $_POST['content'];
					$origin = $_POST['origin'];
					$creator = $_POST['creator'];
					$sugar = $_POST['sugar'];
					$cut = $_POST['cut'];

					// get the function in Model and get the value 
					$execute = new WineModel();
					$execute->setTable('produits');
					$indatabase = $execute->adding($picture, $name, $price, $content, $origin, $creator, $sugar, $cut);

					if ($execute) {
						$msg['info'] = "You have created a product";
					} else {
						$msg['info'] = "we got a probleme";
					}


				}
			}
		}
		$this->show('default/addwine',['msg' => $msg]);
	}

}