<?php

class Appointment{
	private	static $num=0;
   private $time;
   private $place;
   public function setTime($m){$this->time=$m;}
   public function getTime(){return $this->time;}
   public function setPlace($c){$this->place=$c;}
   public function getPlace(){return $this->place;}    
   public static function getNum(){
   	return self::$num;
   } 
   public function __construct($time,$place){
         $this->setTime($time);
         $this->setPlace($place);
         self::$num++;
         

     }


 }


    $a1= new Appointment(555,"Gaza");
    echo "Num of Appointements :" , Appointment::getNum();
    $a2= new Appointment(333,"Gaza");
    echo "<br> Num of Appointements :",Appointment::getNum();
 


?>