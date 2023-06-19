<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch phòng họp - PING GROUP</title>
    <link rel="stylesheet" href="assets/css/user/lichphonghop-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="header"></div>

    <div class="content">
        <div class="wrapper">
            <div class="registration">
                <div class="title">
                    <h1>Đăng ký lịch phòng họp</h1>
                    <h5><span>Lưu ý</span>: Kiểm tra thông tin trước khi đăng ký</h5>
                </div>
                <form action="" class="register">
                    <p>
                        <label class="label">Phòng họp</label>
                        <input class="room" type="text" id="room" placeholder="F2.15">
                    </p>
                    </br>
                    <p>
                        <label class="label">Ngày</label>
                        <input class="date" type="date" id="date">
                    </p>
                    </br>
                    <p>
                        <label class="label">Thời gian</label>
                        <input class="time" type="text" id="time" placeholder="9:00am to 11:00am">
                    </p>
                    <button type="button" class="save" id="save">Đăng ký</button>
                </form>
            </div>

            <div class="registration data">
                <div class="title">
                    <h1>Danh sách lịch phòng họp</h1>
                </div>
                <table class="data" id="data">
                    <thead>
                        <tr class="record">
                            <th>Phòng họp</th>
                            <th>Ngày</th>
                            <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="footer"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/user/activate-header-footer.js"></script>
    <script src="assets/js/user/meetingroom.js"></script>
</body>
</html>