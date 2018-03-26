<?php

namespace gamepedia\gp\views;

use gamepedia\gp\views\GlobaleView;

class Partie1View {

	public function render($name) {
		$html = "<label>".$name."</label><br>";
		return $html;
	}

	public function renderAll($t1,$t2, $t3, $t4) {
		$app = \Slim\Slim::getInstance();
		$ach = GlobaleView::header("Mesure du temps d'exécution de certaines requêtes faites avec Eloquent");
		$html = '';
		$html = $html.$this->render($t1);
		$html2 = $this->render($t2);
		$html3 = $this->render($t3);
		$html4 = $this->render($t4);
		$j =<<<END
		<table>
			<tr>
				<th>Mesure du temps d'exécution de certaines requêtes faites avec Eloquent</th>
			</tr>
			<tr>
				<td>$html</td>
			</tr>
		</table>
		<br />

		<table>
			<tr>
				<th>Mesure du temps d'exécution de 3 requêtes similaires faites avec Eloquent débutant par ...</th>
			</tr>
			<tr>
				<td>$html2</td>
			</tr>
		</table>
		<br />

		<table>
			<tr>
				<th>Mesure du temps d'exécution de 3 requêtes similaires faites avec Eloquent contenant ...</th>
			</tr>
			<tr>
				<td>$html3</td>
			</tr>
		</table>
		<br />

		<table>
			<tr>
				<th>Mesure du temps d'exécution de 3 requêtes similaires faites avec Eloquent pour les compagnies</th>
			</tr>
			<tr>
				<td>$html4</td>
			</tr>
		</table>
END;
		$acf = GlobaleView::footer();
		return $ach."<br>".$j."<br>".$acf;
	}

}