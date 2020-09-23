<?php
include "mobile.php";
include "traits.php";
include "secondtraits.php";
class A extends Mobile{
	use Laptop,Ipad{
       Ipad::display insteadof Laptop;
	   Ipad::model insteadof Laptop;
	   
	    Laptop::model as lapmodel;
		Laptop::display as lapdisplay;

	   }
	/*public function display(){
		echo "dispaly from class A";
	}*/
	
	
}

$obj=new A;
echo $obj->lapdisplay();
echo $obj->model();
?>