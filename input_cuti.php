<?php
include ("koneksi.php");//fungsi untuk gabung file
if(isset($_POST['simpan'])){
	$query_input_cuti="insert into t_hrdku(nik,nama,jabatan,hak_cuti)
	values('".$_POST['nik']."',
		   '".$_POST['nama']."',
		   '".$_POST['jabatan']."',
		   '".$_POST['hak_cuti']."')"; 
	$proses_data=mysql_query($query_input_cuti);
    if($proses_data){
		echo 'Input Data Berhasil';
	} else {
		echo mysql_error ();
		
}

}
	
?>

<form method ="post" action=""><!--Form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>NIK</td>
		<td><input name="nik" type="number"></td>
	</tr>
	<tr>
		<td>Nama Karyawan</td>
		<td><input name="nama" type="teks"></td>
	</tr>
	<tr>
		<td>Jabatan Karyawan</td>
		<td><input name="jabatan" type="teks"></td>
	</tr>
	<tr>
		<td>Hak Cuti Karyawan</td>
		<td><input name="hak_cuti" type="teks"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>