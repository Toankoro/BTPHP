<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Liên Hệ</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .container-contact {
        max-width: 1000px;
        margin: 20px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 150px;
      }

      h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
      }

      /* Map Style */
      .map {
        width: 100%;
        height: 300px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      /* Store Information */
      .store-info {
        margin: 20px 0;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: #f7f7f7;
        color: black;
      }

      .store-info h3 {
        margin-bottom: 10px;
      }

      /* Contact Form */
      .contact-form {
        display: flex;
        flex-direction: column;
      }

      .form-group {
        margin-bottom: 15px;
      }

      .form-group label {
        margin-bottom: 5px;
        font-weight: bold;
        color: black;
      }

      .form-group input,
      .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
      }

      .form-group textarea {
        resize: vertical; /* Allow vertical resizing */
        min-height: 100px; /* Minimum height for the textarea */
      }

      .submit-btn {
        background-color: #e2b94b;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-weight: bold;
        border-radius: 4px;
        transition: background-color 0.3s;
      }

      .submit-btn:hover {
        background-color: #d29f39;
      }

      h5 {
        color: #ffd700;
        font-size: 1.2rem;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg py-4 py-lg-0 m-2 m-sm-3 shadow bg-dark rounded fixed-top"
    >
      <div class="container-fluid px-4">
        <a href="#"
          ><img class="img-logo me-auto" src="./img/logo.png" alt="LoGo"
        /></a>

        <div
          class="offcanvas offcanvas-end bg-dark"
          tabindex="-1"
          id="top-navbar"
          aria-labelledby="top-navbarLabel"
        >
          <!-- Navigation Bar Content-->
          <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#top-navbar"
            aria-controls="top-navbar"
          >
            <div class="d-flex justify-content-between p-3">
              <img src="./img/logo.png" alt="LoGo" />
              <i class="lni lni-xmark"></i>
            </div>
          </button>
          <ul class="navbar-nav mx-lg-auto p-4 p-lg-0">
            <li class="nav-item px-3 py-1 py-lg-4">
              <a class="nav-link" href="index.php">Trang chủ</a>
            </li>
            <li class="nav-item px-3 py-1 py-lg-4">
              <a class="nav-link" href="index.php#about-us">Giới thiệu</a>
            </li>
            <li class="nav-item px-3 py-1 py-lg-4 dropdown">
              <a
                class="menu nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Menu
              </a>
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item" href="#">Cà phê Việt</a></li>
                <li><a class="dropdown-item" href="#">Cà phê nước ngoài</a></li>
                <li><a class="dropdown-item" href="#">Đồ ăn</a></li>
              </ul>
            </li>
            <li class="nav-item px-3 py-1 py-lg-4">
              <a class="nav-link" href="">Liên hệ</a>
            </li>
          </ul>
        </div>
        <button
          style="background-color: #6f4e37"
          class="btn rounded-pill ms-2"
          onclick="window.location.href='login.php';"
        >
          Login
        </button>
        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#top-navbar"
          aria-controls="top-navbar"
        >
          <i class="lni lni-menu-hamburger-1"></i>
        </button>
      </div>
    </nav>
    <div class="container-contact">
      <h2>Liên Hệ Với Chúng Tôi</h2>

      <!-- Map Section -->
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6403421211124!2d106.6358652148828!3d10.802465592313186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529c2f9f2f3ef%3A0x1e2c538c75d79b5a!2sMy%20Coffee!5e0!3m2!1sen!2s!4v1693618233294!5m2!1sen!2s"
          width="100%"
          height="300"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>

      <!-- Store Information -->
      <div class="store-info">
        <h3>Thông Tin Cửa Hàng</h3>
        <p><strong>Tên Cửa Hàng:</strong> Kaffen</p>
        <p><strong>Địa Chỉ:</strong> 70, Nguyễn Trãi, Hà Đông, Hà Nội</p>
        <p><strong>Điện Thoại:</strong> 0398237832</p>
        <p><strong>Email:</strong> toanvu1405@gmail.com</p>
      </div>

      <!-- Contact Form -->
      <form class="contact-form">
        <div class="form-group">
          <label for="name">Họ Tên:</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="message">Tin Nhắn:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Gửi Liên Hệ</button>
      </form>
    </div>

    <!-- fooder -->
    <div class="fooder row p-5">
      <div class="col col-sm-6 col-lg-3 col-12 mb-4">
        <a href="#"
          ><img class="logo-fooder" src="./img/logo.png" alt="logo"
        /></a>
      </div>
      <div class="col col-sm-6 col-lg-3 col-12 mt-4">
        <div class="h5">Thời Gian Làm Việc</div>
        <li>
          Thứ 2 - Thứ 7 <br />
          8h sáng - 9h tối
        </li>
        <li>
          Chủ nhật <br />
          9h sáng - 10h tối
        </li>
      </div>
      <div class="col col-sm-6 col-lg-3 col-12 mt-4">
        <div class="h5">Liên Hệ</div>
        <i class="bi bi-geo-alt">
          Địa chỉ : <br />
          70, Nguyễn Trãi, Hà Đông, Hà Nội
        </i>
        <br />
        <i class="bi bi-envelope">
          Địa chỉ Email : <br />
          toanvu1405@gmail.com
        </i>
        <br />
        <i class="bi bi-telephone">
          Số điện thoại : <br />
          0398237832
        </i>
      </div>
      <div class="col col-sm-6 col-lg-3 col-12 mt-4">
        <div class="h5">Thư Viện</div>
        <div class="row gallery-container g-3">
          <div class="col-4">
            <div class="card">
              <img src="./img/image1.jpg" class="card-img-top" alt="Coffee 1" />
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="./img/image2.jpg" class="card-img-top" alt="Coffee 2" />
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="./img/image3.jpg" class="card-img-top" alt="Coffee 3" />
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="./img/image4.jpg" class="card-img-top" alt="Coffee 4" />
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="./img/image1.jpg" class="card-img-top" alt="Coffee 5" />
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="./img/image2.jpg" class="card-img-top" alt="Coffee 6" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
