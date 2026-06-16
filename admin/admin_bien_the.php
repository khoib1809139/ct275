<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Quản Lý Biến Thể Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">

    <div class="d-flex w-100">
        <?php include '../includes/admin_sidebar.php'; ?>
        
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">
            <div class="p-4">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-bold mb-1">Quản lý biến thể sản phẩm</h3>
                        <p class="text-muted mb-0">Đang chỉnh sửa: <strong class="text-primary">Giày Chạy Bộ Cầm Lực UltraBoost (#SP001)</strong></p>
                    </div>
                    <a href="admin_san_pham.php" class="btn btn-outline-secondary btn-sm rounded shadow-sm">
                        <i class="fa-solid fa-arrow-left me-1"></i> Quay lại sản phẩm
                    </a>
                </div>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm p-4 bg-white rounded">
                            <h6 class="fw-bold text-dark mb-3"><i class="fa-solid fa-plus-circle text-success me-1"></i> Thêm biến thể mới</h6>
                            
                            <form action="process_add_variant.php" method="POST">
                                <div class="row g-3 align-items-end">
                                    <div class="col-12 col-md-3">
                                        <label class="form-label small fw-semibold">Kích cỡ (Size) <span class="text-danger">*</span></label>
                                        <select class="form-select" name="size" required>
                                            <option value="" disabled selected>-- Chọn Size --</option>
                                            <option value="One size">One Size (Freesize)</option>
                                            <option value="S">Size S</option>
                                            <option value="M">Size M</option>
                                            <option value="L">Size L</option>
                                            <option value="XL">Size XL</option>
                                            <option value="XXL">Size XXL</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label class="form-label small fw-semibold">Màu sắc <span class="text-danger">*</span></label>
                                        <input type="text" name="color" class="form-control" placeholder="VD: Đen, Trắng, Đỏ phối đen..." list="colorList" required>
                                        <datalist id="colorList">
                                            <option value="Đen">
                                            <option value="Trắng">
                                            <option value="Đỏ">
                                            <option value="Xanh dương">
                                            <option value="Xám">
                                        </datalist>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label class="form-label small fw-semibold">Số lượng tồn kho <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="number" name="stock" class="form-control" placeholder="0" min="0" required>
                                            <span class="input-group-text bg-light text-muted">Sản phẩm</span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <button type="submit" class="btn btn-success w-100 fw-semibold">
                                            <i class="fa-solid fa-plus me-1"></i> Thêm
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card border-0 shadow-sm bg-white rounded overflow-hidden">
                            <div class="card-header bg-white border-bottom py-3">
                                <h6 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-list text-info me-1"></i> Danh sách biến thể hiện có</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-variants align-middle mb-0 text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th>STT</th>
                                            <th>Kích cỡ (Size)</th>
                                            <th>Màu sắc</th>
                                            <th style="width: 200px;">Tồn kho</th>
                                            <th class="text-end pe-4">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-muted fw-semibold">1</td>
                                            <td><span class="badge bg-dark px-3 py-2">L</span></td>
                                            <td class="fw-semibold text-dark">Đen nhám</td>
                                            <td>
                                                <div class="input-group input-group-sm mx-auto" style="width: 120px;">
                                                    <input type="number" class="form-control text-center text-success fw-bold" value="50" min="0">
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <button class="btn btn-sm btn-outline-primary me-1" title="Cập nhật tồn kho"><i class="fa-solid fa-floppy-disk"></i></button>
                                                <button class="btn btn-sm btn-outline-danger" title="Xóa biến thể"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="text-muted fw-semibold">2</td>
                                            <td><span class="badge bg-dark px-3 py-2">XL</span></td>
                                            <td class="fw-semibold text-dark">Trắng sữa</td>
                                            <td>
                                                <div class="input-group input-group-sm mx-auto" style="width: 120px;">
                                                    <input type="number" class="form-control text-center text-danger fw-bold" value="0" min="0">
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <button class="btn btn-sm btn-outline-primary me-1" title="Cập nhật tồn kho"><i class="fa-solid fa-floppy-disk"></i></button>
                                                <button class="btn btn-sm btn-outline-danger" title="Xóa biến thể"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="text-muted fw-semibold">3</td>
                                            <td><span class="badge bg-secondary px-3 py-2">One size</span></td>
                                            <td class="fw-semibold text-dark">Đỏ phối đen</td>
                                            <td>
                                                <div class="input-group input-group-sm mx-auto" style="width: 120px;">
                                                    <input type="number" class="form-control text-center text-success fw-bold" value="15" min="0">
                                                </div>
                                            </td>
                                            <td class="text-end pe-4">
                                                <button class="btn btn-sm btn-outline-primary me-1" title="Cập nhật tồn kho"><i class="fa-solid fa-floppy-disk"></i></button>
                                                <button class="btn btn-sm btn-outline-danger" title="Xóa biến thể"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>