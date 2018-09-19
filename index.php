<html meta charset="utf-8">
<title></title>
<head>
<?
include ('func.php');
?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<style type="text/css">
		.window1{
			width:250px;
			border: 4px;
			font-family: Georgia;
		}
		.baner1{
			width: 240px;
			height: 100px;
			margin-top: 10px; 
			margin-left: 5px; 
			margin-bottom: 10px; 
			text-align: center;
		} 
		.baner2{
			width: 240px;
			height: 100px;
			margin-top: 10px; 
			margin-left: 5px; 
			margin-bottom: 10px; 
			text-align: center;
		}
		.baner3{
			width: 240px;
			height: 100px;
			margin-top: 10px; 
			margin-left: 5px; 
			margin-bottom: 10px; 
			text-align: center;
		}
		a{
			width: 240px;
			margin-top: 10%;
			
			font-size:20px;
			font-weight: normal;
			cursor: pointer;
			text-shadow: -8px -8px 0 hsl(200,100%,35%),
               -7px -7px 0 hsl(200,100%,55%),
               -6px -6px 0 hsl(200,100%,60%),
               -5px -5px 0 hsl(200,100%,65%),
               -4px -4px 0 hsl(200,100%,70%),
               -3px -3px 0 hsl(200,100%,75%),
               -2px -2px 0 hsl(200,100%,80%),
               -1px -1px 0 hsl(200,100%,85%),
               0 0 0 hsl(200,100%,95%);
			color: transparent;
			transition: all 1s;
		}
		a:hover {
			text-shadow: -8px 8px 0 hsl(80,100%,35%),
               -7px 7px 0 hsl(80,100%,55%),
               -6px 6px 0 hsl(80,100%,60%),
               -5px 5px 0 hsl(80,100%,65%),
               -4px 4px 0 hsl(80,100%,70%),
               -3px 3px 0 hsl(80,100%,75%),
               -2px 2px 0 hsl(80,100%,80%),
               -1px 1px 0 hsl(80,100%,85%),
               0 0 0 hsl(80,100%,95%);
			color: transparent;
		}
		
		h1{
			font-size: 20px;
			font-weight: normal;
			cursor: pointer;
			text-shadow: 1px 1px 0 hsl(20,100%,50%),
						2px 2px 0 hsl(20,100%,50%),
						3px 3px 0 hsl(35,100%,50%),
						4px 4px 0 hsl(35,100%,50%),
						5px 5px 0 hsl(45,100%,50%),
						6px 6px 0 hsl(45,100%,55%),
						7px 7px 0 hsl(55,100%,60%),
						8px 8px 0 hsl(55,100%,65%);
			color: hsl(0,100%,40%);
			transition: all 1s;
		}
		h1:hover {
			text-shadow: 1px -1px 0 hsl(290,100%,40%),
					2px -2px 0 hsl(290,100%,40%),
					3px -3px 0 hsl(280,100%,60%),
					4px -4px 0 hsl(280,100%,60%),
					5px -5px 0 hsl(270,100%,75%),
					6px -6px 0 hsl(270,100%,80%),
					7px -7px 0 hsl(260,100%,85%),
					8px -8px 0 hsl(260,100%,90%);
			color: hsl(300,100%,30%);
		}
		
	</style>
</head>
<body>

<?php

?>

<div class="window1">
	<div class="baner1">
		<div class="text"><?echo getRandArticle();?></div>
	</div>
	<div class="baner2">
		<div class="text"><?echo getRandArticle();?></div>
	</div>
	<div class="baner3">
		<div class="text"><?echo getRandArticle();?></div>
	</div>

</div>




</body>

</html>