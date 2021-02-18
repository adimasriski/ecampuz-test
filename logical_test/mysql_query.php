<?php
$result = mysqli_query($konek, "SELECT * FROM tb_mahasiswa_nilai where mk_kode = 'MK303' and value = (SELECT max(value) FROM tb_mahasiswa_nilai )");
while($v=mysqli_fetch_array($result)){
	$nama = mysqli_fetch_array(mysqli_query($konek, "SELECT * FROM tb_mahasiswa where mhs_nim='[mhs_nim]'"));
	echo $nama['mhs_nama'];										
}									
?>