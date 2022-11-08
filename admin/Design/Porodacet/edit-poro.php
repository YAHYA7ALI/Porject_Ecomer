<?php
require_once('Database/db.php');
$id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
$select_poro = "SELECT * FROM products WHERE id = '$id' ";
$query = $conn->query($select_poro);
$poro = $query->fetch_assoc();
?>

<div class="panel-heading"> EDIT- Porodacet
    <div class="panel-body">
        <form action="Database/update-poro.php" method="POST" role="form" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="Name" name="name" type="text" id="name" value="<?= filter_var($poro['name'],FILTER_SANITIZE_STRING) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="id" type="hidden" id="id" value="<?= filter_var($poro['id'],FILTER_SANITIZE_NUMBER_INT) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Price" name="price" type="text" id="price" value="<?= filter_var($poro['price'],FILTER_SANITIZE_NUMBER_INT) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="sale" name="sale" id="sale" type="text" value="<?= filter_var($poro['sale'],FILTER_SANITIZE_NUMBER_INT) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Description" name="description" id="description" type="text" value="<?= filter_var($poro['description'],FILTER_SANITIZE_STRING) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="img" name="img" id="img" type="file" value="<?= filter_var($poro['img'],FILTER_SANITIZE_STRING) ?>" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"></label>
                    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="1" <?=filter_var( $poro['cat_id'],FILTER_SANITIZE_NUMBER_INT) == 1 ? 'selected' : '' ?>>Computers</option>
                        <option value="2" <?=filter_var( $poro['cat_id'],FILTER_SANITIZE_NUMBER_INT) == 2 ? 'selected' : '' ?>>Mobile</option>
                        <option value="3" <?=filter_var( $poro['cat_id'],FILTER_SANITIZE_NUMBER_INT) == 3 ? 'selected' : '' ?>>Clothes</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="EDIT-Porodacet">
        </form>
    </div>