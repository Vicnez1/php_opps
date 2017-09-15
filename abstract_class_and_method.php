<?php
abstract class Animal
{
	public $name;
	public $color;

	public function describe(){
		return $this->name. ' is ' .$this->color;
	}
	abstract public function makeSound();

}	
/**
* 
*/
class Duck extends Animal
{
	
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'Quack';
	}
}
/**
* 
*/
class Dog extends Animal
{
	
	public function describe(){
		return parent::describe();
	}
	public function makeSound()
	{
		return 'Bark';
	}
}

$animal = new Duck();
$animal->name = 'Ben';
$animal->color = 'White';
echo $animal->describe();
echo $animal->makeSound().'<br/>';
$animal2 = new Dog();
$animal2->name = 'Street Dog';
$animal2->color = 'Black';
echo $animal2->describe();
echo $animal2->makeSound();
?>