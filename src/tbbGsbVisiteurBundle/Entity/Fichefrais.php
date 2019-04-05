<?php

namespace tbbGsbVisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 *
 * @ORM\Table(name="fichefrais", indexes={@ORM\Index(name="idEtat", columns={"idEtat"}), @ORM\Index(name="idVisiteur", columns={"idVisiteur"})})
 * @ORM\Entity
 */
class Fichefrais
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFicheFrais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfichefrais;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=128, nullable=false, options={"fixed"=true})
     */
    private $mois;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer", nullable=false)
     */
    private $annee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbJustificatifs", type="integer", nullable=true)
     */
    private $nbjustificatifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montantValide", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantvalide;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateModif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtat", referencedColumnName="id")
     * })
     */
    private $idetat;

    /**
     * @var \Visiteur
     *
     * @ORM\ManyToOne(targetEntity="Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="id")
     * })
     */
    private $idvisiteur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fraisforfait", inversedBy="idfichefrais")
     * @ORM\JoinTable(name="lignefraisforfait",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idFicheFrais", referencedColumnName="idFicheFrais")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idFraisForfait", referencedColumnName="id")
     *   }
     * )
     */
    private $idfraisforfait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfraisforfait = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idfichefrais.
     *
     * @return int
     */
    public function getIdfichefrais()
    {
        return $this->idfichefrais;
    }

    /**
     * Set mois.
     *
     * @param string $mois
     *
     * @return Fichefrais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois.
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee.
     *
     * @param int $annee
     *
     * @return Fichefrais
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee.
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set nbjustificatifs.
     *
     * @param int|null $nbjustificatifs
     *
     * @return Fichefrais
     */
    public function setNbjustificatifs($nbjustificatifs = null)
    {
        $this->nbjustificatifs = $nbjustificatifs;

        return $this;
    }

    /**
     * Get nbjustificatifs.
     *
     * @return int|null
     */
    public function getNbjustificatifs()
    {
        return $this->nbjustificatifs;
    }

    /**
     * Set montantvalide.
     *
     * @param string|null $montantvalide
     *
     * @return Fichefrais
     */
    public function setMontantvalide($montantvalide = null)
    {
        $this->montantvalide = $montantvalide;

        return $this;
    }

    /**
     * Get montantvalide.
     *
     * @return string|null
     */
    public function getMontantvalide()
    {
        return $this->montantvalide;
    }

    /**
     * Set datemodif.
     *
     * @param \DateTime|null $datemodif
     *
     * @return Fichefrais
     */
    public function setDatemodif($datemodif = null)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif.
     *
     * @return \DateTime|null
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set idetat.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Etat|null $idetat
     *
     * @return Fichefrais
     */
    public function setIdetat(\tbbGsbVisiteurBundle\Entity\Etat $idetat = null)
    {
        $this->idetat = $idetat;

        return $this;
    }

    /**
     * Get idetat.
     *
     * @return \tbbGsbVisiteurBundle\Entity\Etat|null
     */
    public function getIdetat()
    {
        return $this->idetat;
    }

    /**
     * Set idvisiteur.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Visiteur|null $idvisiteur
     *
     * @return Fichefrais
     */
    public function setIdvisiteur(\tbbGsbVisiteurBundle\Entity\Visiteur $idvisiteur = null)
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    /**
     * Get idvisiteur.
     *
     * @return \tbbGsbVisiteurBundle\Entity\Visiteur|null
     */
    public function getIdvisiteur()
    {
        return $this->idvisiteur;
    }

    /**
     * Add idfraisforfait.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Fraisforfait $idfraisforfait
     *
     * @return Fichefrais
     */
    public function addIdfraisforfait(\tbbGsbVisiteurBundle\Entity\Fraisforfait $idfraisforfait)
    {
        $this->idfraisforfait[] = $idfraisforfait;

        return $this;
    }

    /**
     * Remove idfraisforfait.
     *
     * @param \tbbGsbVisiteurBundle\Entity\Fraisforfait $idfraisforfait
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdfraisforfait(\tbbGsbVisiteurBundle\Entity\Fraisforfait $idfraisforfait)
    {
        return $this->idfraisforfait->removeElement($idfraisforfait);
    }

    /**
     * Get idfraisforfait.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdfraisforfait()
    {
        return $this->idfraisforfait;
    }
    public function getMoisAnnee(){
        $MoisAnnee = $this->mois." ".$this->annee;
        return $MoisAnnee;
    }
}
