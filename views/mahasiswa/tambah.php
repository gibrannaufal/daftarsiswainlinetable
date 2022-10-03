<h1> Tambah data  </h1>
<?php
	echo form_open('mahasiswa/aksi_tambah/');
	echo "<div>";
	echo form_label('NRP: ','NRP');
	echo form_input('nrp',set_value('nrp'));
	echo "</div> <div>";
	echo form_label('Nama: ','Nama','class=-form_label');
	echo form_input('nama', set_value('nama'));
	echo "</div> <div>";
	echo form_label('IPK: ', 'IPK', 'class=-form_label');
	echo form_input('ipk',set_value('ipk'));
	echo "</div> <div>";
	echo form_submit(' ','simpan');
	echo form_close();
?>