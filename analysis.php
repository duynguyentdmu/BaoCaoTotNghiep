<!DOCTYPE html>
<?php
require_once 'valid.php';
?>
<html lang = "eng">
<head>
    <title>HỆ THỐNG QUẢN LÝ THƯ VIỆN</title>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1" />
    


    
<!-- bootstrap tu them -->
 <!-- Bootstrap 3.3.7 -->
 <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- ket thuc bootstrap tu them -->





    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>
<body style = "background-color:#d3d3d3;"> <!-- mau nen phia sau trang web-->
<nav class = "navbar navbar-default navbar-fixed-top">
    <div class = "container-fluid">
        <div class = "navbar-header">
            <img src = "images/logo.png" width = "50px" height = "50px" />
            <h4 class = "navbar-text navbar-right">THÔNG TIN THƯ VIỆN TRƯỜNG THPT ABC</h4>
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
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Cài Đặt</a>
						<ul style = "list-style-type:none;">
							<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Đăng Xuất</a></li>
						</ul>
					</li>
				</ul>
    </div>
    <div class = "col-lg-1"></div>
    <div class = "col-lg-9 well" style = "margin-top:60px;">
        <!--<img src = "images/back2.jpg" height = "400px" width = "100%" /> -->
     <!-- ĐÂY LÀ KHU VỰC BẮT ĐẦU TEST DASBOARD -->
     
	<!-- dasdboard here -->

				
  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
                require_once 'connect.php';
                // xu ly sach
              $slsachtemp = $conn->query("SELECT count(book_id) FROM book") or die(mysqli_error());
              $slsach = $slsachtemp->fetch_array();
              $string = implode('|',$slsach);
            //    xu ly hoc sinh
            $slhstemp = $conn->query("SELECT count(student_id) FROM student") or die(mysqli_error());
            $slhs = $slhstemp->fetch_array();
            $stringslhs = implode('|',$slhs);
			// xu ly muon sach
			$slmtemp = $conn->query("SELECT count(borrow_id) FROM borrowing WHERE status='Borrowed'") or die(mysqli_error());
            $slm = $slmtemp->fetch_array();
            $stringslm = implode('|',$slm);
			// xu ly tra sach
			$slttemp = $conn->query("SELECT count(borrow_id) FROM borrowing WHERE status='Returned'") or die(mysqli_error());
            $slt = $slttemp->fetch_array();
            $stringslt = implode('|',$slt);



            ?>
              <h3><?php echo ($string[0])?></h3>

              <p>Sách</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="book.php" class="small-box-footer">Thông tin <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo ($stringslhs[0])?></h3>

              <p>Học sinh</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="student.php" class="small-box-footer">Thông tin <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo ($stringslm[0])?></h3>

              <p>Mượn sách</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="borrowing.php" class="small-box-footer">Thông tin <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo ($stringslt[0])?></h3>

              <p>Trả sách</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="returning.php" class="small-box-footer">Thông tin <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

 
    <!-- ĐÂY LÀ KHU VỰC KET THUC TEST DASBOARD -->
        </span>
      
       <tr>
    
        <table>
            <tr>
            <th></th>
            
            <th></th>
            </tr>

        </table>

        <th></th>
       </tr>

        <!-- End WOWSlider.com BODY section -->
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
</html>