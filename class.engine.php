<?php
include ('interface.raceengineinterface.php');
class 	Engine implements EngineInterface
    {
	
      private $hp;

      public function __construct($hp){
         $this ->hp= $hp;
       }
  
       public function getHP()
	   {
	    return $this->hp;
	   }
	   
       public function HP()
	   {
	   echo "Engines horse power: $this->hp \n";
	   // return $this->hp;
	   
	   }
         

  
  
    }
	
	?>