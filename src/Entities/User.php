<?php

class User
{
    private $idU;

    private $nom;

    private $prenom;

    private $email;

    private $password;

    private $etat;

    //Constructeur sans arguments
    public function __construct()
    {

    }

    //Getters et setters
    public function getId()
    {
        return $this->idU;
    }
    public function setId($id)
    {
        $this->idU = $id;
    }

    /////////////////////////////
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    ////////////////////////////////
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    /////////////////////////////////////
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    ////////////////////////////////
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    /////////////////////////////////
    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
}












?>