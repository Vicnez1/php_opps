<?php
/**
* 
*/
class Post
{
	private $name;

	public function __set($name, $value)
	{
		# code...
		echo 'Setting '.$name.' to <strong>'.$value.'</strong><br/>';
		$this->name = $value;
	}
	public function __get($name)
	{
		# code...
		echo 'Getting '.$name.' <strong>'.$this->name.'</strong><br/>';
	}
	public function __isset($name)
	{
		echo 'Is '.$name.' set?<br />';
		return isset($this->name);
	}
}
$post = new Post;
$post->name= "testing";
$post->name;
var_dump(isset($post->name));
?>