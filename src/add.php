<?php
include ('../backend/config.php');
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $sotinchi = $_POST['sotinchi'];
	 $sotiet_lt = $_POST['sotiet_lt'];
	 $sotiet_bt = $_POST['sotiet_bt'];
	 $sotiet_thtn = $_POST['sotiet_thtn'];
	 $sogio_tuhoc = $_POST['sogio_tuhoc'];

	 $sql = "INSERT INTO monhoc (ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc)
	 VALUES ('$name','$sotiet_bt','$sotinchi','$sotiet_lt','$date','$sogio_tuhoc')";
	 if (mysqli_query($conn, $sql)) {
		Header('location: http://localhost:81/CSE485_K61_KTGK_1951060609/');
	 } else {
    Header('location: http://localhost:81/CSE485_K61_KTGK_1951060609/error.php');

	 }
	 mysqli_close($conn);
}
?>