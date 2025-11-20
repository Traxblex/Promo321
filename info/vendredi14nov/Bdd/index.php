<?php 
//php : langage de programation pour le web //

// declaration de variable //
$nom = "Uchiwa";
$prenom = "Sasuke";
$age = 19;

//affichage des variables//
echo $nom;
echo $prenom;
echo $age;
// concaténation entre chaine de caracter et variable
echo "Bonjour je m'appelle : " .$nom;

echo "bonjour mon nom est : " .$nom. " et mon prenom est : " .$prenom;

echo "bojour mon nom est : " .$nom. " et mon prenom est : " .$prenom. "mon age est : " .$age;
?>

<!-- couple du html et php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
    echo "mon message dans le html";
    ?></h1>
    <p><?php echo "mon nom :" .$nom. "prenom :" .$prenom;?></p>
</body>
</html>


<?php 
$cours = "info";
$duree = 4;
// condition php si et sinom
if ($cours == "info")
{
    echo "bravo:";
} 
else 
{
    echo "pas bravo";
}

// condition  avec pleusieurs else if et a la fin sinon
if ($duree == 5) 
    {
        echo "genial 4";
    }
else if ($duree == 6)
{
    echo "genial 6";
}
else if ($duree == 8)
{
    echo "genial 8";
}
else
{
    echo "Pas genial";
}

// condition pour verifier deux parametres avec le && logique
// si les deux sont vrais
if ($cours =="info" && $duree == 4) {
    echo " OUI c'est  info et pas 4";
}
else { 
    echo "NON c'est pas info et pas 4";
}
// condition pour verifier deux parametres avec le (or) logique 
// si l'un des deux est vrai
if ($cours =="info" or $duree == 4) {
    echo " OUI c'est  info et pas 4";
}
else { 
    echo "NON c'est pas info et pas 4";
}
?>


