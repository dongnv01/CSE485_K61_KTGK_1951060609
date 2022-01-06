<?php
include('../backend/config.php');
$sql = "DELETE FROM monhoc WHERE mamh='" . $_GET["mamh"] . "'";
if (mysqli_query($conn, $sql)) {
    Header('location: http://localhost:81/CSE485_K61_KTGK_1951060609/');
} else {
    Header('location: http://localhost:81/CSE485_K61_KTGK_1951060609/error.php');
}
mysqli_close($conn);

?>