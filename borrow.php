<?php
	require_once 'connect.php';
	if(!ISSET($_POST['student_no'])){	
		echo '
			<script type = "text/javascript">
				alert("Chọn tên học sinh trước");
				window.location = "borrowing.php";
			</script>
		';
	}else{
		if(!ISSET($_POST['selector'])){
			echo '
				<script type = "text/javascript">
					alert("Chọn ít nhất một cuốn sách!");
					window.location = "borrowing.php";
				</script>
			';
		}else{
			foreach($_POST['selector'] as $key=>$value){
				$book_qty = $value;
				$student_no = $_POST['student_no'];
				$book_id = $_POST['book_id'][$key];
				$date = date("Y-m-d", strtotime("+8 HOURS"));
				$conn->query("INSERT INTO `borrowing` VALUES('', '$book_id', '$student_no', '$book_qty', '$date', 'Borrowed')") or die(mysqli_error());
				echo '
					<script type = "text/javascript">
						alert("Mượn thành công!");
						window.location = "borrowing.php";
					</script>
				';
			}
		}	
	}	