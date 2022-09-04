<?php

require_once '../Modele/Gestion_Licence_php.php';
$insert = new Licence(array(
    'annee' => $_POST['annee'],
    'ref_club' => $_POST['ref_club'],
    'ref_pratiquant' => $_POST['ref_pratiquant'],
    'ref_licencejeune' => $_POST['ref_licencejeune'],
    'ref_entreprise' => $_POST['ref_entreprise'],
    'ref_licencemixte' => $_POST['ref_licencemixte'],
));

?>