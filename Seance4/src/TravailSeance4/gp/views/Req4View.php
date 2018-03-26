<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;
use gamepedia\gp\views\AffLogReq;

class Req4View {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll() {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Affichage de log pour la requête 'Afficher le nom des personnages des jeux dont le nom du jeu-vidéo contient 'Mario''");
		$html = '';
		echo $ach;
		echo "
		<table>
			<tr>
				<th>Afficher le nom des personnages des jeux dont le nom du jeu-vidéo contient 'Mario'</th>
			</tr>
			<tr>
				<td>";
		AffLogReq::afficher();
		echo "</td>
			</tr>
		</table>";
		$acf = GlobaleView::footer();
		echo "<br>".$acf;
	}

}