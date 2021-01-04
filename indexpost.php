<?php
$operateurs = [
	"addition" => "+", 
	"soustraction" => "-",
	"multiplication" => "&times;",
	"division" => "&div;",
];

// On récupère les 3 données attendues en vérifiant leur présence
// La valeur par défaut des nombres est 0 et la valeur par défaut de l'opération est "addition"
// Vérification de la présence de 'op'
// et récupération des 3 données

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
	<p>Entrez des données dans le formulaire pour effectuer un calcul.</p>
	<?php echo $form; ?>
</body>

</html>
