<!-- database chapter , Question 1-->

<?php
if (isset($_COOKIE['name'])) { 
	 $mtime=$_COOKIE['time'];
	 $mtime=time()-$mtime;
	echo "Welcome ", $_COOKIE['name']; 
	echo " time : $mtime";
	$_COOKIE['count']=$_COOKIE['count']+1;
	setcookie("count",$_COOKIE['count']);
	echo $_COOKIE['count'];


}else{
	setcookie("name"," Marwa"); // when user open the page
	setcookie("time",time());
	setcookie("count",1);
}
	

?>