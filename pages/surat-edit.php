<?php
	$id_surat=$_GET['id'];
	$q_tampil_surat=mysqli_query($db,"SELECT * FROM surat WHERE id_surat='$id_surat'");
	$r_tampil_surat=mysqli_fetch_array($q_tampil_surat);
	if(empty($r_tampil_surat['foto'])or($r_tampil_surat['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_surat['foto'];
?>
<center><div id="label-page"><h3>Edit Data Surat</h3></div></center>
<div id="content">
	<form action="proses/surat-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">Nomor Surat</td>
			<td class="isian-formulir"><input type="text" name="no_surat" value="<?php echo $r_tampil_surat['no_surat']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
        <tr>
			<td class="label-formulir">Kategori</td>			
			<?php
			if($r_tampil_surat['kategori']=="Undangan")
			{
				echo "<td class='isian-formulir'><option nama='kategori' name='kategori' value='Undangan' checked>Undangan</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><option nama='kategori' name='kategori' value='Pengumuman'>Pengumuman</td>";
			}
			elseif($r_tampil_surat['kategori']=="Pengumuman")
			{
				echo "<td class='isian-formulir'><option nama='kategori' name='kategori' value='Undangan'>Undangan</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><option nama='kategori' name='kategori' value='Pengumuman' checked>Pengumuman</td>";
			}
			?>
		</tr>
		<tr>
			<td class="label-formulir">Judul</td>
			<td class="isian-formulir"><input type="text" name="judul" value="<?php echo $r_tampil_surat['judul']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Foto</td>
			<td class="isian-formulir">
			<img src="images/<?php echo $foto; ?>" width=70px height=75px>
			<input type="file" name="foto" class="isian-formulir isian-formulir-border">
			<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_surat['foto']; ?>">
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>