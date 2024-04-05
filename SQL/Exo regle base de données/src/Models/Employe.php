<?php
namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Employe
{
    private int $Id;
    private string $Nom;
    private string $Prenom;
    private DateTime $Annee_Arrivee;
    private string $Mail;
    private int $Telephone;

    use Hydratation;

    /**
     * Get the value of Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     */
    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     */
    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */
    public function getPrenom(): string
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     */
    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

   

    /**
     * Get the value of Mail
     */
    public function getMail(): string
    {
        return $this->Mail;
    }

    /**
     * Set the value of Mail
     */
    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    /**
     * Get the value of Telephone
     */
    public function getTelephone(): int
    {
        return $this->Telephone;
    }

    /**
     * Set the value of Telephone
     */
    public function setTelephone(int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    /**
     * Get the value of Annee_Arrivee
     */
    public function getAnneeArrivee(): DateTime
    {
        return $this->Annee_Arrivee;
    }

    /**
     * Set the value of Annee_Arrivee
     */
    public function setAnneeArrivee(DateTime $Annee_Arrivee): self
    {
        $this->Annee_Arrivee = $Annee_Arrivee;

        return $this;
    }
}