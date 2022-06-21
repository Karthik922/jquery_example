<html>
	<head>
	<title>Simple Comment</title>
	<style>
	*{
		margin:0px;
		padding:0px;
	}
	html{
		background:orange;
		
	}
	body{
		height:auto;
		width:600px;
		margin:20px auto;
		background:white;
		padding:10px;
		font-family:roboto;
	}
	h1{
		text-align:center;
		color:blue;
	}
	div{
		min-height:100px;
		height:200px;
		background:#fbfbfb;
		width:600px;
		overflow:auto;
	}
	input,textarea{
		display:block;
		width:100%;
		margin-top:12px;
		border:1px solid grey;
	}
	input{
		height:30px;
	}
	textarea{resize:none;height:100px;}
	button
	{
		display:block;
		height:40px;
		width:150px;
		border-radius:5px;
		border:none;
		background:green;
		color:white;
		margin-top:10px;
		font-size:18px;
		font-family:roboto;
	}
	#box ul li{
		list-style-type:none;
		line-height:30px;
		background:#d7febc;
		padding:10px 5px 10px 5px;
		margin-bottom:10px;
		font-family:300px;
		border-radius:10px;
	}
	img{
		height:400px;
		width:600px;
		margin-bottom:50px;
	}
	</style>
	</head>
	<body>
	<h1>Simple Comment Page</h1>
	<img src="r.jpg">
	<div id="box">
		<ul>
		
		</ul>
	</div>
	<input type="text" id="name">
	<textarea id="mess"></textarea>
	<button id="btn">Post Button</button>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#box ul").load("comments.php");
		$("#btn").click(function(){
		//alert("hai");
		var name=$("#name").val();
		var mess=$("#mess").val();
		if(name=="" && mess=="")
		{
			alert("Please Fill all fields");
			return;
		}
		else
		{
		$.ajax({
		url:"save.php",
		type:"POST",
		data:{na:name,me:mess},
		success:function(){

			$("<li></li>").html("<b>"+name+"</b>:"+mess).prependTo("#box ul");
			$("#name").val("");
			$("#mess").val("");
		}
		});
		}
		
		
		});
	});
	</script>
	
	</body>
</html>