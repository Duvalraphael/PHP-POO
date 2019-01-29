<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking</title>
</head>
<body>
   <?php 
   require 'voiture.php';
$voiture = new voiture();
$voiture->immatriculation = '1-ABC-123';
$voiture->dmec = '01/02/2015';
$voiture->kilometrage = '123456km';
$voiture->modèle = 'TT';
$voiture->marque = 'Audi';
$voiture->couleur = 'verte';
$voiture->poids = '1200kg';
echo $voiture->imma();
echo $voiture->dmec();
echo $voiture->kilometrage();
echo $voiture->modèle();
echo $voiture->marque();
echo $voiture->couleur();
echo $voiture->poids();
?>
</body>

</html>