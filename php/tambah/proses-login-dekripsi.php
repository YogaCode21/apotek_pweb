<?php 
session_start();
include '../../koneksi.php';

$user = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$user'");
$query_level = mysqli_fetch_assoc($query); 
$cek =  password_verify($password, $query_level['password']);
// $cek = mysqli_num_rows($query);

if($cek == true){
    $_SESSION['username'] = $user;
    $_SESSION['level_user'] = $query_level['leveluser'];

    header('Location:../view/dashboard.php?page=obat');
}else{
    echo "
    <script>
        alert('Gagal login');
        location.href='../../login.php'
    </script>";
}
?>
