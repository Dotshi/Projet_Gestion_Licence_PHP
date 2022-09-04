<?php

require_once '../Modele/Gestion_Licence_php.php';
$insert = new Pratiquant(array(
'nom' => $_POST['nom'],
'prenom' => $_POST['prenom'],
'cp' => $_POST['cp'],
'rue' => $_POST['rue'],
'email' => $_POST['email'],
));

?>