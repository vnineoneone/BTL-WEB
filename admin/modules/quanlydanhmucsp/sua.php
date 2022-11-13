<?php
$sql_sua_danhmucsp = "SELECT * FROM category WHERE id = '$_GET[id]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<?php while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) { ?>
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?id=<?php echo $_GET['id'] ?>">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $dong['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Order</label>
            <input type="number" class="form-control" name="order" value="<?php echo $dong['id'] ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="suadanhmuc">Sua</button>
    </form>
<?php } ?>