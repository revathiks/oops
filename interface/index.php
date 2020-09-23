<?php
// to avoid create a multiple function for same functionality feature -when working in team
//interface is force u to define some function into ur class

interface Shapes{
	
	public function getarea();
}

interface Geometric{
	public function getcurcumference($a,$b);
}

class Triangle implements Shapes,Geometric{
	
	public function getarea(){
		
		echo "TRiangle are";
	}
	
	public function getcurcumference($a,$b){
		echo "Circumference is :". ($a*$b);
	}
}

class Square implements Shapes,Geometric{
	
	public function calculatearea(){
		
		echo "Square are";
	}
	
	public function getarea(){
		
		echo "Square are";
	}
	
	public function getcurcumference($a,$b){
		echo "Circumference is :".($a+$b);
	}
}

$obj=new Triangle;
$obj->getarea();
$obj->getcurcumference(10,40);

echo "<br><br>";

$obj2=new Square;
$obj2->getarea();
$obj2->getcurcumference(10,40);


