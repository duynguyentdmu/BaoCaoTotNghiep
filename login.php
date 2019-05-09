<?php
include('dbcon.php');
if (isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$login_query=mysqli_query(mysqli_connect("localhost","root","0562324","db_ls"),"select * from admin where username='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
if ($count > 0){
session_start();
$_SESSION['id']=$row['admin_id'];
echo "<script>alert('Successfully Login!'); window.location='home.php'</script>";
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 1; URL=$url");
}else{
	echo "<script>alert('Sai tài khoản hoặc mật khẩu, vui lòng thử lại'); window.location='home.php'</script>";
?>
<?php } 
}
?>