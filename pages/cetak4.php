<?php
include "../koneksi.php";

?>
<link rel="stylesheet" type="text/css" href="../style.css">
<div id="content">
    <div id="beranda-judul-cetak">
		<h1>Data Arsip Surat</h1>
	</div>
<table border="1" id="tabel-tampil">
		<tr>
        <th id="label-tampil-no">No</td>
			<th>Nomor Surat</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Waktu Pengarsipan</th>
			<th>Foto</th>
		</tr>
		
		<?php		
		$nomor=1;
		$query="SELECT * FROM surat ORDER BY id_surat ASC";
		$q_tampil_surat = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_surat)>0)
		{
		while($r_tampil_surat=mysqli_fetch_array($q_tampil_surat)){
			if(empty($r_tampil_surat['foto'])or($r_tampil_surat['foto']=='-'))
				$foto = "transaksi.jpg";
			else
				$foto = $r_tampil_surat['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_surat['no_surat']; ?></td>
			<td><?php echo $r_tampil_surat['kategori']; ?></td>
			<td><?php echo $r_tampil_surat['judul']; ?></td>
			<td><?php echo $r_tampil_surat['waktu']; ?></td>
            <td><img src="../images/<?php echo $foto; ?>" width=70px height=70px></td>		
		</tr>		
		<?php $nomor++; } 
		}?>		
	</table>
	<script>
		window.print();
	</script>
</div>
