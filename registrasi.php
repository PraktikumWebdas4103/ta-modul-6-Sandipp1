<form action="login.php" method="POST">
	<table>
		<tr>
	<td>Nama</td> 
	<td>:</td> 
	<td><input type="text" name="nama"></td>
</tr>
<tr>
	<td>Nim</td> 
	<td>:</td> 
	<td><input type="text" name="nim"></td>
</tr>
<tr>
	<td>kelas</td> 
	<td>:</td> 
	<td><input type="radio" name="kelas" value="41-01">41-01<br></td>
	<td><input type="radio" name="kelas" value="41-02">41-02<br></td>
	<td><input type="radio" name="kelas" value="41-03">41-03<br></td>
	<td><input type="radio" name="kelas" value="41-04">41-04<br></td>
		</tr>
		<tr>
	<td>Jenis Kelamin</td>
	<td> :</td> 
	<td><input type="radio" name="jeniskelamin" value="laki">Laki - laki<br></td>
	<td><input type="radio" name="jeniskelamin" value="wanita">Wanita<br></td>
	</tr>
	<tr>
	<td>Hobi</td> 
	<td>:</td> 
	<td><input type="checkbox" name="hobi" value="futsal">Futsal<br></td>
	<td><input type="checkbox" name="hobi" value="basket">Basket<br></td>
	<td><input type="checkbox" name="hobi" value="badminton">Badminton<br></td>
	<td><input type="checkbox" name="hobi" value="tidur">Tidur</td>
	<td><input type="checkbox" name="hobi" value="main">Main</td>
</tr>
<tr>
	<td>Fakultas</td>
	<td>:</td> 
	<td><select name="fakultas">
			   <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
			   <option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikas dan Bisnis</option>
			   <option value="Fakultas Ekonomi dan Bisni">Fakultas Ekonomi dan Bisnis</option><br></td>
			</tr>
		</select>
	<tr>
	<td>Alamat</td> 
	<td>:</td>
	<td><input type="textarea" name="alamat" style="height: 100px"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table>
<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
$nama= $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jeniskelamin = $_POST['jeniskelamin'];
$hobi = $_POST['hobi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];
$sql ="INSERT INTO daftar (nama,nim,kelas,jeniskelamin,hobi,fakultas,alamat) values ('$nama','$nim','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')";
if (strlen($nama) >= 35) {
		die("nama jangan lebih dari 35 karakter". mysqli_connect_error());
	}
if (strlen($nim) != 10){
	die("nim harus 10 karakter". mysqli_connect_error());

}
if (mysqli_query($con,$sql)){
	echo "Registrasi Telah Berhasil";
}else{
	echo "Gagal Regis";
}
}
?>