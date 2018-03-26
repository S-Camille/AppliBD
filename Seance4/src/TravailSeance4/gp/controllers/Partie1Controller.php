<?php

namespace gamepedia\gp\controllers;

use gamepedia\gp\models\Company;
use gamepedia\gp\models\Game;
use gamepedia\gp\models\Game2Character;
use gamepedia\gp\models\Character;
use gamepedia\gp\views\Partie1View;

class Partie1Controller {

	public function __construct() {
		ob_start();
		$timeA = microtime(true);
		Game::get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister l'ensemble des jeux' est de ".($timeB-$timeA)." secondes.<br>";
		

		$timeA = microtime(true);
		Game::where('name', 'like', '%Mario%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom contient 'Mario'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$g = Game::select('id')->where('name', 'like', 'Mario%')->get();
		$gc = Game2Character::whereIn('game_id', $g)->distinct()->get();
		Character::whereIn('id', $gc)->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Afficher les personnages des jeux dont le nom débute par 'Mario'' est de ".($timeB-$timeA)." secondes.<br>";


		$timeA = microtime(true);
		Game::where('name', 'like', 'Mario%')->whereHas('rating', function($q){
			$q->where('name', 'like', '%3+%');
		});
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Afficher les jeux dont le nom débute par 'Mario' et dont le rating initial contient '3+' est de ".($timeB-$timeA)." secondes.<br>";

		$tableau1 = ob_get_clean();

		ob_start();
		$timeA = microtime(true);
		$g1 = Game::where('name', 'like', 'Mario%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom débute 'Mario'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$g2 = Game::where('name', 'like', 'Sonic%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom débute 'Sonic'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$g3 = Game::where('name', 'like', 'Desert%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom débute 'Desert'' est de ".($timeB-$timeA)." secondes.<br>";
		$tableau2 = ob_get_clean();

		ob_start();
		$timeA = microtime(true);
		$g1 = Game::where('name', 'like', '%Mario%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom contient 'Mario'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$g2 = Game::where('name', 'like', '%Sonic%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom contient 'Sonic'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$g3 = Game::where('name', 'like', '%Desert%')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister les jeux dont le nom contient 'Desert'' est de ".($timeB-$timeA)." secondes.<br>";
		$tableau3 = ob_get_clean();

		ob_start();
		$timeA = microtime(true);
		$c1 = Company::where('location_country', '=', 'United States')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister des compagnies basées aux 'United States'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$c2 = Company::where('location_country', '=', 'France')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister des compagnies basées en 'France'' est de ".($timeB-$timeA)." secondes.<br>";

		$timeA = microtime(true);
		$c3 = Company::where('location_country', '=', 'Japan')->get();
		$timeB = microtime(true);
		echo "Le temps d'exécution de la requête 'Lister des compagnies basées au 'Japon'' est de ".($timeB-$timeA)." secondes.<br>";
		$tableau4 = ob_get_clean();

		$p1v = new Partie1View();
		echo $p1v->renderAll($tableau1, $tableau2, $tableau3, $tableau4);
	}

}