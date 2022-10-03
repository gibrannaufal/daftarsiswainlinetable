<h1> daftar Peserta Diklat </h1>
<table border="2">
	<tr>
		<th> no </th>
		<th> nama </th>
		<th> nrp </th>
		<th> Alamat </th>
		<th> No Telp </th>
		<th> Lihat Detail </th>
	</tr>
<?php
$no = 1;
foreach ($mhs as $m) { 
?>
	<tr> 
		<td> <?php echo $no++ ?></td>
		<td> <?php echo $m->Nama ?></td>
		<td> <?php echo $m->nrp ?></td>
		<td> <?php echo $m->Alamat ?></td>
		<td> <?php echo $m->Telp ?></td>
		<td> 
			<?php echo anchor('Peserta/edit/'.$m->no,'Lihat Detail'); ?>
		</td>
	</tr>
<?php } ?>
</table>
<!-- <?php echo anchor('mahasiswa/tambah/','Tambah data'); ?> -->
<<!-- ul>
	<li> jumlah record nama ada <?php echo $jml;  ?> </li>
	<li> Nilai IPK tertinggi adalah <?php echo $nilai;  ?> </li>
</ul> -->
<script> function confirmdialog()
{
	return confirm("apakah yakin menghapus data ini ?")
}
 </script>
