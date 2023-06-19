<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/css/user/home-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="header"></div>

    <!-- home -->
    <section class="home">
        <div class="home-content">
            <h1><span style="color:#FFA841">PING</span> GROUP</h1>
            <h3>Leading in Information Technology</h3>
            <p>There is some overlap between stock/non-stock and for-profit/not-for-profit 
            in that not-for-profit corporations are nearly always non-stock as well. 
            A for-profit corporation is almost always a stock corporation, but some for-profit 
            corporations may choose to be non-stock.</p>
        </div>
    </section>

    <section class="home-thongbao">
        <!--heading-->
        <div class="thongbao-heading">
            <h2 onclick="document.location='index.php?thongbao'">Thông báo</h2>
            <h4>Thông báo từ tập đoàn</h4>
        </div>
        <div class="thongbao-content">
            <!--Thông báo 1-->
            <div class="thongbao-box">
                <div class="thongbao-img">
                    <img src="assets/images/thongbao/workfromhome-thongbao.jpg" alt="Work from home">
                </div>
                <div class="thongbao-text">
                    <span>20th April 2023</span>
                    <a href="index.php?tb&id=TB1" class="thongbao-title">Thông báo Work From Home từ ngày 22/04/2023</a>
                    <p>Trước những diễn biến khó lường của dịch bệnh COVID-19
                     và để đảm bảo an toàn cho toàn thể nhân viên, PING GROUP triển khai Work From Home.</p>
                    <a href="index.php?tb&id=TB1">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Thông báo 2-->
            <div class="thongbao-box">
                <div class="thongbao-img">
                    <img src="assets/images/thongbao/backtowork-thongbao.jpg" alt="Back to work">
                </div>
                <div class="thongbao-text">
                    <span>23rd April 2023</span>
                    <a href="index.php?tb&id=TB2" class="thongbao-title">Thông báo trở lại công ty từ ngày 25/04/2023</a>
                    <p>Do tình hình dịch bệnh COVID-19 cơ bản đã được kiểm soát, 
                    PING GROUP thông báo đến toàn thể nhân viên quay trở lại công ty làm việc</p>
                    <a href="index.php?tb&id=TB2">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Thông báo 3-->
            <div class="thongbao-box">
                <div class="thongbao-img">
                    <img src="assets/images/thongbao/hoithao-thongbao.jpg" alt="Hội thao">
                </div>
                <div class="thongbao-text">
                    <span>24th April 2023</span>
                    <a href="index.php?tb&id=TB3" class="thongbao-title">Thông báo tham gia Hội thao ngày 29/04/2023</a>
                    <p>Nhằm thúc đẩy phong trào thể dục thể thao, tinh thần rèn luyện sức khỏe của nhân viên,
                    PING GROUP thông báo tổ chức Hội thao doanh nghiệp </p>
                    <a href="index.php?tb&id=TB3">Read more  &#x2192;</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="home-bangtin">
        <!--heading-->
        <div class="bangtin-heading">
            <h2 onclick="document.location='/html/user/bangtin/bangtin.html'">Bảng tin</h2>
            <h4>PING GROUP's news</h4>
        </div>
        <div class="bangtin-content">
            <!--Bảng tin 1-->
            <div class="bangtin-box">
                <div class="bangtin-img">
                    <img src="assets/images/bangtin/abcgroup-bangtin.jpg" alt="ABC Group">
                </div>
                <div class="bangtin-text">
                    <span>23rd April 2023</span>
                    <a href="index.php?bt&id=BT1" class="bangtin-title">Gặp gỡ doanh nghiệp ABC Group</a>
                    <p>Vào ngày 22/04/2023 vừa qua, PING GROUP đã có dịp gặp gỡ và trao đổi với ABC GROUP.</p>
                    <a href="index.php?bt&id=BT1">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Bảng tin 2-->
            <div class="bangtin-box">
                <div class="bangtin-img">
                    <img src="assets/images/bangtin/seminar-bangtin.jpg" alt="Seminar 25/04/2023">
                </div>
                <div class="bangtin-text">
                    <span>27th April 2023</span>
                    <a href="index.php?bt&id=BT2" class="bangtin-title">Tổ chức thành công Seminar 'AI và ứng dụng'</a>
                    <p>Ngày 25/04/2023 vừa qua, PING GROUP đã tổ chức thành công Seminar 'AI và ứng dụng'.
                    Buổi seminar mang tới những thông tin, kiến thức bổ ích và mới nhất về AI 
                    cũng như việc sử dụng AI vào các lĩnh vực khác nhau trong thời đại số.</p>
                    <a href="index.php?bt&id=BT2">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Bảng tin 3-->
            <div class="bangtin-box">
                <div class="bangtin-img">
                    <img src="assets/images/bangtin/hoithao-bangtin.jpg" alt="Hội thao">
                </div>
                <div class="bangtin-text">
                    <span>30th April 2023</span>
                    <a href="index.php?bt&id=BT3" class="bangtin-title">Hội thao doanh nghiệp vì sức khỏe ngày 29/04/2023</a>
                    <p>Hội thao doanh nghiệp năm 2023 mang đến không khí vui vẻ, nhiệt huyết, năng động
                    cho toàn thể nhân viên PING GROUP.</p>
                    <a href="index.php?bt&id=BT3">Read more  &#x2192;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-truyenthong">
        <!--heading-->
        <div class="truyenthong-heading">
            <h2 onclick="document.location='index.php?truyenthong'">Truyền thông</h2>
            <h4>Các thông tin truyền thông nội bộ</h4>
        </div>
        <div class="truyenthong-content">
            <!--Truyền thông 1-->
            <div class="truyenthong-box">
                <div class="truyenthong-img">
                    <img src="assets/images/truyenthong/birthday-truyenthong.jpg" alt="Sinh nhật">
                </div>
                <div class="truyenthong-text">
                    <span>16th February 2023</span>
                    <a href="index.php?tt&id=TT2" class="truyenthong-title">Chúc mừng sinh nhật Adam Smith</a>
                    <p>Mừng tuổi mới Adam Smith.
                    Chúc bạn nhiều sức khỏe và có thật nhiều niềm vui trong cuộc sống.
                    </p>
                    <a href="index.php?tt&id=TT2">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Truyền thông 2-->
            <div class="truyenthong-box">
                <div class="truyenthong-img">
                    <img src="assets/images/truyenthong/promotion-truyenthong.jpg" alt="Vị trí mới">
                </div>
                <div class="truyenthong-text">
                    <span>30th April 2023</span>
                    <a href="index.php?tt&id=TT2" class="truyenthong-title">Chúc mừng Jolie Keels lên vị trí mới</a>
                    <p>Chúc mừng Jolie Keels vì những đóng góp to lớn cho sự phát triển của PING GROUP.
                    Mong bạn sẽ tiếp tục phát huy.</p>
                    <a href="index.php?tt&id=TT2">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Truyền thông 3-->
            <div class="truyenthong-box">
                <div class="truyenthong-img">
                    <img src="assets/images/truyenthong/award-truyenthong.jpg" alt="Khen thưởng">
                </div>
                <div class="truyenthong-text">
                    <span>1st May 2023</span>
                    <a href="index.php?tt&id=TT3" class="truyenthong-title">Nhân viên xuất sắc nhất tháng 04/2023 - Brittney Hooper</a>
                    <p>Khen thưởng nhân viên xuất sắc nhất tháng 04 năm 2023 - Brittney Hooper</p>
                    <a href="index.php?tt&id=TT3">Read more  &#x2192;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-thuvien">
        <!--heading-->
        <div class="thuvien-heading">
            <h2 onclick="document.location='/html/user/thuvien/thuvien.html'">Thư viện</h2>
            <h4>Thư viện tài liệu (quy chế, quy định, mẫu biểu)</h4>
        </div>
        <div class="thuvien-content">
            <!--Thư viện 1-->
            <div class="thuvien-box">
                <div class="thuvien-img">
                    <img src="assets/images/thuvien/quydinh-thuvien.png" alt="Quy định">
                </div>
                <div class="thuvien-text">
                    <span>23rd August 2022</span>
                    <a href="index.php?tv&id=TL1" class="thuvien-title">Quy định nội quy PING GROUP</a>
                    <p>Tác phong, đạo đức tại nơi làm việc.
                    An toàn lao động, vệ sinh lao động tại nơi làm việc.
                    Thời giờ làm việc, thời giờ nghỉ ngơi.
                    Các hành vi vi phạm nội quy công ty, hình thức xử lý kỷ luật lao động và trách nhiệm vật chất.
                    Bảo vệ tài sản, bí mật công nghệ, bí mật kinh doanh, sở hữu trí tuệ của người sử dụng lao động.</p>
                    <a href="index.php?tv&id=TL1">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Thư viện 2-->
            <div class="thuvien-box">
                <div class="thuvien-img">
                    <img src="assets/images/thuvien/quyche-thuvien.png" alt="Quy chế">
                </div>
                <div class="thuvien-text">
                    <span>23rd August 2022</span>
                    <a href="index.php?tv&id=TL2" class="thuvien-title">Quy chế dân chủ cơ sở</a>
                    <p>Ban hành quy chế thực hiện dân chủ trong hoạt động của PING GROUP.</p>
                    <a href="index.php?tv&id=TL2">Read more  &#x2192;</a>
                </div>
            </div>
            <!--Thư viện 3-->
            <div class="thuvien-box">
                <div class="thuvien-img">
                    <img src="assets/images/thuvien/maubieu-thuvien.png" alt="Mẫu biểu">
                </div>
                <div class="thuvien-text">
                    <span>23rd August 2022</span>
                    <a href="index.php?tv&id=TL3" class="thuvien-title">Mẫu quyết định bổ nhiệm chức vụ</a>
                    <p>Mẫu quyết định bổ nhiệm là mẫu với các nội dung và thông tin 
                    để bổ nhiệm chức vụ với các điều khoản liên quan đến chức danh của cá nhân đó.</p>
                    <a href="index.php?tv&id=TL3">Read more  &#x2192;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-cocautochuc">
        <div class="cocautochuc-box">
            <img src="assets/images/home/cocautochuc-home.jpg" alt="Cơ cấu tổ chức">
            <div class="cocautochuc-text">
                <h2 onclick="document.location='index.php?cocautochuc'">Cơ cấu tổ chức</h2>
                <h3>Các bộ phận chính trong tập đoàn</h3>
                <p>Những nhân tố quan trọng giúp tập đoàn quản lý và điều hành công việc hiệu quả, 
                từ đó tạo điều kiện cho sự phát triển vượt trội của PING GROUP.</p>
                <button onclick="document.location='index.php?cocautochuc'" type="button">Tìm hiểu thêm</button>
            </div>
        </div>
    </section>

    <div class="footer"></div>

    <script src="/js/user/activate-header-footer.js"></script>
</body>
</html>