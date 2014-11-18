<?php
include ('interface.racecarinterface.php');

class 	RaceCar extends Car implements RaceCarInterface {
	
      private $vMax;
      private $accelaration;
	  public  $newengine;
	  public  $hp;


      public function __construct($vMax, $accelaration){
      $this->vMax = $vMax+55;
	  $this->acceleration =$vMax/2;

       }
  
       public function getVMax()
         { 
           return $this->vMax; 
         }

         public function getAcceleration()
		   {
            return $this->acceleration;
   
            }
  
        function vMax ()
		{
		echo "Engines max velocity is: $this->vMax \n";
		}
        
		function Acceleration ()
		{
		echo "Average acceleration is: $this->acceleration \n";
		}
       
	 
    }

?>

