<?php
include 'database.php';

if(isset($_POST['save']))
{	 
	 	$name=$_POST['name'];
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$bgrp=$_POST['bgr'];
		$phone=$_POST['phone'];
		$date=$_POST['date'];

		$sql = "INSERT INTO monhoc(ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$name','$sex','$age','$bgrp','$date','$phone')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$age=$_POST['age'];
		$bgrp=$_POST['bgr'];
		$phone=$_POST['phone'];
		$date=$_POST['date'];

		$sql = "INSERT INTO monhoc(ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$name','$sex','$age','$bgrp','$date','$phone')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "UPDATE 'crud' SET 'name'='$name','email'='$email','phone'='$phone','city'='$city' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>