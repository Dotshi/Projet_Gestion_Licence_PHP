<?php

require_once '../BDD/BDD.php';
class Gestion_licence_php
{
    private $nom;
    private $cp;
    private $ville;
    private $rue;
    private $email;
    private $denomination;
    private $libelle;
    private $ageMin;
    private $ageMax;
    private $annee;
    private $NomResp;
    private $prenomResp;
    private $telResp;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function setInsert()
    {
        $bdd = new BDD();
        $req = $bdd->getBdd()->prepare('INSERT INTO Pratiquant (nom, prenom, cp, rue, email) VALUES (:nom,:heure_depart,:prenom,:cp,:rue,:email)');
        $req->execute(array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'cp' => $this->cp,
            'rue' => $this->rue,
            'email' => $this->email,
        ));
    }

    public function AfficherLigueRegionale($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM LigueRegionale');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;


    }

    public function AfficherCentredeBowling($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM CentredeBowling');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherClub($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM Club');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherCategorie($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM Categorie');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherLicence($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM Licence');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherLicenceJeune($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM LicenceJeune');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherLicenceMixte($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM LicenceMixte');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherPratiquant($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM Pratiquant');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function AfficherEntreprise($bdd)
    {
        $req = $bdd->getBdd()->prepare('SELECT * FROM Entreprise');
        $req->execute(array());
        $res = $req->fetchALL();
        return $res;

    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            //setNom
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setnom($nom)
    {
        $this->date_depart = $nom;
    }

    /**
     * @return mixed
     */
    public function getcp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setcp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getville()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setville($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getrue()
    {
        return $this->rue;
    }

    /**
     * @param mixed $rue
     */
    public function setrue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @return mixed
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setemail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getdenomination()
    {
        return $this->denomination;
    }

    /**
     * @param mixed
     */
    public function setdenomination($denomination)
    {
        $this->email = $denomination;
    }

    /**
     * @return mixed
     */
    public function getlibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setlibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getageMin()
    {
        return $this->ageMin;
    }

    /**
     * @param mixed $ageMin
     */
    public function setageMin($ageMin)
    {
        $this->ageMin = $ageMin;
    }

    /**
     * @return mixed
     */
    public function getageMax()
    {
        return $this->ageMax;
    }

    /**
     * @param mixed $ageMax
     */
    public function setageMax($ageMax)
    {
        $this->ageMax = $ageMax;
    }

    /**
     * @return mixed
     */
    public function getannee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setannee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getNomResp()
    {
        return $this->NomResp;
    }

    /**
     * @param mixed $NomResp
     */
    public function setNomResp($NomResp)
    {
        $this->NomResp = $NomResp;
    }

    /**
     * @return mixed
     */
    public function getprenomResp()
    {
        return $this->prenomResp;
    }

    /**
     * @param mixed $prenomResp
     */
    public function setprenomResp($prenomResp)
    {
        $this->prenomResp = $prenomResp;
    }

    /**
     * @return mixed
     */
    public function gettelResp()
    {
        return $this->telResp;
    }

    /**
     * @param mixed $telResp
     */
    public function settelResp($telResp)
    {
        $this->telResp = $telResp;
    }
}