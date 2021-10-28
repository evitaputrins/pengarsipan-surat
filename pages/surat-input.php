<center><div id="label-page"><h2>Input Data Surat</h2></div></center>
<div id="content">
	<form action="proses/surat-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">Nomor Surat</td>
			<td class="isian-formulir"><input type="text" name="no_surat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori
            <select class="label-formulir" name="kategori">
	        <option value="Undangan">Undangan</option>
	        <option value="Pengumuman">Pengumuman</option>
	        <option value="Nota Dinas">Nota Dinas</option>
	        <option value="Pemberitahuan">Pemberitahuan</option>
        </select>
        </td>
		</tr>
        <tr>
			<td class="label-formulir">Judul</td>
			<td class="isian-formulir"><input type="text" name="judul" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Waktu</td>
			<td class="isian-formulir"><input type="date" name="waktu" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Foto</td>
			<td class="isian-formulir"><input type="file" name="foto" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>