<?php
class Sign{
	
	private $sun;
	private $moon;
	private $ascendant;
	private $mercury;
	private $venus;
	private $mars;
	private $jupiter;
	private $saturn;
	private $uranus; 
	private $neptune;
	private $pluto;

	
	
	public function __construct($sun, $moon, $ascendant, $mercury, $venus, $mars, $jupiter, $saturn, $uranus, $neptune, $pluto){
		$this->set_sun ($sun);
		$this->set_moon($moon);
		$this->set_ascendant($ascendant);
		$this->set_mercury($mercury);
		$this->set_venus($venus);
		$this->set_mars($mars);
		$this->set_jupiter($jupiter);
		$this->set_saturn($saturn);
		$this->set_uranus($uranus);
		$this->set_neptune($neptune);
		$this->set_pluto($pluto);
	}
	
	//SET
	private function set_sun ($sun){
		$this->sun = $sun;
	}
	
	private function set_moon ($moon){
		$this->moon = $moon;
	}
	
	private function set_ascendant($ascendant){
		$this->ascendant = $ascendant;
	}
	
	private function set_mercury($mercury){
		$this->mercury = $mercury;
	}
	
	private function set_venus($venus){
		$this->venus = $venus;
	}

	private function set_mars($mars){
		$this->mars = $mars;
	}

	
	private function set_jupiter($jupiter){
		$this->jupiter = $jupiter;
	}

	private function set_saturn($saturn){
		$this->saturn = $saturn;
	}

	private function set_uranus($uranus){
		$this->uranus = $uranus;
	}

	private function set_neptune($neptune){
		$this->neptune = $neptune;
	}

	private function set_pluto($pluto){
		$this->pluto = $pluto;
	}

	//GET
	public function get_sun (){
		echo $sun;
	}
	
	public function get_moon (){
		echo $moon;
	}
	
	public function get_ascendant(){
		echo $ascendant;
	}
	
	public function get_mercury(){
		echo $mercury;
	}
	
	public function get_venus(){
		echo $venus;
	}

	public function get_mars(){
		echo $mars;
	}

	public function get_jupiter(){
		echo $jupiter;
	}

	public function get_saturn(){
		echo $saturn;
	}

	public function get_uranus(){
		echo $uranus;
	}

	public function get_neptune(){
		echo $neptune;
	}

	public function get_pluto(){
		echo $pluto;
	}
}