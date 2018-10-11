<?php 
include 'koneksi.php'; 
$sql = "select * FROM simpan";
$lihat = mysql_query($sql);
while ($data = mysql_fetch_array($lihat)){
echo "<img src='gambar/".$data['gambar']."' width='100px' height='100px'/>";
echo "</br>";
echo $data['keterangan'];
}
?>
 <?php if(mysqli_num_rows($query)>0){ 
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            	?>
            	 <?php echo $data["cerita"];?>
            	}
            	}
            ?>
            <a href="editprofile.php"></a>