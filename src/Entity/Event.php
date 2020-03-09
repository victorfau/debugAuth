<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event {
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $nom;

	/**
	 * @ORM\Column(type="date")
	 */
	private $creation;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $description;

	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $date_in;

	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $date_out;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_accueil;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_actualites;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_hebergement;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_infoprat;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_presse;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_contact;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_inscription;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_activites;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $opt_transport;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="events")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur;

	/**
	 * @param mixed $id
	 */
	public function setId($id): void{
         		$this->id = $id;
         	}

	/**
	 * @return int|null
	 */
	public function getId(): ?int{
         		return $this->id;
         	}

	/**
	 * @return string|null
	 */
	public function getNom(): ?string{
         		return $this->nom;
         	}

	/**
	 * @param string $nom
	 * @return $this
	 */
	public function setNom(string $nom): self{
         		$this->nom = $nom;
         
         		return $this;
         	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getCreation(): ?\DateTimeInterface{
         		return $this->creation;
         	}

	/**
	 * @param \DateTimeInterface $creation
	 * @return $this
	 */
	public function setCreation(\DateTimeInterface $creation): self{
         		$this->creation = $creation;
         
         		return $this;
         	}

	/**
	 * @return string|null
	 */
	public function getDescription(): ?string{
         		return $this->description;
         	}

	/**
	 * @param string|null $description
	 * @return $this
	 */
	public function setDescription(?string $description): self{
         		$this->description = $description;
         
         		return $this;
         	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getDateIn(): ?\DateTimeInterface{
         		return $this->date_in;
         	}

	/**
	 * @param \DateTimeInterface|null $date_in
	 * @return $this
	 */
	public function setDateIn(?\DateTimeInterface $date_in): self{
         		$this->date_in = $date_in;
         
         		return $this;
         	}

	/**
	 * @return \DateTimeInterface|null
	 */
	public function getDateOut(): ?\DateTimeInterface{
         		return $this->date_out;
         	}

	/**
	 * @param \DateTimeInterface|null $date_out
	 * @return $this
	 */
	public function setDateOut(?\DateTimeInterface $date_out): self{
         		$this->date_out = $date_out;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptAccueil(): ?bool{
         		return $this->opt_accueil;
         	}

	/**
	 * @param bool $opt_accueil
	 * @return $this
	 */
	public function setOptAccueil(bool $opt_accueil): self{
         		$this->opt_accueil = $opt_accueil;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptActualites(): ?bool{
         		return $this->opt_actualites;
         	}

	/**
	 * @param bool $opt_actualites
	 * @return $this
	 */
	public function setOptActualites(bool $opt_actualites): self{
         		$this->opt_actualites = $opt_actualites;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptHebergement(): ?bool{
         		return $this->opt_hebergement;
         	}

	/**
	 * @param bool $opt_hebergement
	 * @return $this
	 */
	public function setOptHebergement(bool $opt_hebergement): self{
         		$this->opt_hebergement = $opt_hebergement;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptInfoprat(): ?bool{
         		return $this->opt_infoprat;
         	}

	/**
	 * @param bool $opt_infoprat
	 * @return $this
	 */
	public function setOptInfoprat(bool $opt_infoprat): self{
         		$this->opt_infoprat = $opt_infoprat;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptPresse(): ?bool{
         		return $this->opt_presse;
         	}

	/**
	 * @param bool $opt_presse
	 * @return $this
	 */
	public function setOptPresse(bool $opt_presse): self{
         		$this->opt_presse = $opt_presse;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptContact(): ?bool{
         		return $this->opt_contact;
         	}

	/**
	 * @param bool $opt_contact
	 * @return $this
	 */
	public function setOptContact(bool $opt_contact): self{
         		$this->opt_contact = $opt_contact;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptInscription(): ?bool{
         		return $this->opt_inscription;
         	}

	/**
	 * @param bool $opt_inscription
	 * @return $this
	 */
	public function setOptInscription(bool $opt_inscription): self{
         		$this->opt_inscription = $opt_inscription;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptActivites(): ?bool{
         		return $this->opt_activites;
         	}

	/**
	 * @param bool $opt_activites
	 * @return $this
	 */
	public function setOptActivites(bool $opt_activites): self{
         		$this->opt_activites = $opt_activites;
         
         		return $this;
         	}

	/**
	 * @return bool|null
	 */
	public function getOptTransport(): ?bool{
         		return $this->opt_transport;
         	}

	/**
	 * @param bool $opt_transport
	 * @return $this
	 */
	public function setOptTransport(bool $opt_transport): self{
         		$this->opt_transport = $opt_transport;
         
         		return $this;
         	}

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }
}
