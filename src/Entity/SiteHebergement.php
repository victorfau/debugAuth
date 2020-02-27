<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteHebergementRepository")
 */
class SiteHebergement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Event", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $event;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_hebergement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_st;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $nb_hebergement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_h1_titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_h1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic1_hebergement_h1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic2_hebergement_h1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic3_hebergement_h1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $map_hebergement_h1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_h2_titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_h2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic1_hebergement_h2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic2_hebergement_h2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic3_hebergement_h2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $map_hebergement_h2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_h3_titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_hebergement_h3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic1_hebergement_h3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic2_hebergement_h3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic3_hebergement_h3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $map_hebergement_h3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getPicHebergement(): ?string
    {
        return $this->pic_hebergement;
    }

    public function setPicHebergement(?string $pic_hebergement): self
    {
        $this->pic_hebergement = $pic_hebergement;

        return $this;
    }

    public function getTxtHebergementSt(): ?string
    {
        return $this->txt_hebergement_st;
    }

    public function setTxtHebergementSt(?string $txt_hebergement_st): self
    {
        $this->txt_hebergement_st = $txt_hebergement_st;

        return $this;
    }

    public function getNbHebergement(): ?string
    {
        return $this->nb_hebergement;
    }

    public function setNbHebergement(?string $nb_hebergement): self
    {
        $this->nb_hebergement = $nb_hebergement;

        return $this;
    }

    public function getTxtHebergementH1Titre(): ?string
    {
        return $this->txt_hebergement_h1_titre;
    }

    public function setTxtHebergementH1Titre(?string $txt_hebergement_h1_titre): self
    {
        $this->txt_hebergement_h1_titre = $txt_hebergement_h1_titre;

        return $this;
    }

    public function getTxtHebergementH1(): ?string
    {
        return $this->txt_hebergement_h1;
    }

    public function setTxtHebergementH1(?string $txt_hebergement_h1): self
    {
        $this->txt_hebergement_h1 = $txt_hebergement_h1;

        return $this;
    }

    public function getPic1HebergementH1(): ?string
    {
        return $this->pic1_hebergement_h1;
    }

    public function setPic1HebergementH1(?string $pic1_hebergement_h1): self
    {
        $this->pic1_hebergement_h1 = $pic1_hebergement_h1;

        return $this;
    }

    public function getPic2HebergementH1(): ?string
    {
        return $this->pic2_hebergement_h1;
    }

    public function setPic2HebergementH1(?string $pic2_hebergement_h1): self
    {
        $this->pic2_hebergement_h1 = $pic2_hebergement_h1;

        return $this;
    }

    public function getPic3HebergementH1(): ?string
    {
        return $this->pic3_hebergement_h1;
    }

    public function setPic3HebergementH1(?string $pic3_hebergement_h1): self
    {
        $this->pic3_hebergement_h1 = $pic3_hebergement_h1;

        return $this;
    }

    public function getMapHebergementH1(): ?string
    {
        return $this->map_hebergement_h1;
    }

    public function setMapHebergementH1(?string $map_hebergement_h1): self
    {
        $this->map_hebergement_h1 = $map_hebergement_h1;

        return $this;
    }

    public function getTxtHebergementH2Titre(): ?string
    {
        return $this->txt_hebergement_h2_titre;
    }

    public function setTxtHebergementH2Titre(?string $txt_hebergement_h2_titre): self
    {
        $this->txt_hebergement_h2_titre = $txt_hebergement_h2_titre;

        return $this;
    }

    public function getTxtHebergementH2(): ?string
    {
        return $this->txt_hebergement_h2;
    }

    public function setTxtHebergementH2(?string $txt_hebergement_h2): self
    {
        $this->txt_hebergement_h2 = $txt_hebergement_h2;

        return $this;
    }

    public function getPic1HebergementH2(): ?string
    {
        return $this->pic1_hebergement_h2;
    }

    public function setPic1HebergementH2(?string $pic1_hebergement_h2): self
    {
        $this->pic1_hebergement_h2 = $pic1_hebergement_h2;

        return $this;
    }

    public function getPic2HebergementH2(): ?string
    {
        return $this->pic2_hebergement_h2;
    }

    public function setPic2HebergementH2(?string $pic2_hebergement_h2): self
    {
        $this->pic2_hebergement_h2 = $pic2_hebergement_h2;

        return $this;
    }

    public function getPic3HebergementH2(): ?string
    {
        return $this->pic3_hebergement_h2;
    }

    public function setPic3HebergementH2(?string $pic3_hebergement_h2): self
    {
        $this->pic3_hebergement_h2 = $pic3_hebergement_h2;

        return $this;
    }

    public function getMapHebergementH2(): ?string
    {
        return $this->map_hebergement_h2;
    }

    public function setMapHebergementH2(?string $map_hebergement_h2): self
    {
        $this->map_hebergement_h2 = $map_hebergement_h2;

        return $this;
    }

    public function getTxtHebergementH3Titre(): ?string
    {
        return $this->txt_hebergement_h3_titre;
    }

    public function setTxtHebergementH3Titre(?string $txt_hebergement_h3_titre): self
    {
        $this->txt_hebergement_h3_titre = $txt_hebergement_h3_titre;

        return $this;
    }

    public function getTxtHebergementH3(): ?string
    {
        return $this->txt_hebergement_h3;
    }

    public function setTxtHebergementH3(?string $txt_hebergement_h3): self
    {
        $this->txt_hebergement_h3 = $txt_hebergement_h3;

        return $this;
    }

    public function getPic1HebergementH3(): ?string
    {
        return $this->pic1_hebergement_h3;
    }

    public function setPic1HebergementH3(?string $pic1_hebergement_h3): self
    {
        $this->pic1_hebergement_h3 = $pic1_hebergement_h3;

        return $this;
    }

    public function getPic2HebergementH3(): ?string
    {
        return $this->pic2_hebergement_h3;
    }

    public function setPic2HebergementH3(?string $pic2_hebergement_h3): self
    {
        $this->pic2_hebergement_h3 = $pic2_hebergement_h3;

        return $this;
    }

    public function getPic3HebergementH3(): ?string
    {
        return $this->pic3_hebergement_h3;
    }

    public function setPic3HebergementH3(?string $pic3_hebergement_h3): self
    {
        $this->pic3_hebergement_h3 = $pic3_hebergement_h3;

        return $this;
    }

    public function getMapHebergementH3(): ?string
    {
        return $this->map_hebergement_h3;
    }

    public function setMapHebergementH3(?string $map_hebergement_h3): self
    {
        $this->map_hebergement_h3 = $map_hebergement_h3;

        return $this;
    }
}
