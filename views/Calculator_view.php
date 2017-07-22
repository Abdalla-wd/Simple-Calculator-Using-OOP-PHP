<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<!-- IE compatability meta-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- First mobile meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>OOP based Calculator</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="calculator text-center">
				<h1>OOP Based Calculator</h1>
				<form action="index.php" method="post">
					<p>Please insert the numbers and choose the operation you want to perform. Then press "Calculate":</p>
					<table>
					<tr><td colspan="2"><input type="number" name="fnumber"></td></tr>
					<tr><td colspan="2"><input type="number" name="snumber"></td></tr>
					
					<tr>
						<td class="op"><input type="radio" name="operation" value="add"> Add</td>
						<td class="op"><input type="radio" name="operation" value="Substract"> Substract</td>
					</tr>
					<tr>
						<td class="op"><input type="radio" name="operation" value="multiply"> Multiply </td>
						<td class="op"><input type="radio" name="operation" value="divide"> Divide</td>
					</tr>
					<tr><td colspan="2"><input type="submit" value="calculate" class="btn btn-primary"></td></tr>
					<tr><td colspan="2"><div class="result">  

<?php echo $c->getresult(); ?>

</div></td></tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
