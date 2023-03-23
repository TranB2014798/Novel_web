<?php
include '../partials/connect_db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['tentruyen']) && !empty($_POST['tacgia']) && !empty($_POST['theloai']) && !empty($_POST['img']) && !empty($_POST['noidung'])) {
        include '../partials/connect_db.php';
        $query = 'INSERT INTO truyen (tentruyen, tacgia, theloai, img, noidung) VALUES (?, ?, ?, ?, ?)';

        try {
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_POST['tentruyen'],
                $_POST['tacgia'],
                $_POST['theloai'],
                $_POST['img'],
                $_POST['noidung']
            ]);
            header("Location: http://localhost/Php_Tieu_Thuyet/public/user_admin.php");
            exit();
        } catch (PDOException $e) {
            echo 'Khong them';
        }
    } else {
        echo 'Khong nhap';
    }
}
