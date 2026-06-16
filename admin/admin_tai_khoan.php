<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportAdmin - Quản Lý Tài Khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-light">
    <div class="d-flex w-100" >
        <?php include '../includes/admin_sidebar.php'; ?>
        <div class="flex-grow-1 min-vh-100 d-flex flex-column" style="min-width: 0;">
            <div class="p-4">
                <div class="card border-0 shadow-sm rounded overflow-hidden">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Người dùng</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Cấp độ quyền</th>
                                    <th>Trạng thái</th>
                                    <th class="text-end pe-3">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                <strong class="text-dark d-block">Lê Minh Quân</strong>
                                                <small class="text-muted">ID: #USR-882</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>quanlm@gmail.com</td>
                                    <td>0909.123.456</td>
                                    <td>
                                        <div class="col-md-6 mb-3">
                                            <label for="role" class="form-label fw-bold"></label>
                                            <select class="form-select" id="role" name="role" required onchange="changeSelectColor(this)">
                                                <option value="" selected disabled>- Chọn cấp độ -</option>
                                                <option class="text-danger" value="Quản lý">Quản lý</option>
                                                <option class="text-success" value="Khách hàng">Khách hàng</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Hoạt động</span></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-user-lock"></i> Khóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                <strong class="text-dark d-block">Phạm Hồng Hải</strong>
                                                <small class="text-muted">ID: #USR-104</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>haiph@gmail.com</td>
                                    <td>0977.888.999</td>
                                    <td>
                                        <div class="col-md-6 mb-3">
                                            <label for="role" class="form-label fw-bold"></label>
                                            <select class="form-select" id="role" name="role" required onchange="changeSelectColor(this)">
                                                <option value="" selected disabled>- Chọn cấp độ -</option>
                                                <option class="text-danger" value="Quản lý">Quản lý</option>
                                                <option class="text-success" value="Khách hàng">Khách hàng</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Hoạt động</span></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-user-lock"></i> Khóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                <strong class="text-dark d-block">Hoàng Gia Bảo</strong>
                                                <small class="text-muted">ID: #USR-012</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>baohoang@gmail.com</td>
                                    <td>0345.555.xxx</td>
                                    <td>
                                        <div class="col-md-6 mb-3">
                                            <label for="role" class="form-label fw-bold"></label>
                                            <select class="form-select" id="role" name="role" required onchange="changeSelectColor(this)">
                                                <option value="" selected disabled>- Chọn cấp độ -</option>
                                                <option class="text-danger" value="Quản lý">Quản lý</option>
                                                <option class="text-success" value="Khách hàng">Khách hàng</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">Bị khóa</span></td>
                                    <td class="text-end pe-3">
                                        <button class="btn btn-sm btn-success text-white"><i class="fa-solid fa-user-check"></i> Mở khóa</button>
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
<script>
function changeSelectColor(selectElement) {
    // Xóa bỏ các class màu cũ
    selectElement.classList.remove('text-secondary', 'text-danger', 'text-success');
    
    // Kiểm tra giá trị được chọn để tô màu tương ứng
    if (selectElement.value === 'Quản lý') {
        selectElement.classList.add('text-danger'); // Màu đỏ cho Quản lý
    } else if (selectElement.value === 'Khách hàng') {
        selectElement.classList.add('text-success'); // Màu xanh lá cho Khách hàng
    } else {
        selectElement.classList.add('text-secondary'); // Màu xám mặc định
    }
}
</script>
</html>