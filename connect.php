<?php
	$conn = new mysqli('localhost', 'root', '0562324', 'db_ls') or die(mysqli_error());
	if(!$conn){
		die("Lỗi nghiêm trọng: Không thể kết nối!");
	}