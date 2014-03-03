<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
		<p>
		<?php
		$Intro_beer = "My beer choices this week: "; 
    	class beer {
        	public static function display_1(){
            echo "Coronado Brew Co. Baltic Porter";
        	}
        	public static function display_2(){
        	echo "Trader Joes Vintage Ale";
        	}	        
    	}
    	?>
    	<?php
    echo $Intro_beer;
    echo "<br>";
    echo beer::display_1(); 
    echo "<br>";
    echo beer::display_2();
    	?>
		</p>
	</body>
</html>