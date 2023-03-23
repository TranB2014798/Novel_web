<?php
include '../partials/connect_db.php';

$id = $_GET['id'];

$sth = $pdo->prepare("DELETE FROM truyen WHERE id={$id}");
$sth->execute();
$count = $sth->rowCount();
if ($count > 0) {
    header("Location: http://localhost/Php_Tieu_Thuyet/public/user_admin.php");
} else {
    echo "Error in delete";
}
