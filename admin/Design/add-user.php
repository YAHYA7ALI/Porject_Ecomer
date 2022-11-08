
<div class="panel-heading"> ADD-USER </div>
<div class="panel-body">
    <form action="Database/add-new-user.php" method="POST" role="form" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Name" name="name" type="name" id="name" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="id" name="id" type="hidden" id="id" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Address" name="address" id="Address" type="Address" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" id="password" type="password" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Image" name="img" id="img" type="file" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                <select name="dir" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" id="gender" checked value="1" />
                <label class=" form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" id="gender" value="0" />
                <label class=" form-check-label" for="flexRadioDefault1">
                    Female
                </label>
            </div>
            <input type="submit" class="btn btn-primary"  value="ADD-USER">
    </form>
</div>