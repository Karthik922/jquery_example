<html>
<head>
<title>XML REad  jquery
</title>
<style>
h1{text-align:center;color:red;}
</style>
</head>
<body>
<h1>Read Data From XMl File To  HTML List</h1>
<div id="content">

</div>
<script src="jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
	$("#content").append("<ul></ul>");
	$.ajax({
		type:"GET",
		url:"books.xml",
		dataType:"xml",
		success:function(xml){
			$(xml).find("Book").each(function(){
				var title=$(this).find("Title").text();
				var publish=$(this).find("Publisher").text();
					$("<li></li>").html(title+" ,"+publish).appendTo("#content ul");
				
			});
		}
		
	});
});
</script>
</body>
</html>