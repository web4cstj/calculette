Exercice "Calculette"
=====================
Une claculette bien rudimentaire.

Phase 1 : Les liens
-------------------
1. Reproduire le fonctionnement de la page `index.php`
1. Utiliser le tableau `$operateurs` pour l'affichage du résultat.
1. Les données se trouveront dans l'adresse (`GET`). Il faut donc vérifier individuellement la présence de chacune d'entre elles.
1. Effectuer l'opération à l'aide d'une structure conditionnelle `switch` ou bien d'une série de `if` et de `else`.
1. Mettre toutes les instructions dans __prologue__ de la page (au tout début) sauf le `echo`, qui va dans la page.


Phase 2 : Le formulaire en GET
------------------------------
1. Reproduire le fonctionnement de la page `indexget.php`.
1. Reprendre le code de la `phase 1` pour la **récupération** des données et pour le **calcul**.
1. Transformer le formulaire en une série de concaténations successives dans le prologue de la page avec un `echo` dans la page (comme vu dans des exercices précédents).
1. Utiliser la variable `$operateurs` pour l'affichage du `select` des opérateurs.
1. Ne pas oublier que les valeurs du formulaire doivent être celles de l'envoi précédent (bref, le formulaire ne doit pas se "resetter").

Phase 3 : Le formulaire en POST
-------------------------------
1. Reproduire le fonctionnement de la page `indexpost.php`.
1. Récupérer les données après avoir vérifié la présence d'une seule d'entre elles.
1. Reprendre le code de la `phase 1` pour le calcul.
1. Reprendre et adapter le code de la `phase 2` pour le formulaire.