<?php

namespace gamepedia\gp\models;

class Categorie extends \Illuminate\Database\Eloquent\Model {

	protected $table = 'categorie';
	protected $primaryKey = 'id';
	public $timestamps = 'false';

	public function annonce() {
		return $this->belongsToMany('\gamepedia\gp\models\Categorie', 'categ_annonce', 'categ_id', 'annonces_id'); //Avec : CatAnnonce : le nom de la table qui fait l'association entre catégorie et annonce, et idAnnonce et idCateg les deux colonnes de la table
		}

	}

}