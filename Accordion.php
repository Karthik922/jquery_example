<html>
<head>
<title>Accordion Usign Jquery</title>
<style>
.box
{
	border-bottom:1px solid grey;
	background:white;
	padding:24px;
	color:#4a5666;
}
.header::before
{
	content:'';
	vertical-align:middle;
	display:inline-block;
	width:12px;
	height:12px;
	border-radius:50%;
	background-color:gray;
	margin-right:12px;
	
}
.active.header::before
{
	background-color:red;
}
</style>
</head>
<body>
<h1>Simple Accordian By Jquery</h1>
<div class="box">
	<div class="header">C-Programming</div>
	<div class="content">
	Like most Imperative language in the ALGOl tradition, c has facilities for structure programming
	and allows lexical variable scope and recursion while a static type system prevents many unintended
	operation. In C all executable code is coontained within subroutines, which are called "function"
	(although not in the strict sense of functional programming).Function parameters are always passed
	by value, pass-by-reference is simulated in c by explicity passing pointer values. C programmingsource text is free
	-format, using the semicolon as a statement terminator and curly braces for grouping blcks of statements
	
	</div>
	<div class="header">c++Programming</div>
	<div class="content">
	C++ ranks 4th in popularity according to 2016 IEEE spectrum Top Programming Language ranking. Learning C++ is a wise investment for all programmers.

This guide answers all your questions related to C++ on what is it, when is it used, why is it used and how to get yourself started
with it
	
	</div>
	<div class="header">c++Programming</div>
	<div class="content">
	Java is a popular general-purpose programming language and computing platform. It is fast, reliable, and secure. According to Oracle, the company that owns Java, Java runs on 3 billion devices worldwide.

Considering the number of Java developers, devices running Java, and companies adapting it, it's safe to say that Java will be around for many years to come.

This guide will provide everything you need to know about Java programming language before you learn it. More specifically, you will learn about features of Java programming, its applications, reasons to learn it, and how you can learn it the right way.

	</div>
	
</div>
		<script src="jquery-3.4.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".box").on("click",".header",function(){
				$(this).toggleClass("active").next().slideToggle();
			});
		});
		</script>

</body>
</html>