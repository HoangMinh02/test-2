<?php
// Kiểm tra xem dữ liệu đã được gửi từ biểu mẫu chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $adminUser = $_POST["adminUser"];
    $password = $_POST["adminPass"];

    // Tính toán mã băm của mật khẩu (ví dụ: sử dụng hàm md5)
    $hashedPassword = md5($password);

    // Kiểm tra xem tên người dùng và mật khẩu có khớp với dữ liệu lưu trữ hay không
    if ($adminUser === "adminUser" && $hashedPassword === md5("adminPass")) {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        // Có thể thực hiện các hành động sau khi đăng nhập thành công, chẳng hạn chuyển hướng người dùng đến trang quản trị
    } else {
        // Đăng nhập không thành công
        echo "Tên người dùng hoặc mật khẩu không đúng!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.boxcenter{
    width: 500px;
    margin: 0 auto;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="boxcenter">
<h2>Login Admin</h2>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="../admin/assets/img/ql.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="adminUser"><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Enter Username" name="adminUser" required>

    <label for="adminPass"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="adminPass" required>
    <?php
        if(isset($tb)&&($tb!="")){
            echo "<h3 style='color:red'>".$tb."</h3>";
        }
    ?>
    <button type="submit" name="login">ĐĂNG NHẬP</button>
    
</div>

  
</form>
</div>
</body>
</html>
