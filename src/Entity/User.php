<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

	/**
	 * @ORM\Column(type="smallint")
	 */
	private $participation;

	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $civilite;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $fonction;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $metier;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $adresse1;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $address2;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $ville;

	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	private $cp;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $pays;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $tel;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $mobile;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $groupe;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $connexion;

	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 */
	private $droit;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $is_valide;

	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 */
	private $fist_co;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $type;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $titre;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $remarques;

	/**
	 * @ORM\Column(type="boolean", options={"default" : false})
	 */
	private $conditions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Event", mappedBy="auteur", orphanRemoval=true)
     */
    private $events;



    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

	/**
	 * @return mixed
	 */
	public function getParticipation (){
		return $this->participation;
	}

	/**
	 * @param mixed $participation
	 */
	public function setParticipation ($participation): void{
		$this->participation = $participation;
	}

	/**
	 * @return mixed
	 */
	public function getCivilite (){
		return $this->civilite;
	}

	/**
	 * @param mixed $civilite
	 */
	public function setCivilite ($civilite): void{
		$this->civilite = $civilite;
	}

	/**
	 * @return mixed
	 */
	public function getFonction (){
		return $this->fonction;
	}

	/**
	 * @param mixed $fonction
	 */
	public function setFonction ($fonction): void{
		$this->fonction = $fonction;
	}

	/**
	 * @return mixed
	 */
	public function getMetier (){
		return $this->metier;
	}

	/**
	 * @param mixed $metier
	 */
	public function setMetier ($metier): void{
		$this->metier = $metier;
	}

	/**
	 * @return mixed
	 */
	public function getAdresse1 (){
		return $this->adresse1;
	}

	/**
	 * @param mixed $adresse1
	 */
	public function setAdresse1 ($adresse1): void{
		$this->adresse1 = $adresse1;
	}

	/**
	 * @return mixed
	 */
	public function getAddress2 (){
		return $this->address2;
	}

	/**
	 * @param mixed $address2
	 */
	public function setAddress2 ($address2): void{
		$this->address2 = $address2;
	}

	/**
	 * @return mixed
	 */
	public function getVille (){
		return $this->ville;
	}

	/**
	 * @param mixed $ville
	 */
	public function setVille ($ville): void{
		$this->ville = $ville;
	}

	/**
	 * @return mixed
	 */
	public function getCp (){
		return $this->cp;
	}

	/**
	 * @param mixed $cp
	 */
	public function setCp ($cp): void{
		$this->cp = $cp;
	}

	/**
	 * @return mixed
	 */
	public function getPays (){
		return $this->pays;
	}

	/**
	 * @param mixed $pays
	 */
	public function setPays ($pays): void{
		$this->pays = $pays;
	}

	/**
	 * @return mixed
	 */
	public function getTel (){
		return $this->tel;
	}

	/**
	 * @param mixed $tel
	 */
	public function setTel ($tel): void{
		$this->tel = $tel;
	}

	/**
	 * @return mixed
	 */
	public function getMobile (){
		return $this->mobile;
	}

	/**
	 * @param mixed $mobile
	 */
	public function setMobile ($mobile): void{
		$this->mobile = $mobile;
	}

	/**
	 * @return mixed
	 */
	public function getGroupe (){
		return $this->groupe;
	}

	/**
	 * @param mixed $groupe
	 */
	public function setGroupe ($groupe): void{
		$this->groupe = $groupe;
	}

	/**
	 * @return mixed
	 */
	public function getConnexion (){
		return $this->connexion;
	}

	/**
	 * @param mixed $connexion
	 */
	public function setConnexion ($connexion): void{
		$this->connexion = $connexion;
	}

	/**
	 * @return mixed
	 */
	public function getDroit (){
		return $this->droit;
	}

	/**
	 * @param mixed $droit
	 */
	public function setDroit ($droit): void{
		$this->droit = $droit;
	}

	/**
	 * @return mixed
	 */
	public function getIsValide (){
		return $this->is_valide;
	}

	/**
	 * @param mixed $is_valide
	 */
	public function setIsValide ($is_valide): void{
		$this->is_valide = $is_valide;
	}

	/**
	 * @return mixed
	 */
	public function getFistCo (){
		return $this->fist_co;
	}

	/**
	 * @param mixed $fist_co
	 */
	public function setFistCo ($fist_co): void{
		$this->fist_co = $fist_co;
	}

	/**
	 * @return mixed
	 */
	public function getType (){
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType ($type): void{
		$this->type = $type;
	}

	/**
	 * @return mixed
	 */
	public function getTitre (){
		return $this->titre;
	}

	/**
	 * @param mixed $titre
	 */
	public function setTitre ($titre): void{
		$this->titre = $titre;
	}

	/**
	 * @return mixed
	 */
	public function getRemarques (){
		return $this->remarques;
	}

	/**
	 * @param mixed $remarques
	 */
	public function setRemarques ($remarques): void{
		$this->remarques = $remarques;
	}

	/**
	 * @return mixed
	 */
	public function getConditions (){
		return $this->conditions;
	}

	/**
	 * @param mixed $conditions
	 */
	public function setConditions ($conditions): void{
		$this->conditions = $conditions;
	}



    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles(): ?array
    {
	    $roles = $this->roles;
	    // guarantee every user at least has ROLE_USER
	    if(empty($roles))
		    $roles = ['ROLE_USER'];
	    return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

	/**
	 * String representation of object
	 * @link  https://php.net/manual/en/serializable.serialize.php
	 * @return string the string representation of the object or null
	 * @since 5.1.0
	 */
	public function serialize (){
                        		return serialize([
                        			$this->id,
                        			$this->email,
                        			$this->password
                        		]);
                        	}

	/**
	 * Constructs the object
	 * @link  https://php.net/manual/en/serializable.unserialize.php
	 * @param string $serialized <p>
	 *                           The string representation of the object.
	 *                           </p>
	 * @return void
	 * @since 5.1.0
	 */
	public function unserialize ($serialized){
                        		list(
                        			$this->id,
                        			$this->email,
                        			$this->password
                        			) = unserialize($serialized, ['allowed_classes' => false]);
                        	}

	/**
	 * Returns the salt that was originally used to encode the password.
	 *
	 * This can return null if the password was not encoded using a salt.
	 *
	 * @return string|null The salt
	 */
	public function getSalt (){
                        		return null;
                        	}

	/**
	 * Returns the username used to authenticate the user.
	 *
	 * @return string The username
	 */
	public function getUsername (){
                        		return $this->email;
                        	}

	/**
	 * Removes sensitive data from the user.
	 *
	 * This is important if, at any given point, sensitive information like
	 * the plain-text password is stored on this object.
	 */
	public function eraseCredentials (){
                        		// method vide
                        	}

    /**
     * @return Collection|Event[]
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
            $event->setAuteur($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): self
    {
        if ($this->events->contains($event)) {
            $this->events->removeElement($event);
            // set the owning side to null (unless already changed)
            if ($event->getAuteur() === $this) {
                $event->setAuteur(null);
            }
        }

        return $this;
    }
}
