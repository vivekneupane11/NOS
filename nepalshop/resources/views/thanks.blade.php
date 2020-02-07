<!DOCTYPE html>
<html>
<head>
<style>
div#load_screen{
	background: #000;
	opacity: 1;
	position: fixed;
    z-index:10;
	top: 0px;
	width: 100%;
	height: 1600px;
}
div#load_screen > div#loading{
	color:#FFF;
	width:120px;
	height:24px;
	margin: 300px auto;
}
</style>
<script>
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script>
</head>
<body>
<div id="load_screen"><div id="loading">Please wait until order complets</div></div>
<!-- Your normal document content lives here -->
</body>
</html>