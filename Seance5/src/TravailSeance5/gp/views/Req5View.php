<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;
use gamepedia\gp\views\AffLogReq;

class Req5View {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll() {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Affichage de log pour la requête 'Afficher les jeux développés par une compagnie dont le nom contient 'Sony''");
		$html = '';
		echo $ach;
		echo "
		<table>
			<tr>
				<th>Afficher les jeux développés par une compagnie dont le nom contient 'Sony'</th>
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