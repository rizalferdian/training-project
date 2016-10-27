<?php
include_once('connection.php');

$sql = "
select 
pegawai.id, 
pegawai.nama as peg_nama, 
posisi.nama as pos_nama,
kelamin.nama as kel_nama,
kota.nama as kot_nama,
pegawai.telp as peg_telp
from 
pegawai, posisi, kelamin, kota
where 
pegawai.id_posisi = posisi.id and
pegawai.id_kelamin = kelamin.id and
pegawai.id_kota = kota.id
";

if(@$_GET['q']){
	$search = $_GET['q'];
	$sql .= " 
	and 
	(pegawai.nama like '%{$search}%' or 
	posisi.nama like '%{$search}%' or
	kota.nama like '%{$search}%' or
	pegawai.telp like '%{$search}%' or
	kelamin.nama like '%{$search}%') 
	";
}

$result = mysql_query($sql);
?>
<thead>
	<tr class="btn-success">
		<td>Nama</td>
		<td>Telpon</td>
		<td>Posisi</td>
		<td>Kota</td>
		<td>Jenis Kelamin</td>
		<td>aksi</td>
	</tr>
</thead>


<tbody>
	<?php
	while ($data = mysql_fetch_array($result)) {
		?>

		<tr>
			<td><?php echo $data['peg_nama']; ?></td>
			<td><?php echo $data['peg_telp']; ?></td>
			<td><?php echo $data['pos_nama']; ?></td>
			<td><?php echo $data['kot_nama']; ?></td>
			<td><?php echo $data['kel_nama']; ?></td>
			<td>
				<a class="btn btn-xs btn-warning" href="update.php?id=<?php echo $data['id']; ?>">Update</a>
				<a class="btn btn-xs btn-danger hapus" href="proses-delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
				<a class="btn btn-xs btn-info" href="detail.php?id=<?php echo $data['id']; ?>">detail</a>
			</td>
		</tr>
	</tbody>
	<?php
}
?>