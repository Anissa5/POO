<?php

class Personne {

    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $dateDeNaissance;

    public function __construct(string $nom, string $prenom, string $adresse, string $dateDeNaissance)
    {
       $this->nom = $nom;
       $this->prenom = $prenom;
       $this->adresse = $adresse;
       $this->dateDeNaissance = $dateDeNaissance;
    }

    public function getNom(): string 
    {
        return $this->nom;
    }

    public function getPrenom(): string 
    {
        return $this->prenom;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;        
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function setDateDeNaissance(string $dateDeNaissance): void
    {
        $this-> dateDeNaissance = $dateDeNaissance;
    }
    
    public function getAge(): int
    {
        $naissance = new DateTime($this->dateDeNaissance);
        $aujourdHui = new DateTime();

        $age = $naissance->diff($aujourdHui);

            return $age->y;
    }

}