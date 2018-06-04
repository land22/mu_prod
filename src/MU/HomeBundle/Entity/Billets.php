<?php

namespace MU\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billets
 *
 * @ORM\Table(name="billets")
 * @ORM\Entity(repositoryClass="MU\HomeBundle\Repository\BilletsRepository")
 */
class Billets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_billet", type="string", length=20)
     */
    private $typeBillet;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="string", length=10)
     */
    private $tarif;

    /**
     * @var int
     *
     * @ORM\Column(name="id_visiteur", type="integer")
     */
    private $idVisiteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date")
     */
    private $dateReservation;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeBillet
     *
     * @param string $typeBillet
     *
     * @return Billets
     */
    public function setTypeBillet($typeBillet)
    {
        $this->typeBillet = $typeBillet;

        return $this;
    }

    /**
     * Get typeBillet
     *
     * @return string
     */
    public function getTypeBillet()
    {
        return $this->typeBillet;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Billets
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set idVisiteur
     *
     * @param integer $idVisiteur
     *
     * @return Billets
     */
    public function setIdVisiteur($idVisiteur)
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    /**
     * Get idVisiteur
     *
     * @return int
     */
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Billets
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }
}

