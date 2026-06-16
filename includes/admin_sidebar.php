<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
        
        
        <div class="bg-dark text-white p-3 vh-100 position-sticky top-0 d-flex flex-column" style="width: 250px;">
            <div class="d-flex align-items-center mb-4 px-2">
                <i class="fa-solid fa-dumbbell fs-3 text-warning me-2"></i>
                <span class="fs-4 fw-bold text-uppercase tracking-wider">SportAdmin</span>
            </div>

            <hr class="text-secondary">

            <ul class="nav nav-pills flex-column mb-auto gap-1">
                <li class="nav-item">
                    <a href="../admin/admin_index.php" class="nav-link text-white <?php echo ($current_page == 'admin_index.php') ? 'active bg-primary' : 'hover-opacity'; ?>">
                        <i class="fa-solid fa-chart-line me-2"></i> Thống kê doanh thu
                    </a>
                </li>
                <li>
                    <a href="../admin/admin_san_pham.php" class="nav-link text-white <?php echo ($current_page == 'admin_san_pham.php') ? 'active bg-primary' : 'hover-opacity'; ?>">
                        <i class="fa-solid fa-shirt me-2"></i> Quản lý sản phẩm
                    </a>
                </li>
                <li>
                    <a href="../admin/admin_danh_muc.php" class="nav-link text-white <?php echo ($current_page == 'admin_danh_muc.php') ? 'active bg-primary' : 'hover-opacity'; ?>">
                        <i class="fa-solid fa-list-check me-2"></i> Quản lý danh mục
                    </a>
                </li>
                <li>
                    <a href="../admin/admin_don_hang.php" class="nav-link text-white <?php echo ($current_page == 'admin_don_hang.php') ? 'active bg-primary' : 'hover-opacity'; ?>">
                        <i class="fa-solid fa-truck-ramp-box me-2"></i> Quản lý đơn hàng
                    </a>
                </li>
                <li>
                    <a href="../admin/admin_tai_khoan.php" class="nav-link text-white <?php echo ($current_page == 'admin_tai_khoan.php') ? 'active bg-primary' : 'hover-opacity'; ?>">
                        <i class="fa-solid fa-users me-2"></i> Quản lý tài khoản
                    </a>
                </li>
            </ul>

            <hr class="text-secondary">

            <div class="dropdown px-2">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="https://via.placeholder.com/32" alt="" class="rounded-circle me-2">
                    <strong>Admin Account</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-menu-item dropdown-item" href="#">Đổi mật khẩu</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-menu-item dropdown-item text-danger" href="#">Đăng xuất</a></li>
                </ul>
            </div>
        </div>