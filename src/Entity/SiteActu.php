<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteActuRepository")
 */
class SiteActu
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
    private $pic_actualite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_actualite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_actualite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_actus;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_6;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_6;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_6;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_7;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_7;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_7;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_8;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_8;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_8;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_9;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pic_9;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_9;

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

    public function getPicActualite(): ?string
    {
        return $this->pic_actualite;
    }

    public function setPicActualite(?string $pic_actualite): self
    {
        $this->pic_actualite = $pic_actualite;

        return $this;
    }

    public function getTxtActualite(): ?string
    {
        return $this->txt_actualite;
    }

    public function setTxtActualite(?string $txt_actualite): self
    {
        $this->txt_actualite = $txt_actualite;

        return $this;
    }

    public function getTitreActualite(): ?string
    {
        return $this->titre_actualite;
    }

    public function setTitreActualite(?string $titre_actualite): self
    {
        $this->titre_actualite = $titre_actualite;

        return $this;
    }

    public function getNbActus(): ?int
    {
        return $this->nb_actus;
    }

    public function setNbActus(?int $nb_actus): self
    {
        $this->nb_actus = $nb_actus;

        return $this;
    }

    public function getTitre1(): ?string
    {
        return $this->titre_1;
    }

    public function setTitre1(?string $titre_1): self
    {
        $this->titre_1 = $titre_1;

        return $this;
    }

    public function getPic1(): ?string
    {
        return $this->pic_1;
    }

    public function setPic1(?string $pic_1): self
    {
        $this->pic_1 = $pic_1;

        return $this;
    }

    public function getTxt1(): ?string
    {
        return $this->txt_1;
    }

    public function setTxt1(?string $txt_1): self
    {
        $this->txt_1 = $txt_1;

        return $this;
    }

    public function getTitre2(): ?string
    {
        return $this->titre_2;
    }

    public function setTitre2(?string $titre_2): self
    {
        $this->titre_2 = $titre_2;

        return $this;
    }

    public function getPic2(): ?string
    {
        return $this->pic_2;
    }

    public function setPic2(?string $pic_2): self
    {
        $this->pic_2 = $pic_2;

        return $this;
    }

    public function getTxt2(): ?string
    {
        return $this->txt_2;
    }

    public function setTxt2(?string $txt_2): self
    {
        $this->txt_2 = $txt_2;

        return $this;
    }

    public function getTitre3(): ?string
    {
        return $this->titre_3;
    }

    public function setTitre3(?string $titre_3): self
    {
        $this->titre_3 = $titre_3;

        return $this;
    }

    public function getPic3(): ?string
    {
        return $this->pic_3;
    }

    public function setPic3(?string $pic_3): self
    {
        $this->pic_3 = $pic_3;

        return $this;
    }

    public function getTxt3(): ?string
    {
        return $this->txt_3;
    }

    public function setTxt3(?string $txt_3): self
    {
        $this->txt_3 = $txt_3;

        return $this;
    }

    public function getTitre4(): ?string
    {
        return $this->titre_4;
    }

    public function setTitre4(?string $titre_4): self
    {
        $this->titre_4 = $titre_4;

        return $this;
    }

    public function getPic4(): ?string
    {
        return $this->pic_4;
    }

    public function setPic4(?string $pic_4): self
    {
        $this->pic_4 = $pic_4;

        return $this;
    }

    public function getTxt4(): ?string
    {
        return $this->txt_4;
    }

    public function setTxt4(?string $txt_4): self
    {
        $this->txt_4 = $txt_4;

        return $this;
    }

    public function getTitre5(): ?string
    {
        return $this->titre_5;
    }

    public function setTitre5(?string $titre_5): self
    {
        $this->titre_5 = $titre_5;

        return $this;
    }

    public function getPic5(): ?string
    {
        return $this->pic_5;
    }

    public function setPic5(?string $pic_5): self
    {
        $this->pic_5 = $pic_5;

        return $this;
    }

    public function getTxt5(): ?string
    {
        return $this->txt_5;
    }

    public function setTxt5(?string $txt_5): self
    {
        $this->txt_5 = $txt_5;

        return $this;
    }

    public function getTitre6(): ?string
    {
        return $this->titre_6;
    }

    public function setTitre6(?string $titre_6): self
    {
        $this->titre_6 = $titre_6;

        return $this;
    }

    public function getPic6(): ?string
    {
        return $this->pic_6;
    }

    public function setPic6(?string $pic_6): self
    {
        $this->pic_6 = $pic_6;

        return $this;
    }

    public function getTxt6(): ?string
    {
        return $this->txt_6;
    }

    public function setTxt6(?string $txt_6): self
    {
        $this->txt_6 = $txt_6;

        return $this;
    }

    public function getTitre7(): ?string
    {
        return $this->titre_7;
    }

    public function setTitre7(?string $titre_7): self
    {
        $this->titre_7 = $titre_7;

        return $this;
    }

    public function getPic7(): ?string
    {
        return $this->pic_7;
    }

    public function setPic7(?string $pic_7): self
    {
        $this->pic_7 = $pic_7;

        return $this;
    }

    public function getTxt7(): ?string
    {
        return $this->txt_7;
    }

    public function setTxt7(?string $txt_7): self
    {
        $this->txt_7 = $txt_7;

        return $this;
    }

    public function getTitre8(): ?string
    {
        return $this->titre_8;
    }

    public function setTitre8(?string $titre_8): self
    {
        $this->titre_8 = $titre_8;

        return $this;
    }

    public function getPic8(): ?string
    {
        return $this->pic_8;
    }

    public function setPic8(?string $pic_8): self
    {
        $this->pic_8 = $pic_8;

        return $this;
    }

    public function getTxt8(): ?string
    {
        return $this->txt_8;
    }

    public function setTxt8(?string $txt_8): self
    {
        $this->txt_8 = $txt_8;

        return $this;
    }

    public function getTitre9(): ?string
    {
        return $this->titre_9;
    }

    public function setTitre9(?string $titre_9): self
    {
        $this->titre_9 = $titre_9;

        return $this;
    }

    public function getPic9(): ?string
    {
        return $this->pic_9;
    }

    public function setPic9(?string $pic_9): self
    {
        $this->pic_9 = $pic_9;

        return $this;
    }

    public function getTxt9(): ?string
    {
        return $this->txt_9;
    }

    public function setTxt9(?string $txt_9): self
    {
        $this->txt_9 = $txt_9;

        return $this;
    }
}
