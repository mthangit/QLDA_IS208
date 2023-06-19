<?php global $user;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Liên lạc - PING GROUP</title> -->
    <link rel="stylesheet" href="assets/css/user/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img onclick="document.location='/html/user/home.html'" class="company-logo" src="assets/images/logo/logo-with-text.png" alt="Company Logo">
        </div>
        <!-- navigation bar -->
            <nav class="navigation-bar">
                <a href="index.php">Home</a>
                <a href="index.php?thongbao">Thông báo</a>
                <a href="index.php?bangtin">Bảng tin</a>
                <a href="index.php?truyenthong">Truyền thông</a>
                <a href="index.php?thuvien">Thư viện</a>
                <a href="index.php?cocautochuc">Cơ cấu tổ chức</a>
                <a href="index.php?yeucauliendonvi">Yêu cầu liên đơn vị</a>
                <a href="index.php?lichphonghop">Lịch phòng họp</a>
                <a href="?u=<?=$user['username']?>">Liên lạc</a>
                <a href="?u=<?=$user['username']?>">Tài khoản</a>
            </nav>
    </header>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
