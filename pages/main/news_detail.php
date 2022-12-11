<?php
$sql = "SELECT * FROM post WHERE id = '" . $_GET['id'] . "'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
?>


<div class="container">
    <div class="title">
        <h2 class="title-head">
            <?php echo $row['name'] ?>
        </h2>
    </div>
    <div class="date">
        <li>
            <i class="fa-regular fa-clock"></i>
            <span id="date">28/11/2022</span>
        </li>
    </div>
    <div class="content">
        <?php echo $row['content'] ?>
    </div>
    <div>
        <div class="share-tag">
            <label>Chia sẻ:</label>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
    <div class="form-details">
        <form action="">
            <h3>Liên hệ</h3>
            <div class="name-email">
                <div class="name-email-details"><input type="text" placeholder="Họ và tên"></div>
                <div class="name-email-details"><input type="text" placeholder="Email"></div>
            </div>
            <textarea name="" id="txtarea" cols="30" rows="10" placeholder="Viết bình luận"></textarea>
            <button>Gửi bình luận</button>
        </form>
    </div>
</div>