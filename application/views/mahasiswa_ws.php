<html>
<head>
<style type="text/css">
 	table {text-align: center;}
	td {width: 100px}
	tr {height: 50px}
	#atas {background-color: grey}
	#edit {background-color: blue}
	#delete {background-color: red}
</style>
</head>
<body>
<table>
<thead>
<tr id="atas">
	<td>NAMA</td>
	<td>ALAMAT</td>
	<td>USIA</td>
	<td>DELETE</td>
	<td>EDIT</td>
</tr>
</thead>
<tbody>
<?php
/*	foreach ($mahasiswa as $key => $value) {
		echo $key.":";
		echo $value."<br>";
	}
*/	
	foreach ($mahasiswa as $key) { ?>
		<tr>
			<td><?php echo $key->nama; ?></td>
			<td><?php echo $key->alamat; ?></td>
			<td><?php echo $key->usia; ?></td>
			<td id="delete"><a href="<?php echo base_url().'mahasiswa/deleteData/'.$key->id ?>" onClick='return confirm("Apakah Data Mau Dihapus")'>Delete</a></td>
			<td id="edit"><a href="<?php echo base_url().'mahasiswa/editData/'.$key->id?>" onClick='return confirm("Apakah Data Mau Diperbaharui")'>Edit</a></td>
		</tr>
	<?php
	}
	?>
	</tbody>
</table>
</body>
</html>