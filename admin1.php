<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý quán cà phê</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="admin1.css" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar">
        <div class="d-flex">
          <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
          </button>
          <div class="sidebar-logo">
            <a href="admin1.php"
              ><img
                style="height: 30px; width: auto"
                src="./img/logo.png"
                alt=""
            /></a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admin1.php" class="sidebar-link">
              <i class="lni lni-user"></i>
              <span>Trang Quản lý</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin2.php" class="sidebar-link">
              <i class="lni lni-agenda"></i>
              <span>Trang sản phẩm</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-layout"></i>
              <span>Quản lý đặt bàn</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-popup"></i>
              <span>Phản hồi khách hàng</span>
            </a>
          </li>
        </ul>
        <div class="sidebar-footer">
          <a href="index.php" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
          </a>
        </div>
      </aside>
      <div class="main">
        <nav class="navbar navbar-expand px-4 py-3">
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="#" class="nav-icon pe-md-0">
                  <img
                    src="./img/account.png"
                    class="avatar img-fluid"
                    alt=""
                  />
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main class="content px-3 py-4">
          <div class="container-fluid">
            <div class="mb-3">
              <h3 class="fw-bold fs-4 mb-3">Trang quản lý</h3>
              <div class="row">
                <div class="col-12 col-md-4">
                  <div
                    class="card border-1"
                    style="background-color: #6f4e37; color: white"
                  >
                    <div class="card-body py-4 mx-auto">
                      <h5 class="mb-2 fw-bold">Số Món Trong Menu</h5>
                      <p class="mb-2 fw-bold text-center">12</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div
                    class="card border-1"
                    style="background-color: #6f4e37; color: white"
                  >
                    <div class="card-body py-4 mx-auto">
                      <h5 class="mb-2 fw-bold">Số lượng bàn đã đặt</h5>
                      <p class="mb-2 fw-bold text-center">5</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div
                    class="card border-1"
                    style="background-color: #6f4e37; color: white"
                  >
                    <div class="card-body py-4 mx-auto">
                      <h5 class="mb-2 fw-bold">Số phản hối</h5>
                      <p class="mb-2 fw-bold text-center">23</p>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="fw-bold fs-4 my-3">Danh sánh menu</h3>
              <div class="row">
                <div class="col-12">
                  <table class="table table-striped">
                    <thead>
                      <tr class="highlight">
                        <th scope="col">STT</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên món</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Mô tả</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="vertical-align: middle">1</th>
                        <td>
                          <img
                            src="./img/p1.jpg"
                            alt="ảnh 1"
                            style="width: 50px; height: 50px"
                          />
                        </td>
                        <td style="vertical-align: middle">cà phê sữa</td>
                        <td style="vertical-align: middle">12.000 VND</td>
                        <td style="vertical-align: middle">
                          4 phần cà phê, 5 phần sữa
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="admin.js"></script>
  </body>
</html>
