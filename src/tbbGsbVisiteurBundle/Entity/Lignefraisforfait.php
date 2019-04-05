<?php

namespace tbbGsbVisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraisforfait
 *
 * @ORM\Table(name="lignefraisforfait")
 * @ORM\Entity(repositoryClass="tbbGsbVisiteurBundle\Repository\LignefraisforfaitRepository")
 */
class Lignefraisforfait
{
    
    /**
     * @var \Fichefrais
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Fraisforfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfraisForfait", referencedColumnName="id")
     * })
     */
    private $idFraisForfait;
    
    /**
     * @var \Fichefrais
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFicheFrais", referencedColumnName="idFicheFrais")
     * })
     */
    private $idfichefrais;
    
    
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


    
    /**
     * Set quantite.
     *
     * @param int $quantite
     *
     * @return Lignefraisforfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite.
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idFraisForfait.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Fraisforfait|null $idFraisForfait
     *
     * @return Lignefraisforfait
     */
    public function setIdFraisForfait(\tbbGsbVisiteurBundle\Entity\Fraisforfait $idFraisForfait = null)
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    /**
     * Get idFraisForfait.
     *
     * @return \tbbGsbVisiteurBundle\Entity\Fraisforfait|null
     */
    public function getIdFraisForfait()
    {
        return $this->idFraisForfait;
    }

    /**
     * Set idfichefrais.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Fichefrais|null $idfichefrais
     *
     * @return Lignefraisforfait
     */
    public function setIdfichefrais(\tbbGsbVisiteurBundle\Entity\Fichefrais $idfichefrais = null)
    {
        $this->idfichefrais = $idfichefrais;

        return $this;
    }

    /**
     * Get idfichefrais.
     *
     * @return \tbbGsbVisiteurBundle\Entity\Fichefrais|null
     */
    public function getIdfichefrais()
    {
        return $this->idfichefrais;
    }
}
