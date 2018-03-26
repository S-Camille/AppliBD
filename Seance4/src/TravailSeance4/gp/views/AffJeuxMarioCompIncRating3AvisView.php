<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class AffJeuxMarioCompIncRating3AvisView {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($donnees) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Liste des jeux dont le nom débute par 'Mario', publiés par une compagnie dont le nom contient 'Inc.', dont le rating initial contient '3+' et ayant reçu un avis de la part du rating board nommé 'CERO'");
		$html = '';
		$html = $html.$this->render($donnees);
		$j =<<<END
		<table>
			<tr>
				<th>Liste des jeux dont le nom débute par 'Mario', publiés par une compagnie dont le nom contient 'Inc.', dont le rating initial contient '3+' et ayant reçu un avis de la part du rating board nommé 'CERO'</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$j."<br>".$acf;
	}

}