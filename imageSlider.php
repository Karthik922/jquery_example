<!DOCTYPE html>
<html>
<head>
<title>image MOVE</title>
<style>
.box > div{
	position:absolute;
}
h1{
	text-align:center;
}
</style>
</head>
<body>
<h1>Simple Image Slider Using Jquery</h1>
<div class="box">
	<div><img src="k.jpg"> </div>
	<div><img src="a.jpg"> </div>
	<div><img src="r.jpg"> </div>
	<div><img src="t.jpg"> </div>
</div>
<script src="jquery-3.4.1.min.js"></script>
<script>
	$(".box div:gt(0)").hide();
	setInterval(function(){
		$('.box div:first-child')
		.fadeOut()
		.next()
		.fadeIn()
		.end()
		.appendTo('.box');
	},1000);
</script>
</body>
</html>