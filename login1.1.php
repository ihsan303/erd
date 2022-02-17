<?php
require 'koneksi.php';
$user=$_POST["username"];
$password=$_POST["password"];
$sql=mysqli_query($conn,"SELECT * FROM user WHERE username = '$user' AND password='$password' ");
$cek =mysqli_num_rows($sql);

if ($cek>0) //jika ketemu 
{
    $data=mysqli_fetch_array($sql);
    if($data['role']=="admin")
    {
    session_start();
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['username']=$user;
    $_SESSION['nama']=$data['nama_user'];
    $_SESSION['role']=$data['role'];

    header('location:admin/index.php');
    }
    else if($data['role']=="customer")
    {
     session_start();
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['username']=$user;
    $_SESSION['nama']=$data['nama_user'];
    $_SESSION['role']=$data['role'];
        
    header('location:index.php');
    }
}
else{
    ?>
    <script type="text/javascript">
    alert('Username atau password tidak ditemukan');
    window.location="index2.php";
    </script>
    <?php
}
?>