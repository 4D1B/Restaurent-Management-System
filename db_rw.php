<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","record");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($$conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	//print_r($arr);
	return json_encode($arr);
}
?>