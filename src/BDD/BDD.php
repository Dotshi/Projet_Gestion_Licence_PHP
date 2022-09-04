<?php

class BDD
{
    private $bdd;

    public function getBdd(){
        $bdd = new PDO('mysql:host=localhost;port=3306;dbname= Projet_Gestion_Licence_PHP;charset=utf8', 'root', '');
        return$bdd;
    }
}