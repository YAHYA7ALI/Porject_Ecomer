<div class="card-header-form">
        <?php
            require_once 'Database/db.php';
            $select = "SELECT * FROM category";
            if (isset($_GET['search'])) 
            {
                $search = mysqli_escape_string($conn, filter_var($_GET['search'],FILTER_SANITIZE_STRING));
                $select .= " WHERE name LIKE '%$search%' ";
            }
            $result = $conn->query($select);
        ?>
        <form method="get">
            <div class="input-group col-lg-4" style="float: right; top: -70px;">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
<table class="table table-hover table-bordered table-striped">
    <thead style="background-color: #30a8fc;">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th colspan="2" style="text-align:center ;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query($select);
        $id = 0;
        foreach ($query as $cat) {
        ?>

            <tr>
                <td><?= ++$id ?></td>
                <td><?= filter_var($cat['name'],FILTER_SANITIZE_STRING) ?></td>
                
                <td><a class="btn btn-primary" href="?action=edit&id= <?= filter_var($cat['id'],FILTER_SANITIZE_NUMBER_INT) ?>">Edit</a></td>
                <td> <a class="btn btn-danger" href="Database/delete-cat.php?id= <?= filter_var($cat['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"><button class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Category </button>
                <a href="?action=add" class="btn btn-primary">ADD-Category</a>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>