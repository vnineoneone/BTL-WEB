<?php
$sql = "SELECT * FROM infomation LIMIT 1";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
?>
<div class="form-container">
    <form method="POST" action="modules/quanlythongtin/xuly.php" class="needs-validation" enctype="multipart/form-data">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Email</th>
                    <td>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
                        <div class="invalid-feedback">
                            Không được để trống tên email
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Số điện thoại</th>
                    <td>
                        <input type="tel" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
                        <div class="invalid-feedback">
                            Số điện thoại không hợp lệ
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Địa chỉ</th>
                    <td>
                        <input type="tel" name="address" class="form-control" value="<?php echo $row['address'] ?>">
                        <div class="invalid-feedback">
                            Không được để trống địa chỉ
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Địa chỉ</th>
                    <td>
                        <textarea type="tel" rows="10" name="introduce" class="form-control">
                            <?php echo $row['introduce'] ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success" name="suathongtin">Lưu</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>