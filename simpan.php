<?php
include 'koneksi.php';
 
// menyimpan data kedalam variabel
$nm_admin   = $_POST['nm_admin'];
$username   = $_POST['username'];
$password   = $_POST['password'];
 
if($nm_admin=="")
{
  echo "<script>alert('Nama Anda Belum diisi');history.go(-1);</script>";
}
    else {
        $query="INSERT INTO admin SET  nm_admin='$nm_admin', username='$username', password='$password'";
        mysqli_query($db, $query);

echo "<script>alert('Data yang di input tersimpan di database');window.location='index.php'</script>";
}
?>