<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài liệu</title>
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
            <div class="title">Thêm tài liệu</div>

            <div class="container">
                <form class="form" id="form">
                    <div>
                        <label class="label">ID</label>
                        <input type="text" id="docid" class="articleid">
                    </div>
                    <div>
                        <label class="label">Title</label>
                        <input type="text" id="doctitle" class="articletitle">
                    </div>
                    <div>
                        <label class="label">Date</label>
                        <input type="text" id="docdate" class="articledate">
                    </div>
                    <div>
                        <label class="label">Type</label>
                        <input type="text" id="doctype" class="articletype">
                    </div>
                    <div>
                        <label class="label">Image</label>
                        <input type="text" id="doccover" class="articlecover">
                    </div>
                    <div>
                        <label class="label">Content</label>
                        <textarea class="articlecontent" id="doccontent" cols="100" rows="10"></textarea>
                    </div>
                    <div>
                        <label class="label">Source</label>
                        <input type="text" id="docsource" class="articlesource">
                    </div>

                    <div class="button">
                        <button id="cancel" class="btn cancel" onclick="document.location='index.php?thuvien'" type="button">Back</button>
                        <button id="submit" type="submit" class="btn add">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/admin/activate-sidebar-nav.js"></script>
    <script src="assets/js/admin/lib-add.js"></script>
</body>
</html>