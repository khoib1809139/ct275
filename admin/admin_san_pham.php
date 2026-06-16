<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Thống Kê Doanh Số</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="d-flex w-100" >
        <?php include '../includes/admin_sidebar.php'; ?>
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Danh sách trang phục thể thao</h3>
                    <a href="add_san_pham.php" class="btn btn-success btn-sm rounded shadow-sm">
                        <i class="fa-solid fa-plus me-1"></i> Thêm sản phẩm mới
                    </a>
                </div>

                <div class="card border-0 shadow-sm rounded overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Mã SP</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Giá bán</th>
                                    <th>Kho hàng</th>
                                    <th>Trạng thái</th>
                                    <th class="text-end pe-3">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3 fw-bold">#SP001</td>
                                    <td><img src="https://via.placeholder.com/50" class="rounded border" alt="áo"></td>
                                    <td><strong class="text-dark">Áo Đấu CLB Real Madrid 2026</strong><br><small class="text-muted">Size: M, L, XL</small></td>
                                    <td><span class="badge bg-secondary-subtle text-secondary">Quần áo bóng đá</span></td>
                                    <td class="fw-semibold text-danger">250,000đ</td>
                                    <td>145 chiếc</td>
                                    <td><span class="badge bg-success">Còn hàng</span></td>
                                    <td class="text-end pe-3">
                                        <a href="quan_ly_bien_the.php?id=SP001" class="btn btn-sm btn-outline-info me-1" title="Quản lý biến thể (Size, Màu, Tồn kho)">
                                            <i class="fa-solid fa-boxes-stacked"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="fa-solid fa-pen"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-bold">#SP002</td>
                                    <td><img src="https://via.placeholder.com/50" class="rounded border" alt="giày"></td>
                                    <td><strong class="text-dark">Giày Chạy Bộ Cầm Lực UltraBoost</strong><br><small class="text-muted">Size: 40, 41, 42</small></td>
                                    <td><span class="badge bg-secondary-subtle text-secondary">Giày thể thao</span></td>
                                    <td class="fw-semibold text-danger">2,100,000đ</td>
                                    <td>0 chiếc</td>
                                    <td><span class="badge bg-danger">Hết hàng</span></td>
                                    <td class="text-end pe-3">
                                        <a href="quan_ly_bien_the.php?id=SP001" class="btn btn-sm btn-outline-info me-1" title="Quản lý biến thể (Size, Màu, Tồn kho)">
                                            <i class="fa-solid fa-boxes-stacked"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="fa-solid fa-pen"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>