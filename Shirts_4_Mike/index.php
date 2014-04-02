<!-- In order for the browser to recognize php, you need to have a file that ends in .php
Variable names in php start with a dollar sign-->
<!--basics of conditionals:
opening tag
$x=variable;
if ($x=="stated variable") { 
	echo "message for page";}-->
<?php 
$titlepage= "Unique t-shirts designed by a frog";
include ('inc/header.php'); 
?>

	<div id="content">

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php include("inc/products.php"); ?>

				<ul class="products">
					<?php 
					$total_products = count($products);
					$position = 0;
					$list_view_html = "";
					foreach ($products as $product_id => $product) {
						$position = $position + 1;
						if ($total_products - $position < 4) {
							$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html; 
					?>					
				</ul>

			</div>

		</div>

	</div>
	<?php include ('inc/footer.php'); ?>
