<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SiteAccueilRepository")
 */
class SiteAccueil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_accueil;

    /**
     * @ORM\Column(type="text", length=255, nullable=true)
     */
    private $txt_accueil_st;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_accueil_t_edito;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_accueil_edito;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_blocs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_slides;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre_blocs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic_1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $txt_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slider_1;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $titre_2;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
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
	 * @ORM\Column(type="string", length=255, nullable=true)
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
	 * @ORM\Column(type="string", length=255, nullable=true)
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
	 * @ORM\Column(type="string", length=255, nullable=true)
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
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $pic_6;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $txt_6;


	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $slider_2;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $slider_3;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $slider_4;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $slider_5;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $slider_6;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $titre_7;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $pic_7;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $txt_7;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */


	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $titre_8;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $pic_8;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $txt_8;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $titre_9;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $pic_9;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $txt_9;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Event", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Event;

	/**
	 * @return mixed
	 */
	public function getId(){
         		return $this->id;
         	}

	/**
	 * @param mixed $id
	 */
	public function setId($id): void{
         		$this->id = $id;
         	}

	/**
	 * @return mixed
	 */
	public function getPicAccueil(){
         		return $this->pic_accueil;
         	}

	/**
	 * @param mixed $pic_accueil
	 */
	public function setPicAccueil($pic_accueil): void{
         		$this->pic_accueil = $pic_accueil;
         	}

	/**
	 * @return mixed
	 */
	public function getTxtAccueilSt(){
         		return $this->txt_accueil_st;
         	}

	/**
	 * @param mixed $txt_accueil_st
	 */
	public function setTxtAccueilSt($txt_accueil_st): void{
         		$this->txt_accueil_st = $txt_accueil_st;
         	}

	/**
	 * @return mixed
	 */
	public function getTxtAccueilTEdito(){
         		return $this->txt_accueil_t_edito;
         	}

	/**
	 * @param mixed $txt_accueil_t_edito
	 */
	public function setTxtAccueilTEdito($txt_accueil_t_edito): void{
         		$this->txt_accueil_t_edito = $txt_accueil_t_edito;
         	}

	/**
	 * @return mixed
	 */
	public function getTxtAccueilEdito(){
         		return $this->txt_accueil_edito;
         	}

	/**
	 * @param mixed $txt_accueil_edito
	 */
	public function setTxtAccueilEdito($txt_accueil_edito): void{
         		$this->txt_accueil_edito = $txt_accueil_edito;
         	}

	/**
	 * @return mixed
	 */
	public function getNbBlocs(){
         		return $this->nb_blocs;
         	}

	/**
	 * @param mixed $nb_blocs
	 */
	public function setNbBlocs($nb_blocs): void{
         		$this->nb_blocs = $nb_blocs;
         	}

	/**
	 * @return mixed
	 */
	public function getNbSlides(){
         		return $this->nb_slides;
         	}

	/**
	 * @param mixed $nb_slides
	 */
	public function setNbSlides($nb_slides): void{
         		$this->nb_slides = $nb_slides;
         	}

	/**
	 * @return mixed
	 */
	public function getTitreBlocs(){
         		return $this->titre_blocs;
         	}

	/**
	 * @param mixed $titre_blocs
	 */
	public function setTitreBlocs($titre_blocs): void{
         		$this->titre_blocs = $titre_blocs;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre1(){
         		return $this->titre_1;
         	}

	/**
	 * @param mixed $titre_1
	 */
	public function setTitre1($titre_1): void{
         		$this->titre_1 = $titre_1;
         	}

	/**
	 * @return mixed
	 */
	public function getPic1(){
         		return $this->pic_1;
         	}

	/**
	 * @param mixed $pic_1
	 */
	public function setPic1($pic_1): void{
         		$this->pic_1 = $pic_1;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt1(){
         		return $this->txt_1;
         	}

	/**
	 * @param mixed $txt_1
	 */
	public function setTxt1($txt_1): void{
         		$this->txt_1 = $txt_1;
         	}

	/**
	 * @return mixed
	 */
	public function getSlider1(){
         		return $this->slider_1;
         	}

	/**
	 * @param mixed $slider_1
	 */
	public function setSlider1($slider_1): void{
         		$this->slider_1 = $slider_1;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre2(){
         		return $this->titre_2;
         	}

	/**
	 * @param mixed $titre_2
	 */
	public function setTitre2($titre_2): void{
         		$this->titre_2 = $titre_2;
         	}

	/**
	 * @return mixed
	 */
	public function getPic2(){
         		return $this->pic_2;
         	}

	/**
	 * @param mixed $pic_2
	 */
	public function setPic2($pic_2): void{
         		$this->pic_2 = $pic_2;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt2(){
         		return $this->txt_2;
         	}

	/**
	 * @param mixed $txt_2
	 */
	public function setTxt2($txt_2): void{
         		$this->txt_2 = $txt_2;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre3(){
         		return $this->titre_3;
         	}

	/**
	 * @param mixed $titre_3
	 */
	public function setTitre3($titre_3): void{
         		$this->titre_3 = $titre_3;
         	}

	/**
	 * @return mixed
	 */
	public function getPic3(){
         		return $this->pic_3;
         	}

	/**
	 * @param mixed $pic_3
	 */
	public function setPic3($pic_3): void{
         		$this->pic_3 = $pic_3;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt3(){
         		return $this->txt_3;
         	}

	/**
	 * @param mixed $txt_3
	 */
	public function setTxt3($txt_3): void{
         		$this->txt_3 = $txt_3;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre4(){
         		return $this->titre_4;
         	}

	/**
	 * @param mixed $titre_4
	 */
	public function setTitre4($titre_4): void{
         		$this->titre_4 = $titre_4;
         	}

	/**
	 * @return mixed
	 */
	public function getPic4(){
         		return $this->pic_4;
         	}

	/**
	 * @param mixed $pic_4
	 */
	public function setPic4($pic_4): void{
         		$this->pic_4 = $pic_4;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt4(){
         		return $this->txt_4;
         	}

	/**
	 * @param mixed $txt_4
	 */
	public function setTxt4($txt_4): void{
         		$this->txt_4 = $txt_4;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre5(){
         		return $this->titre_5;
         	}

	/**
	 * @param mixed $titre_5
	 */
	public function setTitre5($titre_5): void{
         		$this->titre_5 = $titre_5;
         	}

	/**
	 * @return mixed
	 */
	public function getPic5(){
         		return $this->pic_5;
         	}

	/**
	 * @param mixed $pic_5
	 */
	public function setPic5($pic_5): void{
         		$this->pic_5 = $pic_5;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt5(){
         		return $this->txt_5;
         	}

	/**
	 * @param mixed $txt_5
	 */
	public function setTxt5($txt_5): void{
         		$this->txt_5 = $txt_5;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre6(){
         		return $this->titre_6;
         	}

	/**
	 * @param mixed $titre_6
	 */
	public function setTitre6($titre_6): void{
         		$this->titre_6 = $titre_6;
         	}

	/**
	 * @return mixed
	 */
	public function getPic6(){
         		return $this->pic_6;
         	}

	/**
	 * @param mixed $pic_6
	 */
	public function setPic6($pic_6): void{
         		$this->pic_6 = $pic_6;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt6(){
         		return $this->txt_6;
         	}

	/**
	 * @param mixed $txt_6
	 */
	public function setTxt6($txt_6): void{
         		$this->txt_6 = $txt_6;
         	}

	/**
	 * @return mixed
	 */
	public function getSlider2(){
         		return $this->slider_2;
         	}

	/**
	 * @param mixed $slider_2
	 */
	public function setSlider2($slider_2): void{
         		$this->slider_2 = $slider_2;
         	}

	/**
	 * @return mixed
	 */
	public function getSlider3(){
         		return $this->slider_3;
         	}

	/**
	 * @param mixed $slider_3
	 */
	public function setSlider3($slider_3): void{
         		$this->slider_3 = $slider_3;
         	}

	/**
	 * @return mixed
	 */
	public function getSlider4(){
         		return $this->slider_4;
         	}

	/**
	 * @param mixed $slider_4
	 */
	public function setSlider4($slider_4): void{
         		$this->slider_4 = $slider_4;
         	}

	/**
	 * @return mixed
	 */
	public function getSlider5(){
         		return $this->slider_5;
         	}

	/**
	 * @param mixed $slider_5
	 */
	public function setSlider5($slider_5): void{
         		$this->slider_5 = $slider_5;
         	}

	/**
	 * @return mixed
	 */
	public function getSlider6(){
         		return $this->slider_6;
         	}

	/**
	 * @param mixed $slider_6
	 */
	public function setSlider6($slider_6): void{
         		$this->slider_6 = $slider_6;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre7(){
         		return $this->titre_7;
         	}

	/**
	 * @param mixed $titre_7
	 */
	public function setTitre7($titre_7): void{
         		$this->titre_7 = $titre_7;
         	}

	/**
	 * @return mixed
	 */
	public function getPic7(){
         		return $this->pic_7;
         	}

	/**
	 * @param mixed $pic_7
	 */
	public function setPic7($pic_7): void{
         		$this->pic_7 = $pic_7;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt7(){
         		return $this->txt_7;
         	}

	/**
	 * @param mixed $txt_7
	 */
	public function setTxt7($txt_7): void{
         		$this->txt_7 = $txt_7;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre8(){
         		return $this->titre_8;
         	}

	/**
	 * @param mixed $titre_8
	 */
	public function setTitre8($titre_8): void{
         		$this->titre_8 = $titre_8;
         	}

	/**
	 * @return mixed
	 */
	public function getPic8(){
         		return $this->pic_8;
         	}

	/**
	 * @param mixed $pic_8
	 */
	public function setPic8($pic_8): void{
         		$this->pic_8 = $pic_8;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt8(){
         		return $this->txt_8;
         	}

	/**
	 * @param mixed $txt_8
	 */
	public function setTxt8($txt_8): void{
         		$this->txt_8 = $txt_8;
         	}

	/**
	 * @return mixed
	 */
	public function getTitre9(){
         		return $this->titre_9;
         	}

	/**
	 * @param mixed $titre_9
	 */
	public function setTitre9($titre_9): void{
         		$this->titre_9 = $titre_9;
         	}

	/**
	 * @return mixed
	 */
	public function getPic9(){
         		return $this->pic_9;
         	}

	/**
	 * @param mixed $pic_9
	 */
	public function setPic9($pic_9): void{
         		$this->pic_9 = $pic_9;
         	}

	/**
	 * @return mixed
	 */
	public function getTxt9(){
         		return $this->txt_9;
         	}

	/**
	 * @param mixed $txt_9
	 */
	public function setTxt9($txt_9): void{
         		$this->txt_9 = $txt_9;
         	}

    public function getEvent(): ?Event
    {
        return $this->Event;
    }

    public function setEvent(Event $Event): self
    {
        $this->Event = $Event;

        return $this;
    }

}
