<div class="card-header-form">
                    <?php
                        require_once 'Database/db.php' ;
                        $select = "SELECT * FROM user_1";
                        if (isset($_GET['search']));
                        {
                            @$search = mysqli_escape_string($conn,filter_var($_GET['search'],FILTER_SANITIZE_STRING));

                            $select .= " WHERE name LIKE '%$search%' OR email LIKE '%$search%' ";
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
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
            <th>Image</th>
            <th>Gender</th>
            <th>Admin</th>
            <th colspan="2" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query($select);
        $id = 0;
        foreach ($query as $user) {
        ?>
            <tr>
                <td><?= ++$id ?></td>
                <td><?= filter_var($user['name'],FILTER_SANITIZE_STRING) ?></td>
                <td><?= filter_var($user['email'],FILTER_SANITIZE_EMAIL) ?></td>
                <td><?= filter_var( $user['address'],FILTER_SANITIZE_STRING) ?></td>
                <td><?= filter_var(md5($user['password'])) ?></td>
                <td><img style="width: 50px; height: 50px; border-radius: 50%;" class="" src="images/<?=$user['img']?>" alt="No-Image"></td>
                <td><?= filter_var($user['gender'],FILTER_SANITIZE_NUMBER_INT) == 1 ? "Male" : "Famele"; ?></td>
                <td><?= filter_var($user['dir'],FILTER_SANITIZE_NUMBER_INT) == 1 ? "Admin" : "User"; ?></td>
                <td><a class="btn btn-primary" href="?action=edit&id= <?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>">Edit</a></td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT) ?>">
                        Delete
                    </button>
                    <div class="modal fade" id="<?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal">Confirm-Deletion</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Do You Really Wont To Delete ? <?= filter_var( $user['name'],FILTER_SANITIZE_STRING) ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a class="btn btn-danger" href="Database/delete-user.php?id= <?= filter_var($user['id'],FILTER_SANITIZE_NUMBER_INT)?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2"><a href="#" class="btn btn-primary"> <?= mysqli_num_rows($query); ?> Users </a></td>
            <td colspan="2"><a href="?action=add" class="btn btn-primary">ADD-USER</a> </td>
        </tr>
    </tfoot>
</table>
</div>
</div>