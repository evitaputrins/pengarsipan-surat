<?php
include'../koneksi.php';

$id_surat=$_POST['id_surat'];
$no_surat=$_POST['no_surat'];
$kategori=$_POST['kategori'];
$judul=$_POST['judul'];
$waktu=$_POST['waktu'];

If(isset($_POST['simpan'])){
	extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_surat.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../images/$file_foto";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto=$foto_awal;

	mysqli_query($db,
		"UPDATE surat
		SET id_surat='$id_surat', no_surat='$no_surat', kategori='$kategori', judul='$judul', waktu='$waktu', foto='$file_foto'
		WHERE id_surat='$id_surat'"
	);
	header("location:../index.php?p=surat");
}
?>