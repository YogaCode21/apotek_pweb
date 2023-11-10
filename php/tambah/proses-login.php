<?php 
session_start();
include '../../koneksi.php';

$user = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$user' AND password='$password'");
$query_level = mysqli_fetch_assoc($query);
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['username'] = $user;
    $_SESSION['level_user'] = $query_level['leveluser'];

    header('Location:../view/view-data-pelanggan.php');
}else{
    echo "
    <script>
        alert('Gagal login');
        location.href='../../login.php'
    </script>";
}
?>
