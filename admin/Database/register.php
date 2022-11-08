    <?php
        require_once 'db.php';
        if (isset($_POST['submit'])) {
            $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
            $password = filter_var(md5($_POST['password']));
            $password_confirm = filter_var(md5($_POST['password-confirmation']));
            $image = $_FILES['img']['name'];
            $image_size = $_FILES['img']['size'];
            $image_tmp = $_FILES['img']['tmp_name'];
            $image_folder = 'images/' . $image;
            $admin = filter_var($_POST['dir'],FILTER_SANITIZE_NUMBER_INT);
            $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
            $insert = "INSERT INTO user_1 (name,email,address,password,img,dir,gender)VALUES('$name','$email','$address','$password','$image','$admin','$gender')";
            $query = $conn->query($insert);
                    if ($insert) 
                    {
                        if ($image_size > 2000000)
                        {
                            echo 'image size is to lager';
                        } 
                        else 
                        {
                            move_uploaded_file($image_tmp, $image_folder);
                            echo 'registered successfull !';
                            header('location:../index.php');
                            exit;
                        }
                    }
            }

