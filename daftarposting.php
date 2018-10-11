<?php
include'koneksi.php';
 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar']['name'];
 $posting = $_FILES['cerita'];
 $sql ="INSERT INTO daftar ('gambar','cerita') values ('$gambar','$cerita')";
  mysql_query($sql);
  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
   if( $sql ) {
        header('Location: daftarposting.php');
    } else {
        header('Location: daftarposting.php?status=gagal');
    } 
 } 
?>
<p>
<a href="daftarposting.php"></a>
</p>
<?php 
include 'koneksi.php'; 
$sql = "select * FROM daftar";
$lihat = mysql_query($sql);
while ($data = mysql_fetch_array($lihat)){
echo "<img src='gambar/".$data['gambar']."' width='100px' height='100px'/>";
echo "</br>";
echo $data['keterangan'];
}
?>
 <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            	?>
            	 <?php echo $data["cerita"];?>
            	}
            ?>
            <a href="semuaposting.php"></a>

<form method="post" enctype="multipart/form-data" action="daftarposting.php">
<label for="alamat">Cerita: </label>
            <p><textarea name="cerita" required rows=20 cols=80></textarea></p>
<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gbjalan" required /> | 
 Keterangan : <input type="text" name="ket"  /> | 
<input type="submit" value="Upload" name="save"></td>
</form>

<?php
 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar']['name'];
  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
 } 
?>