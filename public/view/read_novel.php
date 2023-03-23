<!doctype html>
<html lang="en">

<head>
    <title>Novel</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon/icons8-literature-50.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>
    <?php include '../partials/header.php' ?>
    <main class="container mt-3">
        <div class="back_home">
            <a href="home.php" style="font-size: 16px; font-weight: 500;" class="text-decoration-none text-dark"><i class="fa-solid fa-chevron-left"></i> HOME</a>
        </div>
        <div class="content_truyen row m-auto">
            <!-- <?php
                    include '../partials/connect_db.php';
                    // $query = 'SELECT * FROM truyen';
                    $query = "SELECT * FROM truyen WHERE id={$_GET['id']}";
                    $sth = $pdo->query($query);
                    $row = $sth->fetch();
                    echo '<div class="thong_tin_truyen col-3 text-center mt-5">
            <img src="' . $row['img'] . '" alt="" style="width: 200px;">
            <div class="title_yeuthich mb-0">' . $row['tentruyen'] . '</div>
            <div class="text_tacgia">' . $row['tacgia'] . '</div>
            <div class="the_loai">Thể loại: ' . $row['theloai'] . '</div>
            <div class=""><i class="fa-solid fa-heart" style="color: red;"></i> Yêu
                thích</div>
        </div>
        <div class="noi_dung_truyen col-9">
            <div class="title_truyen text-center mt-3">
                <h3>' . $row['tentruyen'] . '</h3>
                </div>
                <div class="text_truyen">
                    <p>' . $row['noidung'] . '</div>
                    </div>
                </div>';
                    ?> -->
            <div class="thong_tin_truyen col-3 text-center mt-5">
                <img src="img/poster/naruto.jpg" alt="" style="width: 200px;">
                <div class="title_yeuthich mb-0">Naruto</div>
                <div class="text_tacgia">Kishimoto Masashi</div>
                <div class="the_loai">Thể loại: Hành động</div>
                <div class=""><i class="fa-solid fa-heart" style="color: red;"></i> Yêu
                    thích</div>
                <div class="comment">

                </div>
            </div>
            <div class="noi_dung_truyen col-9">
                <div class="title_truyen text-center mt-3">
                    <h3>NARUTO</h3>
                </div>
                <div class="text_truyen">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed velit laudantium culpa ducimus,
                        voluptas optio cupiditate. Quos, velit neque dignissimos nisi facilis amet mollitia tempore
                        sapiente cum voluptatibus reprehenderit hic beatae, esse temporibus eveniet quaerat corporis
                        pariatur possimus libero nulla praesentium. Excepturi cumque porro libero facilis eius. Placeat
                        ut harum, exercitationem quam quisquam aperiam corporis, temporibus veritatis, consequatur
                        cupiditate nemo. Illo, voluptates cupiditate? Illo cum nemo sed impedit nihil natus deleniti
                        voluptatem ratione quod nostrum modi deserunt quibusdam libero, assumenda ut iusto repudiandae,
                        praesentium aperiam? Quidem, accusantium nihil? Adipisci ullam earum, nam omnis provident
                        eveniet voluptate repellendus repudiandae impedit in saepe libero facere quae aliquam, accusamus
                        officia quos eligendi ipsa ab! Iure facilis aspernatur quas beatae asperiores facere ratione cum
                        odio? Dignissimos repellat laudantium delectus quis optio aperiam exercitationem sapiente
                        veritatis ratione et voluptate cumque, iste qui mollitia ad quibusdam esse adipisci. Placeat
                        exercitationem dolore reprehenderit, fugiat ipsum doloribus odio nisi perferendis eligendi nihil
                        eveniet, harum architecto cum repellat aperiam necessitatibus. Consequatur deleniti laborum
                        totam fuga sed, neque laboriosam ipsum aliquid nesciunt. Est libero fugiat quas quae,
                        exercitationem cumque quia quis velit ullam consequatur, ad, sunt enim modi reprehenderit
                        praesentium dolorem id repellendus porro harum placeat. Eligendi modi deserunt ipsum! Vitae
                        corporis, maiores doloribus ratione nisi magni nam placeat odit voluptate tenetur repellendus
                        distinctio dolor est expedita, consequuntur minus natus. Cupiditate ea, sunt laborum labore
                        beatae laboriosam adipisci eligendi voluptate. Unde rerum illo consectetur, placeat eum,
                        voluptatibus laudantium ex blanditiis quos molestiae minus enim, quibusdam fugiat accusamus
                        porro accusantium omnis ducimus possimus quae quia sed!</p>
                </div>
            </div>
        </div>

    </main>
    <?php include '../partials/footer.php' ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>