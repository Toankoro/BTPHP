<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "kaffen_shop";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

$errorMessage = "";
// Kiểm tra khi form gửi POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  // Truy vấn để kiểm tra thông tin người dùng
  $sql = "SELECT * FROM users WHERE username = '$user' AND password = PASSWORD('$pass')";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Chuyển hướng đến trang admin nếu đăng nhập thành công
    header("Location: admin1.php");
    exit();
  } else {
    // Thông báo nếu sai tài khoản hoặc mật khẩu
    $errorMessage = "Tên đăng nhập hoặc mật khẩu không đúng!";
  }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng Nhập Quản Lý Quán Cà Phê</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background-image: url("./img/bg-login.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
      }
      .login-card {
        background-color: rgb(207, 134, 9);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        text-align: center;
        max-width: 400px;
        width: 100%;
      }
      .login-card h3 {
        font-family: "Georgia", serif;
        color: #6f4e37; /* Coffee color */
      }
      .login-card img {
        width: 150px; /* Giới hạn chiều rộng */
        height: auto; /* Chiều cao tự động */
        margin-bottom: 15px;
      }
      .form-control {
        border-radius: 25px;
      }
      .btn-custom {
        background-color: #6f4e37; /* Coffee color */
        color: white;
        border-radius: 25px;
      }
      .btn-custom:hover {
        background-color: #5b3c2a;
      }
      .forgot-link {
        font-size: 0.9rem;
        color: #6f4e37;
        text-decoration: none;
      }
      .forgot-link:hover {
        text-decoration: underline;
      }
      .footer-text {
        font-size: 0.8rem;
        color: #aaa;
      }
    </style>
  </head>
  <body>
  <div class="login-card">
    <img src="./img/logo.png" alt="Logo Quán Cà Phê" class="img-fluid mb-4" />
    <h3 class="text-center">Quán Cà Phê Kaffen</h3>

    <!-- Hiển thị thông báo lỗi nếu có -->
    <?php if ($errorMessage): ?>
      <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
    <?php endif; ?>

    <!-- Form đăng nhập -->
    <form action="login.php" method="POST">
      <div class="mb-3">
        <input
          type="text"
          name="username"
          class="form-control"
          placeholder="Tên đăng nhập"
          required
        />
      </div>
      <div class="mb-3">
        <input
          type="password"
          name="password"
          class="form-control"
          placeholder="Mật khẩu"
          required
        />
      </div>
      <button type="submit" class="btn btn-custom w-100">Đăng Nhập</button>
    </form>

    <!-- Quên mật khẩu -->
    <p class="mt-3 text-center">
      <a href="#" class="forgot-link">Quên mật khẩu?</a>
    </p>

    <!-- Footer -->
    <p class="footer-text">© 2024 Quán Cà Phê Kaffen</p>
  </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
