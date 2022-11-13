<p>Thêm sản phẩm</p>

<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" class="form-control" name="code">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="number" class="form-control" name="number">
    </div>
    <div class="mb-3">
        <label class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label class="form-label">Tóm tắt</label>
        <textarea row="5" class="form-control" name="detail"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Nội dung</label>
        <textarea row="5" class="form-control" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Tình trạng</label>
        <select class="form-select" name="status">
            <option value=" 1">Display</option>
            <option value="0">Hide</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="themsanpham">Thêm</button>
</form>