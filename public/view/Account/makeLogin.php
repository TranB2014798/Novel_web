<?php
    require_once('connect.php');
// require_once('connect.php');
    // echo $_POST['uname'];
    $errors;
    if(isset($_POST['uname']) && isset($_POST['password'])) {

        function validete($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validete($_POST['uname']);
        $pass = validete($_POST['password']);

        if(empty($uname)) {
            header('Location: login.php?error=vui lòng nhập tên tài khoản');
            // $errors['uname']['required'] ='lỗi';
            exit();
        }else if(empty($pass)) {
            header('Location: login.php?error=vui lòng nhập mật khẩu');
            // $errors['uname']['required'] ='lỗi';
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username='$uname' AND matkhau='$pass'";
            $kq = $pdo->query($sql)->fetchAll();
            
            if($kq){
                session_start();
                $_SESSION['password']=$_POST['password'];
                $_SESSION['username']=$_POST['uname'];

                if($uname=='admin'){
                    // header('Location: admin.php');
                    echo 'đây là trang admin';
                }else{
                    // echo 'đây là trang của user';

                    header('Location: test.php');
                }

            }else{
                header('Location: login.php?error=tài khoản không đúng');

            }
        }

    }else{
        header('Location: login.php?');
        exit();

    }
?>