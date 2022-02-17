<?php

include "koneksi.php";
    $id= $_POST['id_user'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $nama_user= $_POST['nama_user'];
    $role= $_POST['role'];

    $simpan = "INSERT into user (id_user,username,password,nama_user,role)
               VALUES ('$id','$username','$password','$nama_user','$role')";
               
    $result = mysqli_query($conn, $simpan);
    if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman
        echo "<script>alert('Data berhasil disimpan !!!');document.location='login.php'</script>";
    }else{
        echo "<script>alert('Proses simpan gagal, coba kembali');document.location='register.php'</script>";
    }
    
?>