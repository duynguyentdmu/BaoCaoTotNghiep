<!DOCTYPE html>
<?php 
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location:home.php');
	}
?>
<html lang = "eng">
	<head>
		<title>HỆ THỐNG QUẢN LÝ THƯ VIỆN THPT ABC</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />

		<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->

	</head>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">HỆ THỐNG QUẢN LÝ THƯ VIỆN THPT ABC</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<div class = "col-lg-3 well">
				<br />
				<br />
				<h4>Đăng Nhập</h4>
				<hr style = "border:1px solid #d3d3d3; width:100%;" />
				<form enctype = "multipart/form-data">	
					<div id = "username_warning" class = "form-group">
						<label class = "control-label">Tài khoản:</label>
						<input type = "text" class = "form-control" id = "username"/>
					</div>
					<div id = "password_warning" class = "form-group">
						<label class = "control-label">Mật khẩu:</label>
						<input type = "password" class = "form-control" id = "password"/>
					</div>
					<br />
					<div class = "form-group">
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-save"></span> Đăng Nhập</button>
					</div>
				</form>	
				<div id = "result"></div>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-8 well">
				<!-- <img src = "images/back.jpg" height = "550px" width = "100%" /> -->

				<!-- Start WOWSlider.com BODY section -->
                <!-- hoat anh  -->
                <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="data1/images/126749largelibrarybackground1920x1080.jpg" alt="" title="" id="wows1_0"/></li>
                            <li><a href="http://wowslider.net"><img src="data1/images/20170509_eng_library_dja_012_3.jpg" alt="image slider" title="" id="wows1_1"/></a></li>
                            <li><img src="data1/images/photo1524995997946a1c2e315a42f.jpg" alt="" title="" id="wows1_2"/></li>
                        </ul></div>
                    <div class="ws_bullets"><div>
                            <a href="#" title=""><span><img src="data1/tooltips/126749largelibrarybackground1920x1080.jpg" alt=""/>1</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/20170509_eng_library_dja_012_3.jpg" alt=""/>2</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/photo1524995997946a1c2e315a42f.jpg" alt=""/>3</span></a>
                        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net"></a> </div>
                    <div class="ws_shadow"></div>
                </div>
                <script type="text/javascript" src="engine1/wowslider.js"></script>
                <script type="text/javascript" src="engine1/script.js"></script>
                <!-- End WOWSlider.com BODY section -->
			</div>
		</div>
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right">Hệ thống quản lý thư viện THPT ABC</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>