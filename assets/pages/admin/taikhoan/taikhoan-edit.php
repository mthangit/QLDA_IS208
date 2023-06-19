<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tài khoản</title>
    <link rel="stylesheet" href="assets/css/admin/article-edit-style.css">
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

        <div class="content">
            <div class="title">Chi tiết tài khoản</div>

            <div class="container">
                <form class="form" id="form">
                    <div id="avatar">
                        <label class="label">Avatar</label>
                        <br>
                    </div>
                    <div>
                        <label class="label">ID</label>
                        <input type="text" id="userid" class="articleid" disabled>
                    </div>
                    <div>
                        <label class="label">Name</label>
                        <input type="text" id="username" class="articlename">
                    </div>
                    <div>
                        <label class="label">Date of birth</label>
                        <input type="text" id="userdob" class="articledob">
                    </div>
                    <div>
                        <label class="label">Citizen ID</label>
                        <input type="text" id="usercid" class="articlecid">
                    </div>
                    <div>
                        <label class="label">Phone</label>
                        <input type="text" id="userphone" class="articlephone">
                    </div>
                    <div>
                        <label class="label">Address</label>
                        <input type="text" id="useraddress" class="articleaddress">
                    </div>
                    <div>
                        <label class="label">Email</label>
                        <input type="text" id="useremail" class="articleemail">
                    </div>
                    <div>
                        <label class="label">Department ID</label>
                        <input type="text" id="userdid" class="articledid">
                    </div>
                    <div>
                        <label class="label">Role</label>
                        <input type="text" id="userrole" class="articlerole">
                    </div>

                    <div class="button">
                        <button onclick="document.location='/html/admin/taikhoan/taikhoan.html'" id="cancel" class="btn cancel" type="button">Back</button>
                        <button id="submit" type="submit" class="btn update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/admin/activate-sidebar-nav.js"></script>
    <script src="assets/js/admin/account-edit.js"></script>
</body>
</html>