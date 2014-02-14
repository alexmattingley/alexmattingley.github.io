<?php
//this an multidemensional array, or an array within an array. So the first array or base
//if you will is the $products = array(); then you have the second level which could be 
//thought of as an element or a second level array is $products[#] = array();. 
//Each of the proceeding elements such as "name" => Logo Shirt, Red", is an element of the 
//second level.
$products = array();
$products[101] = array(
    "name" => "Logo Shirt, Red",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => "W43ETYM5ZJ8JA",
    "sizes" => array('Small','Medium','Large')   
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 18,
    "paypal" => "U5TSBWJDQ4M5L",
    "sizes" => array('Small','Medium','Large')  
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 18,
    "paypal" => "2VZ9E84FATRHU",
    "sizes" => array('Small','Medium','Large')  
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "YC8CAY45PSGE4",
    "sizes" => array('Small','Medium','Large')  
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 18,
    "paypal" => "XBL8966GMYU86",
    "sizes" => array('Small','Medium','Large')  
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 18,
    "paypal" => "PFRL959NZRZUS",
    "sizes" => array('Small','Medium','Large')  
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 18,
    "paypal" => "FYKU6JQPFEN28",
    "sizes" => array('Small','Medium','Large')  
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 18,
    "paypal" => "KGE3ETDJLZA2G",
    "sizes" => array('Large')  
);
?>