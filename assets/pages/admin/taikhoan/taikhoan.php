<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
    <link rel="stylesheet" href="assets/css/admin/template-style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
    <?php include __DIR__ . '/../sidebar.php'; ?>
    </div>
    <section id="content">
        <div class="nav">
        <?php include __DIR__ . '/../nav.php'; ?>
        </div>

        <div class="table">
            <div class="divider">Danh sách tài khoản</div>
            <br>
            <table id="detail">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên nhân viên</th>
                        <th>Email</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>

                <tbody>
                    
                </tbody>
            </table>
        </div>
    </section>


    <script src="assets/js/admin/activate-sidebar-nav.js"></script>
    <script src="assets/js/admin/account.js"></script>
</body>
</html>