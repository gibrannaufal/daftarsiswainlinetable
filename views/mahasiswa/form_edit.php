<h3> Edit Mahasiswa </h3>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
echo validation_errors();
	echo form_open('Peserta/edit/'.$mhs->no);
	echo "<div>";
	echo form_label('nrp: ','nrp');
	echo form_input('nrp',set_value('nrp',$mhs->nrp));
	echo "</div> <div>";
	echo form_label('Nama: ','Nama','class=-form_label');
	echo form_input('Nama',set_value('Nama',$mhs->Nama),'class="form-control"');
	echo "</div> <div>";
	echo form_label('Telp: ','Telp','class=-form_label');
	echo form_input('Telp',set_value('Telp',$mhs->Telp));
	echo "</div> <div>";
	echo form_label('Alamat: ','Alamat','class=-form_label');
	echo form_input('Alamat',set_value('Alamat',$mhs->Alamat));
	echo "</div> <div>";
	echo form_label('Tgl Lahir: ','Tgl Lahir','class=-form_label');
	echo form_input('Tgl',set_value('Tgl',$mhs->Tgl));
	echo "</div> <div>";
	echo form_label('Jenis Kelamin: ','Jenis Kelamin','class=-form_label');
	echo "<br>";
	if($mhs->jk == "L"){
	echo form_radio('jk','L',true,set_value($mhs->jk));
	echo "laki-laki";
	echo form_radio('jk','P',false,set_value($mhs->jk));
	echo "perempuan";
	echo "<br>";
	}else{
	echo form_radio('jk','P',true,set_value($mhs->jk));
	echo "perempuan";
	echo form_radio('jk','L',false,set_value($mhs->jk));
	echo "laki-laki";
	echo "<br>";}
	echo form_submit(' ','simpan');
	echo anchor('Peserta/index','kembali');
	echo form_close();
?>