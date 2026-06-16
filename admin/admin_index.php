<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Thống Kê Doanh Số</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">
    <div class="d-flex w-100" >
        <?php include '../includes/admin_sidebar.php'; ?>
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Thống kê lượng sản phẩm bán</h3>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted small mb-1">Đơn Trong Tháng</h6>
                                    <h4 class="fw-bold mb-0">1,240</h4>
                                </div>
                                <div class="bg-primary-subtle text-primary p-3 rounded-circle"><i class="fa-solid fa-bag-shopping fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted small mb-1">Áo Thể Thao Bán Ra</h6>
                                    <h4 class="fw-bold mb-0">3,450 chiếc</h4>
                                </div>
                                <div class="bg-success-subtle text-success p-3 rounded-circle"><i class="fa-solid fa-shirt fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted small mb-1">Giày Chạy Bộ Bán Ra</h6>
                                    <h4 class="fw-bold mb-0">890 đôi</h4>
                                </div>
                                <div class="bg-warning-subtle text-warning p-3 rounded-circle"><i class="fa-solid fa-shoe-prints fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card border-0 shadow-sm p-3 bg-white rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="text-muted small mb-1">Doanh Thu Tháng 5</h6>
                                    <h4 class="fw-bold mb-0">540M VNĐ</h4>
                                </div>
                                <div class="bg-danger-subtle text-danger p-3 rounded-circle"><i class="fa-solid fa-money-bill-wave fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm p-4 bg-white rounded mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold text-dark m-0">Biểu đồ lượng tiêu thụ sản phẩm năm 2026</h5>
                        <select class="form-select form-select-sm w-auto">
                            <option>Tất cả danh mục</option>
                            <option>Quần áo bóng đá</option>
                            <option>Giày chạy bộ</option>
                        </select>
                    </div>
                    <div style="height: 350px;">
                        <canvas id="monthlySalesChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('monthlySalesChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                datasets: [{
                    label: 'Số lượng sản phẩm bán ra',
                    data: [1200, 1900, 3200, 5000, 4200, 3000, 2800, 3500, 4100, 4800, 5200, 6100],
                    backgroundColor: 'rgba(13, 110, 253, 0.85)',
                    borderColor: 'rgb(13, 110, 253)',
                    borderWidth: 1,
                    borderRadius: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: { y: { beginAtZero: true } }
            }
        });
    </script>
</body>
</html>