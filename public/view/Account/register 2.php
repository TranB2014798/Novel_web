<?php 
require_once('./adduser.php')
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        .error{
            background: #F2DEDE;
            color: red;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- <?php include '../partials/header.php' ?> -->
    <main class="container mt-5 mb-5">

        <div class="login">
            <div class="img_logo">
                <img src="img/logo/logo_1.png" alt="">
            </div>
            <div class="title_login text-center">
                <h2>ĐĂNG KÝ</h2>
            </div>
            <div class="des text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, est.
            </div>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <div class="content_login">
                <form  method="POST" action="">
                    <div class=" group" id="group1">
                        <i class="fa-solid fa-envelope d-flex align-items-center"></i>
                        <input type="text" name="phone" id="" autocomplete="off" placeholder=" ">
                        <label for="name">
                            Email or phone....
                        </label>
                        <?php 
                        if(!empty($errors['phone']['required'])){
                            echo '<span style="color:red"><i>'.$errors['phone']['required'].'</i></span>';
                        }
                        ?>
                    </div>
                    <div class=" group" id="group1">
                        <i class="fa-solid fa-user d-flex align-items-center"></i>
                        <input type="text" name="username" id="" autocomplete="off" placeholder=" ">
                        <label for="name">
                            Username...
                        </label>
                        <?php 
                            echo (!empty($errors['username']['required']))?'<span
                            style="color:red;"><i>'.$errors['username']['required'].'</i></span>':false;
                        ?>
                    </div>
                    <div class="group" id="group2">
                        <i class="fa-solid fa-lock d-flex align-items-center"></i>
                        <input type="password" name="password1" id="password" autocomplete="off" placeholder=" ">
                        <label for="password">
                            Password...
                        </label>
                        <i class="fa-solid fa-eye m-auto" onclick="changeTypePass()"></i>
                        <i class="fa-solid fa-eye-slash m-auto" onclick="changeTypePass()"></i>
                        <?php 
                        if(!empty($errors['password1']['required'])){
                            echo '<span style="color:red"><i>'.$errors['password1']['required'].'</i></span>';
                        }
                        ?>
                    </div>
                    <div class="group" id="group2">
                        <i class="fa-solid fa-lock d-flex align-items-center"></i>
                        <input type="password" name="password2" id="password" autocomplete="off" placeholder=" ">
                        <label for="password">
                            Password...
                        </label>
                        <i class="fa-solid fa-eye m-auto" onclick="changeTypePass()"></i>
                        <i class="fa-solid fa-eye-slash m-auto" onclick="changeTypePass()"></i>
                        <?php 
                        if(!empty($errors['password2']['required'])){
                            echo '<span style="color:red"><i>'.$errors['password2']['required'].'</i></span>';
                        }

                        if(!empty($errors['password2']['overlap'])){
                            echo '<span style="color:red"><i>'.$errors['password2']['overlap'].'</i></span>';
                        }
                        ?>
                    </div>
                    <div class="btn_login mt-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="chuyen_huong mt-4">
                Bạn đã có tài khoản? <a href="./login.php" class="text-chuyen-huong">Đăng nhập</a>
            </div>
        </div>

    </main>
    <!-- <?php include '../partials/footer.php' ?> -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>