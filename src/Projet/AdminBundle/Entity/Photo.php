<?php

namespace Projet\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\AdminBundle\Entity\PhotoRepository")
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Projet\AdminBundle\Entity\Produit")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produit;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Photo
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Photo
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set produit
     *
     * @param \Projet\AdminBundle\Entity\Produit $produit
     * @return Photo
     */
    public function setProduit(\Projet\AdminBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Projet\AdminBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
