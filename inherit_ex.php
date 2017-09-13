<?php
/**
* 
*/
class First
{
	public $id=101;
	public $name="Vignesh";
	//private $city="CBE";
	public function saySomething($word)
	{
		echo " Something...".$word;
	}
}
/**
* 
*/
class Second extends First
{
	public function getName()
	{
		echo $this->name;
		//echo $this->city;
	}
}
$second = new Second;

//echo $second->name;
//$second->saySomething('Nothing');
$second->getName();
?>