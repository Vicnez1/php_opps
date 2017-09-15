<?php
//include 'auto loading class and final keyword/Foo.php';
spl_autoload_register(function($class_name){
	include 'auto loading class and final keyword/'.$class_name.'.php';
});
	

//$foo = new Foo;
//$foo->sayHello();
$bar = new Bar;
$bar->sayHello();
echo "<br/>";
$bar->sayHi();
?>