<?php

class Produit
{
    private $idP;

    private $nom;


    private $ref;


    private $qtStock;


    private $user;

    //Constructeur sans arguments
    public function __construct()
    {

    }

    //Getters et setters
    public function getId()
    {
        return $this->idP;
    }
    public function setId($id)
    {
        $this->idP = $id;
    }

    //////////////////////////////
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    //////////////////////////////
    public function getRef()
    {
        return $this->ref;
    }
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    //////////////////////////////
    public function getQtStock()
    {
        return $this->qtStock;
    }
    public function setQtStock($qtStock)
    {
        $this->qtStock = $qtStock;
    }

    //////////////////////////////
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user= $user;
    }

}

?>