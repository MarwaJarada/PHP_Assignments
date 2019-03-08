<?php

class Section{
	private $name;
	private $num;
	private $place;

	function setName($name){
		$this->name=$name;
	}
	function setPlace($place){
		$this->place=$place;
	}
	function setNum($num){
		$this->num=$num;
	}
	function getName(){
		return $this->name;
	}
	function getNum(){
		return $this->num;
	}
	function getPlace(){
		return $this->place;
	}

	function printSectionInfo(){
		echo "Section name :",$this->name , "<br>"
		, "Section num :", $this->num ,"<br>"
		, "Section place :", $this->place;
	}


}


	$mySection=new Section();
	$mySection->setName("sectionName");
	$mySection->setNum(5);
	$mySection->setPlace("I202");
	$mySection->printSectionInfo();


?>