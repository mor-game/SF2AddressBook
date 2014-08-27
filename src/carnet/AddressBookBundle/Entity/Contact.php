<?php

namespace carnet\AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="fk_contact_societe1_idx", columns={"societe_id_societe"})})
 * @ORM\Entity
 */
class Contact
{
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
     * @ORM\Column(name="prenom", type="string", length=80, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=80, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cp", type="boolean", nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=80, nullable=true)
     */
    private $ville;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="societe_id_societe", referencedColumnName="id_societe")
     * })
     */
    private $societeSociete;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groupe", inversedBy="contactContact")
     * @ORM\JoinTable(name="contact_has_groupe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="contact_id_contact", referencedColumnName="id_contact")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="groupe_id_groupe", referencedColumnName="id_groupe")
     *   }
     * )
     */
    private $groupeGroupe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupeGroupe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     * 
     * @return integer
     */
    public function getIdContact() {
        return $this->idContact;
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
     * Get nom
     * 
     * @return string
     */
    public function getNom() {
        return $this->nom;
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
     * Get tel
     * 
     * @return string
     */
    public function getTel() {
        return $this->tel;
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
     * Get cp
     * 
     * @return integer
     */
    public function getCp() {
        return $this->cp;
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
     * Get societesociete
     * 
     * @return string
     */
    public function getSocieteSociete() {
        return $this->societeSociete;
    }

    /**
     * Get groupegroupe
     * 
     * @return string
     */
    public function getGroupeGroupe() {
        return $this->groupeGroupe;
    }

/**
 * Set prenom
 * 
 * @param type $prenom
 * return Contact
 */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    /**
     * Set nom
     * 
     * @param type $nom
     * return Contact
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * Set email
     * 
     * @param type $email
     * return Contact
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Set tel
     * 
     * @param type $tel
     * return Contact
     */
    public function setTel($tel) {
        $this->tel = $tel;
    }

    /**
     * Set adresse
     * 
     * @param type $adresse
     * return Contact
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    /**
     * Set cp
     * 
     * @param type $cp
     * return Contact
     */
    public function setCp($cp) {
        $this->cp = $cp;
    }

    /**
     * Set ville
     * 
     * @param type $ville
     * return Contact
     */
    public function setVille($ville) {
        $this->ville = $ville;
    }

    /**
     * Set societesociete
     * 
     * @param \Societe $societeSociete
     * return Contact
     */
    public function setSocieteSociete(\Societe $societeSociete) {
        $this->societeSociete = $societeSociete;
    }

    /**
     * Set groupegroupe
     * 
     * @param \Doctrine\Common\Collections\Collection $groupeGroupe
     * return Contact
     */
    public function setGroupeGroupe(\Doctrine\Common\Collections\Collection $groupeGroupe) {
        $this->groupeGroupe = $groupeGroupe;
    }


}
