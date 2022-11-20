<h3 class="mt-4">Thêm danh mục sản phẩm</h3>

<div class="form-container">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td><input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"></td>
                </tr>
                <tr>
                    <th scope="row">Order</th>
                    <td>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="order">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success" name="themdanhmuc">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Order</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="order">
        </div>
        <button type="submit" class="btn btn-primary" name="themdanhmuc">Submit</button> -->
    </form>
</div>