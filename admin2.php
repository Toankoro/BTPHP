<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý menu</title>
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
    <link rel="stylesheet" href="admin2.css" />
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
          <form action="#" class="d-none d-sm-inline-block">
            <!-- Form Search -->
            <div class="input-group">
              <input
                type="search"
                class="form-control"
                placeholder="Tìm kiếm..."
                aria-label="Search"
              />
              <!-- Thay chữ "Tìm" bằng icon -->
              <button
                class="btn btn-outline-secondary"
                type="submit"
                id="button-addon2"
              >
                <i class="fas fa-search"></i>
                <!-- Biểu tượng tìm kiếm -->
              </button>
            </div>
          </form>
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
            <div class="d-flex">
              <!-- Main Content -->
              <div class="flex-grow-1 p-4">
                <h1 class="mb-4">Quản Lý Sản Phẩm</h1>
                <div class="d-flex justify-content-between mb-3">
                  <button
                    class="btn btn-primary mb-3"
                    data-bs-toggle="modal"
                    data-bs-target="#addProductModal"
                  >
                    Thêm Sản Phẩm
                  </button>
                  <div class="ms-auto">
                    <select class="form-select w-auto">
                      <option value="all" selected>Tất cả</option>
                      <option value="ca-phe-viet">Cà Phê Việt</option>
                      <option value="ca-phe-nuoc-ngoai">
                        Cà Phê nước ngoài
                      </option>
                      <option value="do-an">Đồ ăn</option>
                    </select>
                  </div>
                </div>
                <!-- Bảng sản phẩm -->
                <table class="table table-bordered">
                  <thead class="table-dark">
                    <tr>
                      <th>STT</th>
                      <th>Hình Ảnh</th>
                      <th>Tên Sản Phẩm</th>
                      <th>Giá</th>
                      <th>Mô Tả</th>
                      <th>Hành Động</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="vertical-align: middle">1</td>
                      <td>
                        <img src="./img/p1.jpg" alt="Cà phê đen" width="50" />
                      </td>
                      <td style="vertical-align: middle">Cà phê đen</td>
                      <td style="vertical-align: middle">30,000 VND</td>
                      <td style="vertical-align: middle">
                        Cà phê nguyên chất đậm vị
                      </td>
                      <td style="vertical-align: middle">
                        <button
                          class="btn btn-warning btn-sm"
                          data-bs-toggle="modal"
                          data-bs-target="#editProductModal"
                        >
                          Sửa
                        </button>
                        <button class="btn btn-danger btn-sm">Xóa</button>
                      </td>
                    </tr>
                    <!-- Thêm dòng dữ liệu -->
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Modal Thêm Sản Phẩm -->
            <div
              class="modal fade"
              id="addProductModal"
              tabindex="-1"
              aria-labelledby="addProductModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">
                      Thêm Sản Phẩm
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3">
                        <label for="productName" class="form-label"
                          >Tên Sản Phẩm</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="productName"
                          required
                        />
                      </div>

                      <div class="mb-3 d-flex align-items-center">
                        <!-- Giá -->
                        <div class="me-3 flex-grow-1">
                          <label for="productPrice" class="form-label"
                            >Giá</label
                          >
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              id="productPrice"
                              required
                            />
                            <span class="input-group-text">₫</span>
                          </div>
                        </div>

                        <!-- Dropdown -->
                        <div>
                          <label for="productCategory" class="form-label"
                            >Loại Sản Phẩm</label
                          >
                          <select class="form-select" id="productCategory">
                            <option value="ca-phe-viet">Cà Phê Việt</option>
                            <option value="ca-phe-nuoc-ngoai">
                              Cà Phê nước ngoài
                            </option>
                            <option value="do-an">Đồ ăn</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="productDescription" class="form-label"
                          >Mô Tả</label
                        >
                        <textarea
                          class="form-control"
                          id="productDescription"
                          rows="3"
                        ></textarea>
                      </div>

                      <div class="mb-3">
                        <label for="productImage" class="form-label"
                          >Hình Ảnh</label
                        >
                        <input
                          type="file"
                          class="form-control"
                          id="productImage"
                          accept="image/*"
                        />
                      </div>

                      <button type="submit" class="btn btn-success">
                        Thêm
                      </button>
                    </form>
                  </div>
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
