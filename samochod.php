<?php
abstract class samochod{
	protected $spalanie=5;// litrów na 100km
	protected $kosztPaliwa=5;//zł za litr
	protected $komunikat="Proszę sprawdzić wartości spalania i kosztu paliwa.<br />";//plik lub baza oraz filtr
	private $ustawiono=false;
	function ustaw($spalanie, $kosztPaliwa){
		if($spalanie>0 && $kosztPaliwa>0){//const
		$this->spalanie=$spalanie;
		$this->kosztPaliwa=$kosztPaliwa;
		$this->ustawiono=true;
		}
		//else echo $this->komunikat;
	}
	function ilePali($liczbaKm){
		if($this->ustawiono)
		return ($this->spalanie/100)*$liczbaKm;
		else return $this->komunikat;
	}
	function koszt($liczbaKm){
		if($this->ustawiono)
		return $this->ilePali($liczbaKm)*$this->kosztPaliwa;
		else return $this->komunikat;
	}
	abstract function kosztInstalacjiGazowej();//Ta metoda musi być w klasie pochodnej.
}
?>