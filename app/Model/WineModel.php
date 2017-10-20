<?php

namespace Model;

/**
* 
*/
class WineModel extends \W\Model\Model
{
	
	public function adding($picture, $name, $price, $content, $origin, $creator, $sugar, $cut, $stripTags = true)
	{
		$sql = "INSERT INTO " . $this->table . " (`img`, `nom_produit`, `prix`, `contenu`, `origine`, `createur`, `teneur_sucre`, `cut`) VALUES (:img, :nom_produit, :prix, :contenu, :origine, :createur, :teneur_sucre, :cut)";

		$sth = $this->dbh->prepare($sql);
		
			$sth->bindValue(":img", $picture);
			$sth->bindValue(":nom_produit", $name);
			$sth->bindValue(":prix", $price);
			$sth->bindValue(":contenu", $content);
			$sth->bindValue(":origine", $origin);
			$sth->bindValue(":createur", $creator);
			$sth->bindValue(":teneur_sucre", $sugar);
			$sth->bindValue(":cut", $cut);

			if (!$sth->execute()){
			return false;
		}
		return $this->find($this->lastInsertId());	
	}
}