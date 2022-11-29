<?php
$sql_pro = "SELECT * FROM product,category WHERE product.id_category = category.id_category AND product.id_category = '$_GET[id]' ORDER BY id_product DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<h1>Category</h1>

<?php
while ($row = mysqli_fetch_array($query_pro)) {
?>
    <li>
        <?php
        echo $row['name_product']
        ?>
    </li>
<?php
}
?>