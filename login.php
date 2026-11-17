<?php

session_start();
require_once 'configs/db.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users"
    
}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    <div class="container-fluild d-flex min-vh-100 justify-content-center align-items-center">
        <div class="card title">
            <div class="title text-center pt-3">
                <h4>LOGIN</h4>
                <p>ยินดีต้อนรับกลับ</p>
            </div>
            <div class="form-login p-4">
                <form action="login.php" class="form" method="post">
                    <div class="form-group">
                        <label for="username" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                     <div class="form-group">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" name="login" class="btn btn-success w-100">LOGIN</button>
                    <p class="pt-2">ยังไม่มีบัญชี <a href="index.php">สมัครสมาชิก</a></p>
                  
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>