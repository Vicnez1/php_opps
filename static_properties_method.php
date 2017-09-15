<?php
/**
* 
*/
class User
{
	//public $username;
	public static $min_pass_len=5;
	public static function validatePassowrd($password)
	{
		if (strlen($password) >= self::$min_pass_len) {
			return true;
		}
		else {
			return false;
		}
	}


}
$password = 'password';
if(User::validatePassowrd($password)) {
	echo "Password is valid";
} else {
	echo "Password is not valid";
}
?>