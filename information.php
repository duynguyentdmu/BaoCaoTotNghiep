<!DOCTYPE html>
<?php
require_once 'valid.php';
?>
<html lang = "eng">
<head>
    <title>HỆ THỐNG QUẢN LÝ THƯ VIỆN</title>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1" />
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
        <!--<img src = "images/back2.jpg" height = "400px" width = "100%" /> -->
        <!-- Start WOWSlider.com BODY section -->


                <p><h2>Thư viện là kho tàng chứa tất cả của cải tinh thần của loài người.
        và Môngtexkiơ đã nói Thích đọc sách tức là biết đánh đổi những giờ phút buồn tẻ không thể tránh được trong cuộc đời lấy những giờ phút lý thú. Sách là một kho tàng huyền bí làm kích thích sự tò mò của biết bao người. Sách là những trang giấy ghi lại các sự kiện đời sống, các phát minh khoa học, những diễn biến lịch sử, các kiến thức tự nhiên, các tác phẩm văn học và còn nhiều vấn đề khác của nhân loại, sách còn là một phương tiện giúp chúng ta rèn luyện nhân cách con người.

        Tuy nhiên, trước thực trạng về vấn đề “văn hóa đọc” đang đi xuống, nên đã từ lâu, nhiều loại sách, nhiều đầu sách chưa đến được với người đọc cũng như nhiều người chưa tìm đến với sách, chưa tìm thấy nguồn vui, sự tìm tòi khám phá, những kinh nghiệm cũng như những cảm xúc sâu sắc mà sách mang lại. Nhân buổi chào cờ sáng hôm nay em xin phép được giới thiệu đến toàn thể giáo viên, nhân viên cùng các bạn học sinh về thư viện trường của chúng ta. Lời đầu tiên cho phép em gửi đến quý giáo viên, nhân viên lời chúc sức khoẻ, hạnh phúc và chúc cho các bạn học sinh một năm học mới gặt hái được nhiều thành công.

        Như chúng ta đều biết, thư viện là trung tâm sinh hoạt văn hóa, có ý nghĩa và vai trò rất quan trọng, là bộ phận không thể thiếu trong nhà trường. Thư viện trường THPT Nguyễn Trãi có tổng diện tích 120m2,  gồm 2 phòng đọc và một phòng kho. Phòng đọc dành cho giáo viên rộng khoảng 48m2, được bố trí bàn ghế, máy điều hòa, có khoảng 10 máy vi tính, trang trí khang trang, sạch đẹp.

        Phòng đọc sách dành cho học sinh rộng khoảng 48m2, mới được trang bị 3 máy vi tính có nối internet cho học sinh sử dụng, bàn ghế được trang bị đầy đủ tiện nghi, quạt điện đảm bảo ánh sáng, thoáng mát .

        Về vốn sách hiện có của thư viện chúng ta là gần 10 nghìn bản sách. Ngoài sách giáo khoa và sách nghiệp vụ, thư viện còn có gần 8.000 đầu sách tham khảo với nội dung phong phú, hấp dẫn,  phục vụ tốt cho công tác dạy và học. Từ sách từ điển cho đến các loại sách phục vụ các môn học khác như: Toán, lý, hóa, văn, sử, địa, tiếng Anh…Ngoài sách bài tập cơ bản, thư viện chúng ta còn có sách bài tập nâng cao, sách dành cho học sinh luyện thi Olympic. Riêng lĩnh vực văn học ngoài các tác phẩm văn học, còn có sách những bài văn mẫu dung cho các khối lớp, những cuốn sách hướng dẫn chúng ta làm văn nghị luận xã hội, hay phân tích chứng minh, bình luận một vấn đề nào đó.

        Ngoài ra Thư viện còn xây dựng được các tủ sách chuyên đề như:

        - Tủ sách pháp luật với nhiều tài liệu về Luật được cập nhật thường xuyên phục vụ công tác phổ biến pháp luật, giáo dục pháp luật tại trường.

        - Tủ sách đạo đức: gồm hơn 200 đầu sách, hỗ trợ tốt cho cuộc Vận động “ học tập và làm theo tấm gương đạo đức Hồ Chí Minh”, sách hạt giống tâm hồn, giá trị cuộc sống giúp học sinh định hướng giáo dục thẩm mỹ, rèn luyện nhân cách cho học sinh.

        Đối với các bạn học sinh muốn tham gia đọc sách ở thư viện hình thức cũng đơn giản thôi, các bạn hãy nộp một tấm hình 3x4 tại thư viện là chúng ta có thẻ để đọc sách rồi. Các bạn có thể đến thư viện đọc sách tại chỗ hoặc mượn về nhà.

        Thư viện trường THPT Nguyễn Trãi luôn luôn là điểm đến của nhiều giáo viên và học sinh trong giờ nghỉ, giờ chơi. Rất hân hạnh được đón tiếp quý giáo viên, nhân viên và các bạn học sinh</h2></p>
        </span>
      
       <tr>
    
        <table>
            <tr>
            <th></th>
            <th> <th><img src="images/ntlogo.png"></th></th>
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