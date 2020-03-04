<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteContactRepository")
 */
class SiteContact
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
    private $pic_contact;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_contact_st;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mail_contact;

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

    public function getPicContact(): ?string
    {
        return $this->pic_contact;
    }

    public function setPicContact(?string $pic_contact): self
    {
        $this->pic_contact = $pic_contact;

        return $this;
    }

    public function getTxtContactSt(): ?string
    {
        return $this->txt_contact_st;
    }

    public function setTxtContactSt(?string $txt_contact_st): self
    {
        $this->txt_contact_st = $txt_contact_st;

        return $this;
    }

    public function getMailContact(): ?string
    {
        return $this->mail_contact;
    }

    public function setMailContact(?string $mail_contact): self
    {
        $this->mail_contact = $mail_contact;

        return $this;
    }
}
