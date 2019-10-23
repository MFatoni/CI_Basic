<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo base_url().'mahasiswa/updatesave/'.$mahasiswa->id;?>" method="POST">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $mahasiswa->nama?>"></br>
<label>Alamat</label>
<input type="text" name="alamat" value="<?php echo $mahasiswa->alamat?>"></br>
<label>usia</label>
<input type="text" name="usia" value="<?php echo $mahasiswa->usia?>"></br>
<input type="submit" value="Kirim Data">
</form> 
</body>
</html>