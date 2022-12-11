<?php
$sql_sua_bv = "SELECT * FROM post WHERE id = '" . $_GET['id'] . "' LIMIT 1";
$query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
?>

<div class="form-container">
    <?php while ($row = mysqli_fetch_array($query_sua_bv)) { ?>
        <form method="POST" action="modules/quanlybaiviet/xuly.php?id=<?php echo $row['id']; ?>" novalidate class="needs-validation" enctype="multipart/form-data">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kiểu dữ liệu</th>
                        <th scope="col">Nhập dữ liệu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Tên bài viết</th>
                        <td>
                            <input type="text" class="form-control" name="name" required value="<?php echo $row['name'] ?>">
                            <div class="invalid-feedback">
                                Không được để trống tên bài viết
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hình ảnh</th>
                        <td>
                            <input type="file" class="form-control" name="image">
                            <img src="modules/quanlybaiviet/uploads/<?php echo $row['image'] ?>" width="50%" height="400px" style="margin-top: 20px;">

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tóm tắt</th>
                        <td>
                            <textarea id="brief" class="form-control" name="brief"><?php echo $row['brief'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nội dung</th>
                        <td>
                            <textarea id="content" class="form-control" name="content"><?php echo $row['content'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Trạng thái</th>
                        <td>
                            <select class="form-select" name="status">
                                <option value=" 1">Kích hoạt</option>
                                <option value="0">Vô hiệu hóa</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" name="suabaiviet">Lưu</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    <?php } ?>
</div>