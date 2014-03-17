<?php
class Product 
{
 	public $name; //scope of the property
} 

 
$p = new Product(); 

$p->name = "Space juice"; //defining the property.
echo $p->name; //pay close attention to the lack of $ signs.
 
?>