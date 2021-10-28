<?php
include'../koneksi.php';
$no_surat=$_POST['no_surat'];
$kategori=$_POST['kategori'];
$judul=$_POST['judul'];
$waktu=$_POST['waktu'];
	
if(isset($_POST['simpan'])){
	extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_surat.".".$tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../images/$file_foto";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto="-";

	$sql = 
	"INSERT INTO surat
		VALUES('$no_surat', '$kategori', '$judul', '$file_foto', '$waktu')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=surat");
}
?>