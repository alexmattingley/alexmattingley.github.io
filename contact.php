<!--this is a variable, $variable name (x)= value for that given page -->
<?php
$titlepage = "Contact Mike";
$section = "contact"; 
include ('inc/header.php');
?>

<div class="section page">

	<div class= "wrapper">

	<h1>Contact</h1>

	<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>
	<!--This whole section below is a submission form, the important elements include form, label, and input. 
	I am assuming the form method tells the server what to do with the information that is submitted. As of now, 
	the information is "post" to the page. The submission form must be wrapped in the form attribute. 
	Also for note the label needs to match the id attribute. The action tells the browser where to send the information, 
	in this case it sends the info to contact-process.php -->
	<form method="post" action="contact-process.php"> 

	<table>
		<tr>
			<th>
				<label for= "name">Name</label>
			</th>
			<td>
				<input type="text" name= "name" id="name">
			</td>
		</tr>	
		<tr>
			<th>
				<label for= "email">Email</label>
			</th>
			<td>
				<input type="text" name= "email" id="email">
			</td>
		</tr>		
		<tr>
			<th>
				<label for= "message">Message</label>
			</th>
			<td>
				<textarea name= "message" id="message"></textarea>
			</td>
		</tr>				
	</table>
		<input type="submit" value="send">
	</form>

	</div>

</div>

<?php include ('inc/footer.php'); ?>