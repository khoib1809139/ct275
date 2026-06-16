<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Thêm Sản Phẩm Mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">

    <div class="d-flex w-100">
        <?php include '../includes/admin_sidebar.php'; ?>
        
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">
            <div class="p-4">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Thêm sản phẩm mới</h3>
                    <a href="admin_san_pham.php" class="btn btn-outline-secondary btn-sm rounded shadow-sm">
                        <i class="fa-solid fa-arrow-left me-1"></i> Quay lại danh sách
                    </a>
                </div>

                <div class="card border-0 shadow-sm p-4 bg-white rounded">
                    <form action="process_add_san_pham.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="row g-4">
                            <div class="col-12 col-lg-8">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label class="form-label small fw-semibold">Tên sản phẩm <span class="text-danger">*</span></label>
                                        <input type="text" name="ten_sp" class="form-control" placeholder="VD: Giày Chạy Bộ Nam UltraBoost" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label small fw-semibold">Giá bán (Gốc) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="number" name="gia_ban" class="form-control" placeholder="0" min="0" required>
                                            <span class="input-group-text bg-light text-muted">VNĐ</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label small fw-semibold">Giá khuyến mãi</label>
                                        <div class="input-group">
                                            <input type="number" name="gia_khuyen_mai" class="form-control" placeholder="0 (Để trống nếu không giảm giá)" min="0">
                                            <span class="input-group-text bg-light text-muted">VNĐ</span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label small fw-semibold">Giới thiệu chi tiết sản phẩm</label>
                                        <textarea class="form-control" name="gioi_thieu" rows="8" placeholder="Nhập mô tả về chất liệu, công năng, thiết kế của sản phẩm..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="bg-light p-3 rounded border">
                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold">Danh mục <span class="text-danger">*</span></label>
                                        <select class="form-select" name="danh_muc" required>
                                            <option value="" disabled selected>-- Chọn danh mục --</option>
                                            <option value="1">Quần áo bóng đá</option>
                                            <option value="2">Giày chạy bộ</option>
                                            <option value="3">Phụ kiện thể thao</option>
                                        </select>
                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold">Ảnh đại diện <span class="text-danger">*</span></label>
                                        <input class="form-control form-control-sm" type="file" name="anh_dai_dien" accept="image/png, image/jpeg, image/webp" required>
                                        <div class="form-text" style="font-size: 0.8rem;">Ảnh chính hiển thị ngoài danh mục.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold">Ảnh phụ (Album)</label>
                                        <input class="form-control form-control-sm" type="file" name="anh_phu[]" accept="image/png, image/jpeg, image/webp" multiple>
                                        <div class="form-text" style="font-size: 0.8rem;">Có thể giữ phím Ctrl/Shift để chọn nhiều ảnh hiển thị trong phần chi tiết.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        
                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-light border"><i class="fa-solid fa-rotate-right me-1"></i> Làm mới</button>
                            <button type="submit" class="btn btn-primary px-4"><i class="fa-solid fa-save me-1"></i> Lưu sản phẩm</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>