<?php


$cars = array( "car1" => array("make" => "Toyota", "color" => "Green", "year" => 1999,"engine_cc" => 1998), 
"car2" => array("make" => "BMW", "color" => "RED", "year" => 2005,"engine_cc" => 2400)); 




$carName = $_POST['carName'];

	for (reset($cars);$key=key($cars);next($cars)) { 
	for (reset($cars[$key]);$key2=key($cars[$key]);next($cars[$key])) { 
			if ($cars[$key][$key2]==$carName){
				echo "<br>This Car founded :<br>";
				for (reset($cars[$key]);$key3=key($cars[$key]);next($cars[$key])) { 
					echo $cars[$key][$key3],"<br>";
				}
			
			}
	}
}






?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<table border="1">
		<thead>
			<tr>
				<th>Make</th>
				<th>Color</th>
				<th>Year</th>
				<th>Engine_cc</th>
			</tr>
		</thead>
		<tbody>
			<?php
			reset($cars);
			while ($k=key($cars)) {
				echo "<tr>";
				reset($cars[$k]);
				while ($k2=key($cars[$k])) {
					echo "<td>",$cars[$k][$k2];
					next($cars[$k]);
				}
				next($cars);
			}
				?>

		</tbody>
	<form method="post" action="Ass_04.php">
		<label>Enter car name To search :</label>
		<input type="text" name="carName">
		<input type="submit" name="submitBtn">
	</form>
		</tbody>


	</table>

</body>
</html>