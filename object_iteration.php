<?php

/**
* 
*/
class People
{
	
	public $person1 = 'john';
	public $person2 = 'rocky';
	public $person3 = 'jeff';

	protected $person4= 'jay';
	private $person5 = 'praveen';
//THIS FUCTION DISPLAY ALL ACCESS SPECIFIER VALUES LIKE A ARRAY 
	/*function iterateObject()
	{
	    foreach ($this as $key => $value) {
	    	print "$key => $value\n";
	    }
	}*/
}
$people = new People;
//$people->iterateObject();
//THIS LOOP DISPLAY ONLY PUBLIC ACCESS SPECIFIER VALUES LIKE A ARRAY 
foreach ($people as $key => $value) {
	print "$key => $value";
}
?>