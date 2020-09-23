<?php
class Book{
	public $price;
	public $books;
	public $authors;
	public function price(int $price){
		$this->price=$price;
		return  $this->price;
	}
	
	public function booklist(array $books){		
		$this->books=$books;
		return $this->books;		
	}
	///chk parameter as class instance
	public function authors(Person $persons){
		
		$this->authors=$persons->authorsname();
		return $this->authors;
	}
}

//second class
class Person{
	
	public function authorsname(){
		return array('revathi','ravi');
	}
}

$book=new Book;
$book->price('3');
echo $book->price;

echo "<br><br>";

$bookar=array('oops','da','java');
$books=$book->booklist($bookar);

print_r($books);
echo "<br><br>";

//check as class instance
$authors=$book->authors(new Person);

print_r($authors);
?>