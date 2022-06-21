<html>
	<head>
	<title>KKN</title>
	<style>
	*{
		margin:0px;
		padding:0px;
	}
	html
	{
		background:silver;
		font-family:roboto;
		color:navy;
	}
	body{
		height:auto;
		width:800px;
		margin: 0 auto;
		background:white;
		text-align:center;
		padding:20px;
	}
	.scrollup
	{
		width: 40px;
		height:40px;
		position:fixed;
		bottom:50px;
		right:100px;
		display:none;
		background-color:orange;
		text-decoration:none;
		line-height:40px;
		text-align:center;
		color:white;
	}
	p{
		text-align:justify;
		line-height:30px;
		margin-top:10px;
	}
	h1{
		color:orange;
	}
	#s{
		color:blue;
		text-align:center;
	}
	</style>
	</head>
	<body>
		<h1>Scorll Tap Using Jquery </h1>
		<div style="min-height:1000px">
		<p id="s">Scroll Down The Page &hellip;</p>
		<p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
</p>
		<p>Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
</p>
		<p>Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.</p>
		<a href="#" class="scrollup">Top</a>
		</div>
<script src="jquery-3.4.1.min.js"></script>
<script>
	$(document).ready(function(){
	$(window).scroll(function(){
	if($(this).scrollTop()>100){
		$('.scrollup').fadeIn();
	}
	else
	{
		$('.scrollup').fadeOut();
	}
	});
	$('.scrollup').click(function(){
		$("html,body").animate({
		scrollTop:0
		},600);
	});
	});
</script>		
	</body>
</html>