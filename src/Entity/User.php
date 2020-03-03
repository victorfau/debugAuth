<?php

namespace App\Entity;

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
		#return $this->prenom . ' ' . $this->nom;
	}

	/**
	 * Removes sensitive data from the user.
	 *
	 * This is important if, at any given point, sensitive information like
	 * the plain-text password is stored on this object.
	 */
	public function eraseCredentials (){
		// TODO: Implement eraseCredentials() method.
	}
}
