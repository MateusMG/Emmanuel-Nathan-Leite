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
		$this->sun = $sun;
		$this->moon = $moon;
		$this->ascendant = $ascendant;
		$this->mercury = $mercury;
		$this->venus = $venus;
		$this->mars = $mars;
		$this->jupiter = $jupiter;
		$this->saturn = $saturn;
		$this->uranus = $uranus;
		$this->neptune = $neptune;
		$this->pluto = $pluto;
	}
	
	//GET
	public function get_sun (){
		return $this->sun;
	}
	
	public function get_moon (){
		return $this->moon;
	}
	
	public function get_ascendant(){
		return $this->ascendant;
	}
	
	public function get_mercury(){
		return $this->mercury;
	}
	
	public function get_venus(){
		return $this->venus;
	}

	public function get_mars(){
		return $this->mars;
	}

	public function get_jupiter(){
		return $this->jupiter;
	}

	public function get_saturn(){
		return $this->saturn;
	}

	public function get_uranus(){
		return $this->uranus;
	}

	public function get_neptune(){
		return $this->neptune;
	}

	public function get_pluto(){
		return $this->pluto;
	}
}