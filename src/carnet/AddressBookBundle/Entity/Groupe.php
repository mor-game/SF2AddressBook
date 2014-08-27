<?php

namespace carnet\AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=80, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contact", mappedBy="groupeGroupe")
     */
    private $contactContact;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contactContact = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdGroupe() {
        return $this->idGroupe;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getContactContact() {
        return $this->contactContact;
    }

    public function setIdGroupe($idGroupe) {
        $this->idGroupe = $idGroupe;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setContactContact(\Doctrine\Common\Collections\Collection $contactContact) {
        $this->contactContact = $contactContact;
    }



    /**
     * Add contactContact
     *
     * @param \carnet\AddressBookBundle\Entity\Contact $contactContact
     * @return Groupe
     */
    public function addContactContact(\carnet\AddressBookBundle\Entity\Contact $contactContact)
    {
        $this->contactContact[] = $contactContact;

        return $this;
    }

    /**
     * Remove contactContact
     *
     * @param \carnet\AddressBookBundle\Entity\Contact $contactContact
     */
    public function removeContactContact(\carnet\AddressBookBundle\Entity\Contact $contactContact)
    {
        $this->contactContact->removeElement($contactContact);
    }
}
