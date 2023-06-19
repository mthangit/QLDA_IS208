<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - PING GROUP</title>
    <link rel="stylesheet" href="assets/css/login-style.css">
</head>
<body>
    <header>
        <h2 class = "companyname">PING GROUP</button>
    </header>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Đăng nhập</h2>
            <form method="post" action="assets/php/actions.php?login">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="" placeholder="username/email">
                    <label >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" class="form-control rounded-0"  placeholder="Password">
                    <label >Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
        </div>
    </div>

    <script src="assets/js/login-script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>