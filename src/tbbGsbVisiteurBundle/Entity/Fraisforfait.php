<?php

namespace tbbGsbVisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraisforfait
 *
 * @ORM\Table(name="fraisforfait")
 * @ORM\Entity
 */
class Fraisforfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fichefrais", mappedBy="idfraisforfait")
     */
    private $idfichefrais;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfichefrais = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle.
     *
     * @param string|null $libelle
     *
     * @return Fraisforfait
     */
    public function setLibelle($libelle = null)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string|null
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set montant.
     *
     * @param string|null $montant
     *
     * @return Fraisforfait
     */
    public function setMontant($montant = null)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant.
     *
     * @return string|null
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Add idfichefrai.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Fichefrais $idfichefrai
     *
     * @return Fraisforfait
     */
    public function addIdfichefrai(\tbbGsbVisiteurBundle\Entity\Fichefrais $idfichefrai)
    {
        $this->idfichefrais[] = $idfichefrai;

        return $this;
    }

    /**
     * Remove idfichefrai.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Fichefrais $idfichefrai
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdfichefrai(\tbbGsbVisiteurBundle\Entity\Fichefrais $idfichefrai)
    {
        return $this->idfichefrais->removeElement($idfichefrai);
    }

    /**
     * Get idfichefrais.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdfichefrais()
    {
        return $this->idfichefrais;
    }
    
    
    
    
    public function __toString() {
        return $this->libelle;
    }
    
}
