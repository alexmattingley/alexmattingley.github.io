<!DOCTYPE>
<html>
<head>
<title>Responsive 3-Line Menu</title>
<style type="text/css">

@media screen and (max-width: 768px) {
#menu {
width:1.4em;
display: block;
background:#ddd;
font-size:1.35em;
text-align: center;
}
#nav.js {
display: none;
}
#nav ul {
width:100%;
}
#nav li {
width:100%;
border-right:none;
}
}

@media screen and (min-width: 768px) {
#menu {
display: none;
}
}
</style>
</head>
<body>
<ul id="nav">
	<li><a href="#">Home</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="#">About</a></li>
</ul>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$("#nav").addClass("js").before('<div id="menu">&#9776;</div>');
$("#menu").click(function(){
$("#nav").toggle();
});
$(window).resize(function(){
if(window.innerWidth > 768) {
$("#nav").removeAttr("style");
}
});
</script>
</body>
</html>
