<div class="panel-heading"> Porodacet </div>
<div class="panel-body">
    <form action="Database/poro-add.php" method="POST" role="form" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Name" name="name" type="name" id="name" value="" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="id" name="id" type="hidden" id="id" value="" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Price" name="price" type="text" id="price" value="" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="sale" name="sale" id="sale" type="text" value="" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Description" name="description" id="description" type="text" value="" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Image" name="img" id="img" type="file" value="" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
                    <?php
                    require_once("Database/db.php");
                    $select_cat = "SELECT * FROM category";
                    $query = $conn->query($select_cat);
                    foreach ($query as $category) {
                    ?>
                        <option value="<?=filter_var( $category['id'],FILTER_SANITIZE_NUMBER_INT) ?>"><?= filter_var($category['name'],FILTER_SANITIZE_STRING) ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="ADD-Porodacet">
    </form>
</div>