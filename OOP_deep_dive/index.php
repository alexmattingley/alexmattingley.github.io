<?php
class Product 
{
 	public $name; //scope of the property
} 

 
$p = new Product(); 

$p->name = "Space juice"; //defining the property.
echo $p->name; //pay close attention to the lack of $ signs.
 
?>


<!-- METHODS -->
<?php
class Product {

	//property
	public $name = 'default_name';

	//method
	public function getInfo(){
		return "Product Name: " . $this->name;
	}
}

$p = new Product();

echo $p->getInfo();

?>

<!-- NOTE: BOTH OF THESE CHUNKS OF CODE WILL NOT WORK AT THE SAME TIME, 
YOU NEED TO COMMENT ONE OUT AT A TIME.S -->