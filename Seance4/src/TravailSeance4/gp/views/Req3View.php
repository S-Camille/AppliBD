<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;
use gamepedia\gp\views\AffLogReq;

class Req3View {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll() {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Affichage de log pour la requête 'Afficher les noms des persos apparus pour la 1ère fois dans un jeu dont le nom contient 'Mario''");
		$html = '';
		echo $ach;
		echo "
		<table>
			<tr>
				<th>Afficher les noms des persos apparus pour la 1ère fois dans un jeu dont le nom contient 'Mario'</th>
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