<?php include('inc/products.php'); 

$product_id = $GET["id"];
$prduct = $products[$product_id];

$section = "shirts";
$pageTitle = $product["name"];
include ("inc/header.php");

?>

	<div class="section page">

		<div class="wrapper">

			<div class="breadcrump"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?></div>

		</div>

	</div>
<?php include("inc/footer.php"); ?>