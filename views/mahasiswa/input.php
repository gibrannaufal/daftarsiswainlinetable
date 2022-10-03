<h1> tambah data baru </h1>
<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post" >
	<label> Nama </label>
	<input type="text" name="nama"> 
	<label> nrp </label>
	<input type="text" name="nrp"> 
	<label> ipk </label>
	<input type="text" name="ipk"> 
	<input type="submit" value="Tambah">
</form>