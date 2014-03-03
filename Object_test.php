<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
        <!--Pieces of an object:

1.Create the class. Remember this also includes the properties(variables that you will be using)
2.Create the function construct.
3. Create methods(more functions)
4.Create instances. Call class construct
5.echo out instances of methods.
-->
    <p>One can find a wide variety of beer in San Diego. This is a list of some of my favorites:</p>
<p>
      
    <?php
        class beer {
            public $beertype;
            public $beercompany;

            public function __construct($beertype, $beercompany){
                $this->beertype = $beertype;
                $this->beercompany = $beercompany;
            }
            public function display_beer(){
                echo "Beer type: " . $this->beertype . " .";
                ?>
                <br>
                <?php
                echo "Beer Company: " . $this->beercompany . " .";
            }
        }
        $beer1 = new beer("IPA", "Stone Brewing Company");
        $beer2 = new beer("Barley Wine", "Trader Joes");

        echo $beer1->display_beer();
        ?>
        <br>
        <?php
        echo $beer2->display_beer();
    ?>
      </p>
    </body>
    </html>