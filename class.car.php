<?php
include ('interface.car.php');

class Car implements CarInterface{
    public $numberOFDors;
	public  $color;
	public $brand;
	public $model;
	
	public function __construct($numberOFDors,$color,$brand,$model){
	$this->numberOFDors= $numberOFDors;
	$this->color=$color;
	$this->brand=$brand;
	$this->model=$model;
       }
	   
	public function getNumberOfDors()
	{
	return $this ->numberOFDors;
	}
	
	public function setNumberOfDors($numberOFDors)
	{ 
	$this->numberOFDors = $numberOFDors;
	}
	
	public function getColor()
	{
	return $this ->color;
	}
	
	public function setColor($color)
	{
	$this->color = $color;
	}
	
	public function getBrand()
	{
	return $this ->brand;
	}
	
	public function setBrand($brand)
	{
	$this->brand = $brand;
	}
	
	public function getModel()
	{
	return $this ->model;
	}
	
	public function setModel($model)
    {
	 $this ->model =$model ;
	}	
	
	public function helloCar () {
	echo "Hello! This is me- your car: $this->color, $this->brand, and $this->model model. The number of doors is: $this->numberOFDors \n" ;
	}	
}

?>