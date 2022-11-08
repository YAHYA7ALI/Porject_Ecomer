<?php
require_once('Database/db.php');
$id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
$select_cat = "SELECT * FROM category WHERE id = '$id' ";
$query = $conn->query($select_cat);
$cat = $query->fetch_assoc();
?>

<div class="panel-heading"> EDIT- Category
    <div class="panel-body">
        <form action="Database/cat.php" method="POST" role="form" >
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="Name" name="name" type="text" id="name" value="<?= filter_var($cat['name'],FILTER_SANITIZE_STRING) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="id" type="hidden" id="id" value="<?= filter_var($cat['id'],FILTER_SANITIZE_NUMBER_INT) ?>" />
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="EDIT-Category">
        </form>
    </div>