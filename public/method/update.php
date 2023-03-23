<?php
include '../partials/connect_db.php';
// $tentruyen = "BLEACH 2";
// $tacgia = "Kubo Taito";
// $theloai = "Hành động";
// $img = "https://i.pinimg.com/564x/4b/0a/9b/4b0a9b4a11413baf74521cc0e6f39b72.jpg";
//$noidung = "BLEACH được đăng trên tuyển tập manga Nhật Bản là Weekly Shounen Jump từ ngày 20 tháng 8 năm 2001 đến ngày 22 tháng 8 năm 2016, và có tổng cộng 74 tập. Từ lúc xuất bản, BLEACH đã tạo ra một thương hiệu nhượng quyền thương mại bao gồm một loạt phim anime dài tập được sản xuất bởi Studio Pierrot tại Nhật Bản từ 2004 đến 2012, 2 OVA, 4 bộ phim anime, 11 vở nhạc kịch rock, và rất nhiều trò chơi điện tử, cũng như nhiều loại hàng hóa khác có liên quan.";
if (!empty($_POST['tentruyen']) && !empty($_POST['tacgia']) && !empty($_POST['theloai']) && !empty($_POST['img']) && !empty($_POST['noidung'])) {
    $query = "UPDATE truyen SET tentruyen=?, tacgia=?, theloai=?, img=?, noidung=? WHERE id=?";

    try {
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_POST['tentruyen'],
            $_POST['tacgia'],
            $_POST['theloai'],
            $_POST['img'],
            $_POST['noidung'],
            $_POST['id']
        ]);
        // $sth->execute([$tentruyen, $tacgia, $theloai, $img, $noidung]);
        header("Location: http://localhost/Php_Tieu_Thuyet/public/user_admin.php");
    } catch (PDOException $e) {
        echo 'Khong them';
    }
} else {
    include '../partials/show_error.php';
}
