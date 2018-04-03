<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Utilisateur;
use gamepedia\gp\models\Commentaire;
use gamepedia\gp\models\Game2User;
use gamepedia\gp\models\Game;
use gamepedia\gp\views\NouvView;

class NouvController {

	public function ajout() {
		/*$u1 = new Utilisateur();
		$u1->email = 'camille54460@gmail.com';
		$u1->nom = 'SCHWARZ';
		$u1->prenom = 'Camille';
		$u1->adresse = '6 Allée de Vienne 54460 LIVERDUN';
		$u1->telephone = '06.46.68.05.32';
		$u1->datenaiss = '1998-12-18 17:34:00';
		$u1->save();
		$u2 = new Utilisateur();
		$u2->email = 'saloumaxime57@gmail.com';
		$u2->nom = 'SALOU';
		$u2->prenom = 'Maxime';
		$u2->adresse = '6 Impasse des Roseaux 57910 Hambach';
		$u2->telephone = '07.81.38.73.14';
		$u2->datenaiss = '1998-10-06 06:30:00';
		$u2->save();
		$c1 = new Commentaire();
		$c1->titre = 'Commentaire 1 par Camille';
		$c1->contenu = 'Voilà le premier commentaire du jeu 12342 rédigé par Camille';
		$c1->datecrea = '2018-03-26 10:44:00';
		$c1->email_uti = 'camille54460@gmail.com';
		$c1->id_game = 12342;
		$c1->save();
		$c2 = new Commentaire();
		$c2->titre = 'Commentaire 2 par Camille';
		$c2->contenu = 'Voilà le deuxième commentaire du jeu 12342 rédigé par Camille';
		$c2->datecrea = '2018-03-26 10:45:00';
		$c2->email_uti = 'camille54460@gmail.com';
		$c2->id_game = 12342;
		$c2->save();
		$c3 = new Commentaire();
		$c3->titre = 'Commentaire 3 par Camille';
		$c3->contenu = 'Voilà le troisième commentaire du jeu 12342 rédigé par Camille';
		$c3->datecrea = '2018-03-26 10:46:00';
		$c3->email_uti = 'camille54460@gmail.com';
		$c3->id_game = 12342;
		$c3->save();
		$c4 = new Commentaire();
		$c4->titre = 'Commentaire 1 par Maxime';
		$c4->contenu = 'Voilà le premier commentaire du jeu 12342 rédigé par Maxime';
		$c4->datecrea = '2018-03-26 10:47:00';
		$c4->email_uti = 'saloumaxime57@gmail.com';
		$c4->id_game = 12342;
		$c4->save();
		$c5 = new Commentaire();
		$c5->titre = 'Commentaire 2 par Maxime';
		$c5->contenu = 'Voilà le deuxième commentaire du jeu 12342 rédigé par Maxime';
		$c5->datecrea = '2018-03-26 10:48:00';
		$c5->email_uti = 'saloumaxime57@gmail.com';
		$c5->id_game = 12342;
		$c5->save();
		$c6 = new Commentaire();
		$c6->titre = 'Commentaire 3 par Maxime';
		$c6->contenu = 'Voilà le troisième commentaire du jeu 12342 rédigé par Maxime';
		$c6->datecrea = '2018-03-26 10:49:00';
		$c6->email_uti = 'saloumaxime57@gmail.com';
		$c6->id_game = 12342;
		$c6->save();
		$g1 = new Game2User();
		$g1->uti_email = 'camille54460@gmail.com';
		$g1->game_id = 12342;
		$g1->save();
		$g2 = new Game2User();
		$g2->uti_email = 'saloumaxime57@gmail.com';
		$g2->game_id = 12342;
		$g2->save();*/
		$jeu = Game::where('id','=',12342)->first();
		$nv = new NouvView();
		echo $nv->renderAll($jeu);
	}

}