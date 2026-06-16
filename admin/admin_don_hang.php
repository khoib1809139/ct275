<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Quản Lý Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">
    <div class="d-flex w-100" >
        <?php include '../includes/admin_sidebar.php'; ?>
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">

            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Quản lý đơn hàng bán ra</h3>
                    <div class="d-flex gap-2">
                        <input type="date" class="form-control form-control-sm">
                        <button class="btn btn-outline-secondary btn-sm text-nowrap"><i class="fa-solid fa-filter me-1"></i> Lọc ngày</button>
                    </div>
                </div>

                <ul class="nav nav-tabs mb-4 border-bottom-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">Tất cả (142)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Chờ xử lý <span class="badge bg-warning text-dark ms-1">5</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Đang giao hàng <span class="badge bg-info text-white ms-1">12</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Đã hoàn thành</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Đã hủy</a>
                    </li>
                </ul>

                <div class="card border-0 shadow-sm rounded overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Mã đơn</th>
                                    <th>Khách hàng</th>
                                    <th>Sản phẩm đặt mua</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày đặt</th>
                                    <th>Trạng thái</th>
                                    <th class="text-end pe-3">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3 fw-bold text-primary">#DH-9942</td>
                                    <td>
                                        <strong class="text-dark">Nguyễn Văn Thắng</strong><br>
                                        <small class="text-muted">0912.345.xxx</small>
                                    </td>
                                    <td>
                                        <div class="small text-dark fw-medium">2x Áo đấu Real Madrid (Size L)</div>
                                        <div class="small text-muted">1x Giày UltraBoost (Size 42)</div>
                                    </td>
                                    <td class="fw-bold text-danger">2,600,000đ</td>
                                    <td class="small">30/05/2026<br><span class="text-muted">14:20</span></td>
                                    <td><span class="badge bg-warning text-dark py-2 px-3 rounded-pill">Chờ duyệt</span></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-light border me-1" data-bs-toggle="modal" data-bs-target="#orderDetailModal"><i class="fa-solid fa-eye me-1"></i> Chi tiết</button>
                                        <button class="btn btn-sm btn-primary"><i class="fa-solid fa-truck"></i> Giao</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-bold text-primary">#DH-9941</td>
                                    <td>
                                        <strong class="text-dark">Trần Thị Lan</strong><br>
                                        <small class="text-muted">0988.777.xxx</small>
                                    </td>
                                    <td>
                                        <div class="small text-dark fw-medium">1x Bộ quần áo thể thao nữ Adidas</div>
                                    </td>
                                    <td class="fw-bold text-danger">450,000đ</td>
                                    <td class="small">29/05/2026<br><span class="text-muted">09:15</span></td>
                                    <td><span class="badge bg-info text-white py-2 px-3 rounded-pill">Đang giao</span></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-light border me-1"><i class="fa-solid fa-eye me-1"></i> Chi tiết</button>
                                        <button class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i> Xong</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="orderDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Chi tiết đơn hàng #DH-9942</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6><strong>Địa chỉ giao hàng:</strong></h6>
                    <p class="text-muted small">123 Đường Ba Tháng Hai, Ninh Kiều, Cần Thơ</p>
                    <hr>
                    <h6><strong>Phương thức thanh toán:</strong></h6>
                    <p class="text-muted small">Chuyển khoản ngân hàng (Momo/VNPAY)</p>
                    <hr>
                    <h6><strong>Ghi chú từ khách:</strong></h6>
                    <p class="text-warning small bg-warning-subtle p-2 rounded">Giao ngoài giờ hành chính giúp em.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-danger">Hủy đơn</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>