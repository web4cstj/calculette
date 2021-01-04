<?php
$operateurs = [
	"addition" => "+", 
	"soustraction" => "-",
	"multiplication" => "&times;",
	"division" => "&div;",
];

// On récupère les 3 données attendues en vérifiant leur présence
// La valeur par défaut des nombres est 0 et la valeur par défaut de l'opération est "addition"
// Méthode 1 de vérification
if (isset($_GET['n1'])) {
	$n1 = $_GET['n1'];
} else {
	$n1 = 0;
}
// Méthode 2 de vérification
$n2 = 0;
if (isset($_GET['n2'])) {
	$n2 = $_GET['n2'];
}
// Méthode 3 de vérification
$op = (isset($_GET['op'])) ? $_GET['op'] : "addition";

// On calcule le résultat en fonction de l'opération demandée
switch($op) {
  case "addition":
		$resultat = $n1 + $n2;
  break;
  case "soustraction":
    $resultat = $n1 - $n2;
  break;
  case "multiplication":
    $resultat = $n1 * $n2;
  break;
  case "division":
    if ($n2 == 0) {
      $resultat = "Division par zéro";
    }else{
      $resultat = $n1 / $n2;
   }
  break;
}

// On génère l'affichage
// Résultat attendu : "2 + 2 = 4"
$affichage = $n1." ".$operateurs[$op]." ".$n2." = ".$resultat;

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
	<p>Cliquez sur un des liens ci-dessous ou modifiez l'adresse pour effectuer un calcul.</p>
	<div class="lien"><a href="?n1=2&n2=2&op=addition">2 plus 2</a></div>
	<div class="lien"><a href="?n1=8&n2=12&op=multiplication">8 fois 12</a></div>
	<div class="lien"><a href="?n1=100&n2=3&op=division">100 divisé par 3</a></div>
	<div class="lien"><a href="?n1=40&n2=4&op=soustraction">40 moins 4</a></div>
</body>

</html>
