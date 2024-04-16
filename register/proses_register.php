<?php

include 'koneksi.php';

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$email=$_POST['email'];

$sql="SELECT * FROM masyarakat where nik='$nik'";
$user=mysqli_query($conn,$sql);

if(mysqli_num_rows($user)==0){
    $sql="insert into masyarakat values('$nik','$nama','$username','$pass','$telp','$email')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"<script>alert('anda berhasil register');window.location='login.php';</script>";
    }else{
        echo"<script>alert('anda gagal register');window.location=history.back();</script>";
    }
}else{
    echo"<script>alert('Nik Telah Terdaftar');window.location=history.back();</script>";
}

?>