<?php
include 'koneksi.php';
$sql = mysqli_query($con,"SELECT * FROM daftar");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>nama</th>
            <th>nim</th>
            <th>kelas</th>
            <th>jenis kelamin/th>
            <th>hobi</th>
            <th>fakultas</th>
            <th>alamat</th>
        </tr>
        <?php if(mysqli_num_rows($sql)>0){ 
            $no = 1;
            while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["kelas"];?></td>
            <td><?php echo $data["jeniskelamin"];?></td>
            <td><?php echo $data["hobi"];?></td>
            <td><?php echo $data["fakultas"];?></td>
            <td><?php echo $data["alamat"];?></td>
            <td>
                <a href="posting.php">Posting</a> |
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>