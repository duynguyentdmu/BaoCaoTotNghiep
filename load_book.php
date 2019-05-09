<?php
	require_once 'connect.php';
	$q_book = $conn->query("SELECT * FROM `book` WHERE `book_id` = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">
	<form method = "POST" action = "edit_book_query.php?book_id=<?php echo $f_book['book_id']?>" enctype = "multipart/form-data">
		<div class = "form-group">
			<label>Tiêu đề:</label>
			<input type = "text" value = "<?php echo $f_book['book_title']?>" name = "book_title" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Mô tả:</label>
			<input type = "text" value = "<?php echo $f_book['book_description']?>" name = "book_desc" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Thể loại:</label>
			<input type = "text" name = "book_category" value = "<?php echo $f_book['book_category']?>" class = "form-control" required = "required"/>
		</div>
		<div class = "form-group">
			<label>Tác giả:</label>
			<input type = "text" name = "book_author" value = "<?php echo $f_book['book_author']?>" class = "form-control" required = "required" />
		</div>
		<div class = "form-group">
			<label>Ngày xuất bản:</label>
			<input type = "date" name = "date_publish" value = "<?php echo $f_book['date_publish']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Số lượng:</label>
			<input type = "number" min = "0" value = "<?php echo $f_book['qty']?>" name = "qty" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<button name = "edit_book" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span> Lưu thay đổi</button>
		</div>
	</form>		
</div>