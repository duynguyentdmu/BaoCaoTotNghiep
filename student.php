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
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
	</head>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">QUẢN LÝ HỌC SINH</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid" style = "word-wrap:break-word;">
					<img src = "images/user.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php"><i class = "glyphicon glyphicon-home"></i> Trang Chủ</a></li>
                    <li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "information.php"><i class = "glyphicon glyphicon-home"></i> Giới Thiệu</a></li>
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
				<div class = "alert alert-info">Danh sách học sinh</div>
					<button id = "add_student" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Thêm</button>
					<button id = "show_student" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Quay lại</button>
					<br />
					<br />
					<div id = "student_table">
						<table id = "table" class = "table table-bordered">
							<thead class = "alert-success">
								<tr>
									<th>Mã học sinh</th>
									<th>Họ</th>
									<th>Tên đệm</th>
									<th>Tên</th>
									<th>Năm học</th>
									<th>Lớp</th>
									<th>Thao tác</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$qstudent = $conn->query("SELECT * FROM `student`") or die(mysqli_error());
									while($fstudent = $qstudent->fetch_array()){
								?>
								<tr>
									<td><?php echo $fstudent['student_no']?></td>
									<td><?php echo $fstudent['firstname']?></td>
									<td><?php echo $fstudent['middlename']?></td>
									<td><?php echo $fstudent['lastname']?></td>
									<td><?php echo $fstudent['course']?></td>
									<td><?php echo $fstudent['section']?></td>
									<td><a value = "<?php echo $fstudent['student_no']?>" class = "btn btn-danger delstudent_id"><span class = "glyphicon glyphicon-remove"></span> Xóa</a>
                                        <a class = "btn btn-warning estudent_id" value = "<?php echo $fstudent['student_no']?>"><span class = "glyphicon glyphicon-edit"></span> Sửa</a></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div id = "edit_form"></div>
					<div id = "student_form" style = "display:none;">
						<div class = "col-lg-3"></div>
						<div class = "col-lg-6">
							<form method = "POST" action = "save_student_query.php" enctype = "multipart/form-data">	
								<div class = "form-group">	
									<label>Mã học sinh:</label>
									<input type = "text" name = "student_no" required = "required" class = "form-control" />
								</div>	
								<div class = "form-group">	
									<label>Họ:</label>
									<input type = "text" name = "firstname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">	
									<label>Tên đệm:</label>
									<input type = "text" name = "middlename" placeholder = "(Không bắt buộc)" class = "form-control" />
								</div>	
								<div class = "form-group">	
									<label>Tên:</label>
									<input type = "text" required = "required" name = "lastname" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Khóa học:</label>
									<input type = "text" required = "required" name = "course" class = "form-control" />
								</div>	
								<div class = "form-group">	
									<label>Năm & Phần:</label>
									<input type = "text" maxlength = "12" name = "section" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">	
									<button class = "btn btn-primary" name = "save_student"><span class = "glyphicon glyphicon-save"></span> Lưu</button>
								</div>
							</form>		
						</div>	
					</div>
			</div>
		</div>
		<br />
		<br />
		<br />
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
                <label class = "navbar-text pull-right">phần chân trang nằm trong home.php</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#add_student').click(function(){
				$(this).hide();
				$('#show_student').show();
				$('#student_table').slideUp();
				$('#student_form').slideDown();
				$('#show_student').click(function(){
					$(this).hide();
					$('#add_student').show();
					$('#student_table').slideDown();
					$('#student_form').slideUp();
				});
			});
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$result = $('<center><label>Đang Xóa ...</label></center>');
			$('.delstudent_id').click(function(){
				$student_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delstudent_id').attr('disabled', 'disabled');
				$('.estudent_id').attr('disabled', 'disabled');
				setTimeout(function(){
					window.location = 'delete_student.php?student_id=' + $student_id;
				}, 1000);
			});
			$('.estudent_id').click(function(){
				$student_id = $(this).attr('value');
				$('#show_student').show();
				$('#show_student').click(function(){
					$(this).hide();
					$('#edit_form').empty();
					$('#student_table').show();
					$('#add_student').show();
				});
				$('#student_table').fadeOut();
				$('#add_student').hide();
				$('#edit_form').load('load_student.php?student_id=' + $student_id);
			});
		});
	</script>
</html>