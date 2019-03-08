<?php
$states = array("Ohio", "Florida", "Massachusetts", "Montana"); 

rsort($states);
for ($i=0; $i <4 ; $i++) { 
	# code...
	echo "$states[$i]";
}

$name="Marwa";
$age=19;
$average=90;
echo "Myname is $name , My Age : $age <br>";
printf("My name is %s , My age is %d",$name,$age);
print("<br>");
print("Hi".$name);


if ($average>=90) {
	echo "$name , Excellent";
}elseif ($average>=80) {
	echo "$name , Very Good";
}elseif ($average>=70) {
	echo "$name , Good";
}

$myArray= array(1,2,3,4,5,6);
$myArray2=array("Name"=>"Marwa","Age"=>19 );
for ($i=0; $i <count($myArray) ; $i++) {
	echo "$myArray[$i] <br>"; 
	# code...
}

foreach($myArray2 as $k=>$v){
	echo "$k : $v <br>";
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<select>
		<?php
			for ($i=1990; $i < 2000; $i++) { 
				echo "<option>
				$i";
			}
		?>
	</select>
</body>
</html>