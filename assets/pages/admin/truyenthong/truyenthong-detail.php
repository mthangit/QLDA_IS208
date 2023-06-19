<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa truyền thông</title>
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
            <div class="title">Chi tiết truyền thông</div>

            <div class="container">
                <form class="form" id="form">
                    <div>
                        <label class="label">ID</label>
                        <input type="text" id="comid" class="articleid" disabled>
                    </div>
                    <div>
                        <label class="label">Title</label>
                        <input type="text" id="comtitle" class="articletitle" disabled>
                    </div>
                    <div>
                        <label class="label">Date</label>
                        <input type="text" id="comdate" class="articledate" disabled>
                    </div>
                    <div>
                        <label class="label">Type</label>
                        <input type="text" id="comtype" class="articletype" disabled>
                    </div>
                    <div>
                        <label class="label">Content</label>
                        <textarea class="articlecontent" id="comcontent" cols="100" rows="10" disabled></textarea>
                    </div>
                    <div>
                        <label class="label">Image</label>
                        <input type="text" id="comcover" class="articlecover" disabled>
                    </div>

                    <div class="button">
                        <button id="cancel" class="btn cancel" onclick="document.location='index.php?truyenthong'" type="button">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/admin/activate-sidebar-nav.js"></script>
    <script src="assets/js/admin/communication-detail.js"></script>
</body>
</html>