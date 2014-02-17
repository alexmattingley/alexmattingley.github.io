<?php include('inc/products.php'); ?>

<?php 
$titlepage = "Mikes Full Catalog of Shirts";
$section = "shirts";
include ('inc/header.php'); 
?>
	
	<div class="section shirts page">

		<div class="wrapper">

			<h1>Mike's Full Catalog of shirts</h1>
			<ul class="products">
				<!--pay close attention to the foreach loop below, its basically the basis for an array. EDIT: Changed it to include html-->
				<?php foreach ($products as $product_id => $product) {
						echo get_list_view_html($product_id,$product);
					} 
				?>
			</ul>	
		</div>
	</div>

<?php include ('inc/footer.php'); ?>
