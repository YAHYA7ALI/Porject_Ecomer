<?php
require_once "Database/db.php";
$id = $_GET['id'];
$SelectUser = "SELECT * FROM user_1 WHERE id = '$id' ";
$query = $conn->query($SelectUser);
$user = $query->fetch_assoc();
?>
<div class="panel-heading"> EDIT-USER </>
    <div class="panel-body">
        <form action="Database/user-update.php" method="POST" role="form" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="Name" name="name" type="name" id="name" value="<?=filter_var( $user['name'],FILTER_SANITIZE_STRING) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="id" type="hidden" id="id" value="<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="<?= filter_var($user['email'],FILTER_SANITIZE_EMAIL)?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Address" name="address" id="Address" type="Address" value="<?= filter_var($user['address'],FILTER_SANITIZE_STRING) ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="<?=filter_var( md5($user['password']))?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Image" name="img" id="img" type="file" value="<?= $user['img'] ?>" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"></label> 
                    <select name="dir" class="form-control" id="exampleFormControlSelect1">
                        <option value="1" <?= filter_var($user['dir'],FILTER_SANITIZE_NUMBER_INT) == 1 ? 'selected' : '' ?>>Admin</option>
                        <option value="0" <?= filter_var($user['dir'],FILTER_SANITIZE_NUMBER_INT) == 0 ? 'selected' : '' ?>>User</option>
                    </select>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" id="gender" value="1" <?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 1 ? 'checked' : '' ?> />
                    <label class=" form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" id="gender" value="0" <?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 0 ? 'checked' : '' ?> />
                    <label class=" form-check-label" for="flexRadioDefault1">
                        Female
                    </label>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="EDIT-USER">
        </form>
    </div>