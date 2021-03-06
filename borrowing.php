<!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
	<head>
		<title>HỆ THỐNG QUẢN LÝ THƯ VIỆN THPT ABC</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/chosen.min.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
	</head>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">QUẢN LÝ MƯỢN SÁCH</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid">
					<img src = "images/user.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php"><i class = "glyphicon glyphicon-home"></i> Trang Chủ</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "information.php"><i class = "glyphicon glyphicon-home"></i> Giới Thiệu</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "analysis.php"><i class = "glyphicon glyphicon-home"></i> Thống Kê</a></li> 
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "admin.php"><i class = "glyphicon glyphicon-tasks"></i> Người Quản Lý</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "student.php"><i class = "glyphicon glyphicon-tasks"></i> Học Sinh́</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i> QL Sách</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "borrowing.php"><i class = "glyphicon glyphicon-book"></i> Mượn Sách</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "returning.php"><i class = "glyphicon glyphicon-book"></i> Trả Sách</a></li>
					</li>
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Cài Đặt</a>
						<ul style = "list-style-type:none;">
							<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Đăng Xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">Quản lý mượn sách</div>
				<form method = "POST" action = "borrow.php" enctype = "multipart/form-data">
					<div class = "form-group pull-left">	
						<label>Tên học sinh:</label>
						<br />
						<select name = "student_no" id = "student">
							<option value = "" selected = "selected" disabled = "disabled">Chọn học sinh</option>
							<?php
								$qborrow = $conn->query("SELECT * FROM `student` ORDER BY `lastname`") or die(mysqli_error());
								while($fborrow = $qborrow->fetch_array()){
							?>
								<option value = "<?php echo $fborrow['student_no']?>"><?php echo $fborrow['firstname']." ".$fborrow['lastname']?></option>
							<?php
								}
							?>
						</select>
						<!-- <p><br/>Số lượng 	<input type="text" id="txtsoluongsach" name="txtsoluongsach"  /></p> -->
						<?php
								$slsach= "txtsoluongsach";
							?>


					</div>
					<div class = "form-group pull-right">	
						<button name = "save_borrow" class = "btn btn-primary"><span class = "glyphicon glyphicon-thumbs-up"></span> Xác Nhận Mượn</button>
					</div>
					<table id = "table" class = "table table-bordered">
						<thead class = "alert-success">
							<tr>
								<th>Chọn sách</th>
								<th>Mã sách</th>
								<th>Tiêu đề</th>
								<th>Thể loại</th>
								<th>Tác giả</th>
								<th>Ngày xuất bản</th>
								<th>Số lượng</th>
								<th>Còn lại</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$q_book = $conn->query("SELECT * FROM `book`") or die(mysqli_error());
								while($f_book = $q_book->fetch_array()){
								$q_borrow = $conn->query("SELECT SUM(qty) as total FROM `borrowing` WHERE `book_id` = '$f_book[book_id]' && `status` = 'Borrowed'") or die(mysqli_error());
								$new_qty = $q_borrow->fetch_array();
								$total = $f_book['qty'] - $new_qty['total'];
							?> 
							<tr>
								<td>
									<?php
										if($total == 0){
											echo "<center><label class = 'text-danger'>Không có sẵn</label></center>";
										}else{
											echo '<input type = "hidden" name = "book_id[]" value = "'.$f_book['book_id'].'"><center><input type = "checkbox" name = "selector[]" value = "1"></center>';
										}
									?>
								</td>
								<td><?php echo $f_book['book_id']?></td>
								<td><?php echo $f_book['book_title']?></td>
								<td><?php echo $f_book['book_category']?></td>
								<td><?php echo $f_book['book_author']?></td>
								<td><?php echo date("d-m-Y", strtotime($f_book['date_publish']))?></td>
								<td><?php echo $f_book['qty']?></td>
								<td><?php echo $total?></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
                <label class = "navbar-text pull-right">HỆ THỐNG QUẢN LÝ THƯ VIỆN THPT ABC</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script src = "js/chosen.jquery.min.js"></script>	
	<script type = "text/javascript">
		$(document).ready(function(){
			$("#student").chosen({ width:"auto" });	
		})
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$("#table").DataTable();
		});
	</script>
</html>