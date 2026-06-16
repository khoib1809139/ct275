<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Quản Lý Danh Mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">

    <div class="d-flex w-100" >
        <?php include '../includes/admin_sidebar.php'; ?>
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">

            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-4">Danh mục nhóm hàng thể thao</h3>
                    <button class="btn btn-success btn-sm rounded shadow-sm" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        <i class="fa-solid fa-plus me-1"></i> Thêm danh mục
                    </button>
                </div>

                <!-- <div class="row g-4">
                    <div class="col-12 col-md-8"> -->
                <div class="card border-0 shadow-sm rounded overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">ID</th>
                                    <th>Tên danh mục</th>
                                    <th class="text-end pe-3">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3 fw-bold text-muted">1</td>
                                    <td><strong class="text-dark">Quần áo bóng đá</strong></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-outline-primary me-1"><i class="fa-solid fa-pen"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-bold text-muted">2</td>
                                    <td><strong class="text-dark">Giày chạy bộ</strong></td>
                                    <td class="text-end pe-3">
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