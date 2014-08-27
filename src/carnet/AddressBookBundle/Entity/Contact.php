<?php

namespace carnet\AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 * ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact {

    /**
     * @var integer
     * 
     * @ORM\Column(name="id_contact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY") 
     */
    private $idContact;

    /**
     * @var string
     * 
     * @ORM\Column(name="preno;", type="string", nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * 
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var string
     * 
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    private $email;

    /**
     * @var string
     * 
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    private $tel;

    /**
     * @var string
     * 
     * @ORM\Column(name="adresse", type="string", nullable=false)
     */
    private $adresse;

    /**
     * @var string
     * 
     * @ORM\Column(name="cp", type="string", nullable=false)
     */
    private $cp;

    /**
     * @var string
     * 
     * @ORM\Column(name="ville", type="string", nullable=false)
     */
    private $ville;

    /**
     * @var \carnet\AddressBookBundle\Entity\Societe
     * 
     * @ORM\ManyToMany(targetEntity="Societe", mappedBy="idSociete")
     */
    private $societeSociete;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\ManyToMany(targetEntity="Groupe", mappedBy="contactContact")
     */
    private $groupeGroupe;

    /**
     * Constructor
     */
    public function __construct() {
        $this->groupeGroupe = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get idContact
     *
     * @return integer 
     */
    public function getIdContact() {
        return $this->idContact;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contact
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Contact
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Contact
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Contact
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Contact
     */
    public function setCp($cp) {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp() {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Contact
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille() {
        return $this->ville;
    }

   

    /**
     * Set societeSociete
     *
     * @param \carnet\AddressBookBundle\Entity\Societe $societeSociete
     * @return Contact
     */
    public function setSocieteSociete(\carnet\AddressBookBundle\Entity\Societe $societeSociete = null) {
        $this->societeSociete = $societeSociete;

        return $this;
    }

    /**
     * Get societeSociete
     *
     * @return \carnet\AddressBookBundle\Entity\Societe 
     */
    public function getSocieteSociete() {
        return $this->societeSociete;
    }

    /**
     * Add groupeGroupe
     *
     * @param \carnet\AddressBookBundle\Entity\Groupe $groupeGroupe
     * @return Contact
     */
    public function addGroupeGroupe(\carnet\AddressBookBundle\Entity\Groupe $groupeGroupe) {
        $this->groupeGroupe[] = $groupeGroupe;

        return $this;
    }

    /**
     * Remove groupeGroupe
     *
     * @param \carnet\AddressBookBundle\Entity\Groupe $groupeGroupe
     */
    public function removeGroupeGroupe(\carnet\AddressBookBundle\Entity\Groupe $groupeGroupe) {
        $this->groupeGroupe->removeElement($groupeGroupe);
    }

    /**
     * Get groupeGroupe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupeGroupe() {
        return $this->groupeGroupe;
    }

}
