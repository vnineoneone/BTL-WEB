<?php
$sql = "SELECT * FROM post ORDER BY id";
$query = mysqli_query($mysqli, $sql);
?>


<div class="area-post row gx-5" style="margin-top: 30px;">
    <?php
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="col-4 item">
            <div class="post">
                <a href="?quanly=tintuc&id=<?php echo $row['id'] ?>">
                    <div class="view-image">
                        <img src="admin/modules/quanlybaiviet/uploads/<?php echo $row['image'] ?>" alt="" style="width:100%; height:254px;">
                    </div>
                </a>
                <div class="date-post">
                    <i class="far fa-calendar-times"></i>
                    <b id="time-post">13/11/2022</b>
                    <div style="color: #000;">Đăng bởi: </div>
                    <b id="author-post" style="font-weight: 700; padding-left: 1px;">Viet Le</b>
                </div>
                <div class="content">
                    <a href="#" id="title-post"><?php echo $row['name'] ?></a>
                    <p id="detail-post"><?php echo $row['name'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-4 item">
            <div class="post">
                <a href="?quanly=tintuc&id=<?php echo $row['id'] ?>">
                    <div class="view-image">
                        <img src="admin/modules/quanlybaiviet/uploads/<?php echo $row['image'] ?>" alt="" style="width:100%; height:254px;">
                    </div>
                </a>
                <div class="date-post">
                    <i class="far fa-calendar-times"></i>
                    <b id="time-post">13/11/2022</b>
                    <div style="color: #000;">Đăng bởi: </div>
                    <b id="author-post" style="font-weight: 700; padding-left: 1px;">Viet Le</b>
                </div>
                <div class="content">
                    <a href="#" id="title-post"><?php echo $row['name'] ?></a>
                    <p id="detail-post"><?php echo $row['name'] ?></p>
                </div>
            </div>
        </div>

    <?php } ?>

</div>