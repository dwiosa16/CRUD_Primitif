<?php 
	require'functions.php';

	$p=query("SELECT * FROM gitar");
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Daftar Guitar</title>
</head>
<body>
<h1>Daftar Guitar</h1>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Merek</th>
		<th>Spesifikasi</th>
		<th>Harga</th>
		<th>Action</th>
	</tr>
	<?php $i=1; ?>
<?php foreach($p as $row) : ?>
		<tr>
			<td> <?=$i; ?> </td>
			<td> <?=$row["nama"] ?> </td>
			<td> <?=$row["merek"] ?> </td>
			<td> <?=$row["spesifikasi"] ?> </td>
			<td> <?=$row["harga"] ?> </td>
			<td><a href="ubah.php?id=<?=$row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini?');">hapus</a>
		</td>
		</tr>
		<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>