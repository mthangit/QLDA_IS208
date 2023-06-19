<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/css/admin/home-style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <?php include 'sidebar.php'; ?>
    </div>

    <section id="content">
        <div class="nav">
          <?php include 'nav.php'; ?>
        </div>
        
        <div class="box-info">
            <div class="divider">Dashboard</div>
            <ul class="box">
                <li>
                    <ion-icon name="time-outline"></ion-icon>
                    <span class="text">
                        <h3 id="current-date"></h3>
                        <p>Date</p>
                    </span>
                </li>
                
                <li>
                    <ion-icon name="people-outline"></ion-icon>
                    <span class="text">
                        <h3>1000+</h3>
                        <p>Employees</p>
                    </span>
                </li>

                <li>
                    <ion-icon name="partly-sunny-outline"></ion-icon>
                    <span class="text">
                        <h3>28.3&deg;C</h3>
                        <p>Weather</p>
                    </span>
                </li>
            </ul>
        </div>

        <div class="charts">
            <div class="chart">
                <h2>Thống kê lượng truy cập trong tuần qua</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="assets/js/admin/home-script.js"></script>
    <script src="assets/js/admin/activate-sidebar-nav.js"></script>
</body>
</html>