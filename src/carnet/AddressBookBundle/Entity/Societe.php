<?php

namespace carnet\AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_societe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=80, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=80, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=false)
     */
    private $cp;
    
   

        
    public function getIdSociete() {
        return $this->idSociete;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getCp() {
        return $this->cp;
    }

    public function setIdSociete($idSociete) {
        $this->idSociete = $idSociete;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setCp($cp) {
        $this->cp = $cp;
    }


}
