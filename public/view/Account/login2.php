
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .error{
            background: #F2DEDE;
            color: red;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>
    <!-- <?php include '../partials/header.php' ?> -->
    <main class="container mt-5 mb-5">

        <div class="login">
            <div class="img_logo">
                <img src="img/logo/logo_1.png" alt="">
            </div>
            <div class="title_login text-center">
                <h2>ĐĂNG NHẬP</h2>
            </div>
            <div class="des text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, est.
            </div>

            <div class="content_login">
                <form method="POST" action="./makeLogin.php">
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }?>
                    <div class=" group" id="group1">
                        <i class="fa-solid fa-user d-flex align-items-center"></i>
                        <input type="text" name="uname"   placeholder="username....">
                        <label for="name">
                            Username...
                        </label>
                    </div>
                    <div class="group" id="group2">
                        <i class="fa-solid fa-lock d-flex align-items-center"></i>
                        <input type="password" name="password" placeholder="password...">
                        <label for="password">
                            Password...
                        </label>
                        <i class="fa-solid fa-eye m-auto" onclick="changeTypePass()"></i>
                        <i class="fa-solid fa-eye-slash m-auto" onclick="changeTypePass()"></i>
                    </div>
                    <div class="mt-4 row d-flex justify-content-center">
                        <div class="col-4"><input type="checkbox"><span> Ghi danh tôi</span></div>
                        <div class="col-5 d-flex justify-content-end"><a href="" class="text-chuyen-huong">Quên mật
                                khẩu?</a></div>
                    </div>
                    <div class="btn_login mt-4 d-flex justify-content-center">
                        <button type="submit" class>Đăng nhập</button>
                    </div>
                </form>
            </div>
            <div class="chuyen_huong mt-4">
                Bạn chưa có tài khoản? <a href="./register.php" class="text-chuyen-huong">Tạo tài khoản</a>
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



