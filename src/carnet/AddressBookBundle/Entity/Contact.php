<?php

namespace carnet\AddressBookBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection as Collection2;

/**
 * Contact
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact{

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
     * @ORM\Column(name="prenom", type="string", nullable=false)
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
     * @ORM\Column(name="tel", type="string", nullable=false)
     */
    private $tel;

    /**
     * @var string
     * 
     * @ORM\Column(name="adresse", type="text", nullable=false)
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
     * @var Societe
     * 
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumn(name="societe_id_societe", referencedColumnName="id_societe")
     */
    private $societe;
    
    /**
     *
     * @var Collection
     * 
     * @ORM\ManyToMany(targetEntity="Groupe")
     * @ORM\JoinTable(name="contact_has_groupe",
     *      joinColumns={@ORM\JoinColumn(name="contact_id_contact", referencedColumnName="id_contact")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="groupe_id_groupe", referencedColumnName="id_groupe")}
     *      )
     */
    private $groupes;

   


    /**
     * Get idContact
     *
     * @return integer 
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Contact
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Contact
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Contact
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Contact
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set societe
     *
     * @param \carnet\AddressBookBundle\Entity\Societe $societe
     * @return Contact
     */
    public function setSociete(\carnet\AddressBookBundle\Entity\Societe $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \carnet\AddressBookBundle\Entity\Societe 
     */
    public function getSociete()
    {
        return $this->societe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add groupes
     *
     * @param \carnet\AddressBookBundle\Entity\Groupe $groupes
     * @return Contact
     */
    public function addGroupe(\carnet\AddressBookBundle\Entity\Groupe $groupes)
    {
        $this->groupes[] = $groupes;

        return $this;
    }

    /**
     * Remove groupes
     *
     * @param \carnet\AddressBookBundle\Entity\Groupe $groupes
     */
    public function removeGroupe(\carnet\AddressBookBundle\Entity\Groupe $groupes)
    {
        $this->groupes->removeElement($groupes);
    }

    /**
     * Get groupes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupes()
    {
        return $this->groupes;
    }
}
