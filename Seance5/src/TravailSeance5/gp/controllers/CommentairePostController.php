<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Commentaire;

class CommentairePostController {

	public function postCom($id, $email, $titre, $contenu) {
        $app = \Slim\Slim::getInstance();
        $c = new Commentaire();
        $c->titre = $titre;
        $c->contenu = $contenu;
        $c->datecrea = date('Y-m-d');
        $c->email_uti = $email;
        $c->id_game = $id;
        $c->save();
        header('Status: 201 Created');
        header("Content-Type: application/json");
        header('Location: '.$app->urlFor('P5', ['id' => $c->id]));
        echo json_encode($c);     
	}

}