<!DOCTYPE html>
<html lang="fr">
<?php

require 'html.php';
$html = new Html($_POST);

echo $html->meta();
echo $html->css();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etapes 3</title>
</head>
<body>
<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

echo $html->img();
echo $html->aref();
require 'form.php';
$form = new Form($_POST);
?>
<form action="#" method="post">
<?php
echo $form->input('Nom');
echo $form->input('Prenom');
echo $form->input('age');
echo $form->select();
echo $form->textarea();
echo $form->radio('Male');
echo $form->checkbox('Female');
echo $form->submit();
$sanitize = new Validator(
    


);

echo $html->js();
?>



</body>
</html>