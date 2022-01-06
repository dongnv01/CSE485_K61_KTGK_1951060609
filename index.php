<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Blood</h2>
					</div>
					<div class="col-sm-6">
						<a href="add.php" class="btn btn-success">Add</a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Mã Môn</th>
                        <th>Tên Môn</th>
                        <th>Số Tín Chỉ</th>
						<th>Số Tiết Lí thuyết</th>
						<th>Số Tiết bài Tập</th>
						<th>Số tiết Thực hành trên Lớp</th>	
                        <th>Số Giờ Tự Học</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM monhoc");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["mamh"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ten_mh"]; ?></td>
					<td><?php echo $row["sotinchi"]; ?></td>
					<td><?php echo $row["sotiet_lt"]; ?></td>
					<td><?php echo $row["sotiet_bt"]; ?></td>					
					<td><?php echo $row["sotiet_thtn"]; ?></td>
					<td><?php echo $row["sogio_tuhoc"]; ?></td>
					<td><a href="src/update.php?mamh=<?php echo $row["mamh"]; ?>">Update</a></td>
					<td><a href="src/delete.php?mamh=<?php echo $row["mamh"]; ?>">Delete</a></td>

				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
        <div class="copyrights ">2022-06-01</div>
    </div>
<?php 
include('template/footer.php')
?>
                          		                            