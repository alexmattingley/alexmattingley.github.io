 <?php
// class Products {
//  	public $names; //scope of the property
// } 

 
// $p = new Products(); 

// $p->names = "Space juice"; //defining the property.
// echo $p->names; //pay close attention to the lack of $ signs.
 
?>


<!-- METHODS -->
<?php
class Product {

	//property
	public $name = 'default_name';
	public $price = 0;
	public $desc = 'default description';

	function __construct($name, $price, $desc){
		$this->name = $name;
		$this->price = $price;
		$this->desc = $desc;
	}

	//method
	public function getInfo(){
		return "Product Name: " . $this->name;
	}
}
 class soda extends Product {
 	
 	public $flavor;

 	function __construct($name, $price, $desc, $flavor){ //This is adding functionality to the parrent class without reimplementing completely
		parent::__construct($name, $price, $desc);
		$this->flavor = $flavor;
	}

 	public function getInfo(){
 		return "Product Name: " . $this->name . " Flavor :" . $this->flavor; //this inherts some properties from class product (i.e $name)
 	}
 }

$shirt = new Product("Space Juice T-shirt", 20, "Awesome Grey T-shirt");
$soda = new soda("Space Juice Soda", 2, "Thirst Mutilator", "grape");
echo $soda->getInfo();
echo $shirt->getInfo();

?>


<!-- NOTE: You cannot have two classes with the same name. -->