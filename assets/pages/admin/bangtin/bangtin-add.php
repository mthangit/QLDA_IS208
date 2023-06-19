<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bảng tin</title>
    <link rel="stylesheet" href="assets/css/admin/article-add-style.css">
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
            <div class="title">Thêm bảng tin</div>

            <div class="container">
                <form class="form" id="form">
                    <div>
                        <label class="label">ID</label>
                        <input type="text" id="newsid" class="articleid">
                    </div>
                    <div>
                        <label class="label">Title</label>
                        <input type="text" id="newstitle" class="articletitle">
                    </div>
                    <div>
                        <label class="label">Date</label>
                        <input type="text" id="newsdate" class="articledate">
                    </div>
                    <div>
                        <label class="label">Content</label>
                        <textarea class="articlecontent" id="newscontent" cols="100" rows="10"></textarea>
                    </div>
                    <div>
                        <label class="label">Image</label>
                        <input type="text" id="newscover" class="articlecover">
                    </div>

                    <div class="button">
                        <button id="cancel" class="btn cancel" onclick="document.location='index.php?bangtin'" type="button">Back</button>
                        <button id="submit" type="submit" class="btn add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/admin/activate-sidebar-nav.js"></script>
    <script src="assets/js/admin/newsfeed-add.js"></script>
</body>
</html>