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
     * @ORM\Column(name="tel", type="string", length=15, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
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

}
