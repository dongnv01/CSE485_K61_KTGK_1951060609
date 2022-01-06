<?php
include('../backend/config.php');
include('../template/header.php');

if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE monhoc set ten_mh='" . $_POST['name'] . "', sotinchi='" . $_POST['sotinchi'] . "', sotiet_lt='" . $_POST['sotiet_lt'] . "' ,sotiet_bt='" . $_POST['sotiet_bt'] . "',sotiet_thtn='" . $_POST['sotiet_thtn'] . "',sogio_tuhoc='" . $_POST['sogio_tuhoc'] . "' WHERE mamh='" . $_GET['mamh'] . "'");
    Header('location: http://localhost:81/CSE485_K61_KTGK_1951060609/');
} else {
}

?>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <a href="http://localhost:81/CSE485_K61_KTGK_1951060609" style="color:#fff"><i class="fas fa-arrow-left"></i> Back</a>
                <h2>Update</h2>
            </div>
        </div>
        <form name="frmUser" method="post" action="">
            <div><?php if (isset($message)) {
                        echo $message;
                    } ?>
            </div>
            <?php $result = mysqli_query($conn, "SELECT * FROM monhoc WHERE mamh='" . $_GET['mamh'] . "'");
            while ($row = mysqli_fetch_array($result)) {

            ?>
                <label for="rName" class="form-label">Tên Môn</label>
                <input type="text" class="form-control" id="name" name='name'>

                <div class="mb-3">
                    <label for="sotinchi" class="form-label">Số Tín Chỉ</label>
                    <input type="text" class="form-control" id="sotinchi" name='sotinchi'>
                </div>
                <div class="mb-3">
                    <label for="sotiet_lt" class="form-label">Số Tiết Lí Thuyết</label>
                    <input type="text" class="form-control" id="sotiet_lt" name="sotiet_lt">
                </div>
                <div class="mb-3">
                    <label for="sotiet_bt" class="form-label">Số Tiết Bài Tập</label>
                    <input type="text" class="form-control" id="sotiet_bt" name="sotiet_bt">
                </div>
                <div class="mb-3">
                    <label for="sotiet_thtn" class="form-label">Số tiết THTN</label>
                    <input type="number" class="form-control" id="sotiet_thtn" name="sotiet_thtn">
                </div>
                <div class="mb-3">
                    <label for="sogio_tuhoc" class="form-label">Số Giờ Tự Học</label>
                    <input type="text" class="form-control" id="sogio_tuhoc" name="sogio_tuhoc">
                </div>
    </div>
<?php
            };
?>
<input type="submit" class="btn btn-primary" name='save' value="Submit">
</form>
</div>
<?php
include('../template/header.php')

?>