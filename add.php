<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost:81/CSE485_K61_KTGK_1951060609" style="color:#fff"><i class="fas fa-arrow-left"></i></a> <h2>Add</h2>
                </div>
            </div>
        <form method="post" action="src/add.php">
            <div class="mb-3">
            <label for="rName" class="form-label">Tên Môn</label>
            <input type="text" class="form-control" id="name" name='name'>
            </div>
            <div class="mb-3">
            <label for="sotinchi" class="form-label">Số Tín Chỉ</label>
            <input type="number" class="form-control" id="sotinchi" name="sotinchi">
            </div>
            <div class="mb-3">
            <label for="sotiet_lt" class="form-label">Số tiết Lí thuyết</label>
            <input type="text" class="form-control" id="sotiet_lt" name='sotiet_lt'>
            </div>
            <div class="mb-3">
            <label for="sotiet_bt" class="form-label">Số Tiết Bài Tập</label>
            <input type="text" class="form-control" id="sotiet_bt" name="sotiet_bt" >
            </div>
            <div class="mb-3">
            <label for="sotiet_thtn" class="form-label">Số tiết Thực hành trên Lớp</label>
            <input type="text" class="form-control" id="sotiet_thtn" name="sotiet_thtn" >
            </div>
            <div class="mb-3">
            <label for="sogio_tuhoc" class="form-label">Số Giờ Tự Học</label>
            <input type="text" class="form-control" id="sogio_tuhoc" name="sogio_tuhoc" >
            </div>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>
    </div>
</div>
<?php 
include('template/footer.php')
?>
