<?php

class User
{
	public $id=101;
	public $uname;
	public $email;
	public $upass;

	public function __construct($uname, $upass){
		$this->uname=$uname;
		$this->upass=$upass;
		//echo 'Constructor Called...';
	}
	public function someFunction()
	{
         echo 'Some Function Contents...';
	}
	public function login()
	{
		$this->auth();
	}

	/*public function login($uname, $upass)
	{
		$this->uname=$uname;
		$this->upass=$upass;
		//echo $uname.'is now logged in...';
		//$this->auth($uname, $upass);
		$this->auth();
	}*/
	public function auth()
	{
		echo $this->uname.' authenticated...'.$this->id;
	}
	/*public function auth($uname, $upass)
	{
		echo $uname.' authenticated...'.$this->id;
	}*/
	public function __destruct()
	{
		echo 'Destructor Called...';
	}
}
$User=new User('Vignesh','555');


//$User->someFunction();
//$User->login('Vignesh','555');
$User->login();

echo $User->uname;