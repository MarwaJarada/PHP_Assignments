<?php 

	$countries=array("Palestine"=>"president1","Lebanon"=>"president2","America"=>"president3","Canada"=>"president3","China"=>"president4","Maxico"=>"president5",
		"Japan"=>"president6");
	for(reset($countries);$k=key($countries);next($countries)){
		echo "<br> $countries[$k]";
	}

////////////////////////////////////////////////


	$faculties=array("IT"=>array("dean"=>"Ahmed","highestAverage"=>100,"lowestAverage"=>75)
		,"Engineering"=>array("dean"=>"Mohammed","highestAverage"=>100,"lowestAverage"=>85)
		,"Law"=>array("dean"=>"Mahmood","highestAverage"=>100,"lowestAverage"=>80));

	echo("<br>");

	for (reset($faculties);$ke=key($faculties);next($faculties)) { 
		echo " <br> $ke : <br>";//IT
		for (reset($faculties[$ke]);$ke2=key($faculties[$ke]);next($faculties[$ke])) { 
		echo  $ke2, ":" , $faculties[$ke][$ke2] , ","  ;


	}}



	$stdGrads=array(array("programming2",91),array("discrete math",95),array("Digital design",90));  

?>

<table border="1">
		<thead>
			<tr>
				<td>Subject</td>
				<td>Mark</td>
			</tr>
		</thead>
		<tbody>			
			<?php
				$sum=0;
				$num=0;
				echo "<tr>";
				for ($i=0; $i <count($stdGrads) ; $i++) { 
					for ($z=0; $z <count($stdGrads) ; $z++) { 
						if ($z==1) {
							$sum+=$stdGrads[$i][$z];
							$num+=1;
						}	
						echo "<td>",$stdGrads[$i][$z];
				}
				echo "<tr>";
			}
			?>	
			</tr>	
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2" style="font-size: 50px;"><? echo $sum/$num ,"%"?></td>
		</tr>

	</tfoot>

</table>





