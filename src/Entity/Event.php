<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="users")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="author")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $nom;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $description;

	/**
	 * @ORM\Column(type="date")
	 */
	private $creation;

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
	private $opt_infopratique;

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


	public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getusers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

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

	/**
	 * @return mixed
	 */
	public function getNom(){
		return $this->nom;
	}

	/**
	 * @param mixed $nom
	 */
	public function setNom($nom): void{
		$this->nom = $nom;
	}

	/**
	 * @return mixed
	 */
	public function getDescription(){
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description): void{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getCreation(){
		return $this->creation;
	}

	/**
	 * @param mixed $creation
	 */
	public function setCreation($creation): void{
		$this->creation = $creation;
	}

	/**
	 * @return mixed
	 */
	public function getDateIn(){
		return $this->date_in;
	}

	/**
	 * @param mixed $date_in
	 */
	public function setDateIn($date_in): void{
		$this->date_in = $date_in;
	}

	/**
	 * @return mixed
	 */
	public function getDateOut(){
		return $this->date_out;
	}

	/**
	 * @param mixed $date_out
	 */
	public function setDateOut($date_out): void{
		$this->date_out = $date_out;
	}

	/**
	 * @return mixed
	 */
	public function getOptAccueil(){
		return $this->opt_accueil;
	}

	/**
	 * @param mixed $opt_accueil
	 */
	public function setOptAccueil($opt_accueil): void{
		$this->opt_accueil = $opt_accueil;
	}

	/**
	 * @return mixed
	 */
	public function getOptActualites(){
		return $this->opt_actualites;
	}

	/**
	 * @param mixed $opt_actualites
	 */
	public function setOptActualites($opt_actualites): void{
		$this->opt_actualites = $opt_actualites;
	}

	/**
	 * @return mixed
	 */
	public function getOptHebergement(){
		return $this->opt_hebergement;
	}

	/**
	 * @param mixed $opt_hebergement
	 */
	public function setOptHebergement($opt_hebergement): void{
		$this->opt_hebergement = $opt_hebergement;
	}

	/**
	 * @return mixed
	 */
	public function getOptInfopratique(){
		return $this->opt_infopratique;
	}

	/**
	 * @param mixed $opt_infopratique
	 */
	public function setOptInfopratique($opt_infopratique): void{
		$this->opt_infopratique = $opt_infopratique;
	}

	/**
	 * @return mixed
	 */
	public function getOptPresse(){
		return $this->opt_presse;
	}

	/**
	 * @param mixed $opt_presse
	 */
	public function setOptPresse($opt_presse): void{
		$this->opt_presse = $opt_presse;
	}

	/**
	 * @return mixed
	 */
	public function getOptContact(){
		return $this->opt_contact;
	}

	/**
	 * @param mixed $opt_contact
	 */
	public function setOptContact($opt_contact): void{
		$this->opt_contact = $opt_contact;
	}

	/**
	 * @return mixed
	 */
	public function getOptInscription(){
		return $this->opt_inscription;
	}

	/**
	 * @param mixed $opt_inscription
	 */
	public function setOptInscription($opt_inscription): void{
		$this->opt_inscription = $opt_inscription;
	}

	/**
	 * @return mixed
	 */
	public function getOptActivites(){
		return $this->opt_activites;
	}

	/**
	 * @param mixed $opt_activites
	 */
	public function setOptActivites($opt_activites): void{
		$this->opt_activites = $opt_activites;
	}

	/**
	 * @return mixed
	 */
	public function getOptTransport(){
		return $this->opt_transport;
	}

	/**
	 * @param mixed $opt_transport
	 */
	public function setOptTransport($opt_transport): void{
		$this->opt_transport = $opt_transport;
	}

}
