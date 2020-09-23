<?php
class User{
    static public $name='maya';
	
	static public function getname(){
		return self::$name='Revathi ks';   //$this cant be use in static methods
	}
	
}

/*$user=new User;
$user->getname();*/ 

//instead of above use scope resolution operator ::
//static method only use for utility purpose where we can share the common information to all like increment

//if place of confidential information we should not use static method

echo User::$name;
echo "<br>";
echo User::getname();

?>