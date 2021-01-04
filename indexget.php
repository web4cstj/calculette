<?php
$operateurs = [
	"addition" => "+", 
	"soustraction" => "-",
	"multiplication" => "&times;",
	"division" => "&div;",
];

// On récupère les 3 données attendues en vérifiant leur présence
// La valeur par défaut des nombres est 0 et la valeur par défaut de l'opération est "addition"
// Vérification

// On calcule le résultat en fonction de l'opération demandée

// On génère l'affichage
// Résultat attendu : "2 + 2 = 4"

// On génère le formulaire

?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/calculette.css"/>
	<title>La calculette</title>
</head>

<body>
	<?php include "headernav.inc.php" ?>
	<div class="affichage">
		<?php echo $affichage; ?>
	</div>
	<p>Entrez des données dans le formulaire ou modifiez l'adresse pour effectuer un calcul.</p>
	<form action="" method="get">
		<input type="number" name="n1" id="n1" value="123" />
		<select name="op" id="op">
			<option value="addition">+</option>
			<option value="soustraction">-</option>
			<option value="multiplication">&times;</option>
			<option value="division" selected="selected">&div;</option>
		</select>
		<input type="number" name="n2" id="n2" value="10" />
		<input type="submit" />
	</form>
</body>

</html>
