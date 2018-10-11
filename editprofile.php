<?php 
 
include 'koneksi.php';
$id = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pass = $_POST['pass'];
 
mysql_query("UPDATE daftar SET nama= $nama, alamat=$alamat, nim=$nim");
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>

<body>
    <header>
        <h3>Registrasi</h3>
    </header>

    <?php 
    include "koneksi.php";
    $id = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pass = $_POST['pass'];
    $query_mysql = mysql_query("SELECT * FROM daftar WHERE nama= '$nama', alamat='$alamat', nim='$id',")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>

    <form action="" method="POST">


        <fieldset>
            <p>
                <label for="id">Nim: </label>
                <input type="text" name="id" placeholder="Nim" required value="<?php echo $data['id']?>">
            </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required value="<?php echo $data['nama']?>" >
        </p>
        <p>
        <label for="kelas">Kelas: </label>
        <input type="radio" name="kelas" value="d3mi-01">d3mi-01
        <input type="radio" name="kelas" value="d3mi-02">d3mi-02
        <input type="radio" name="kelas" value="d3mi-03">d3mi-03
        <input type="radio" name="kelas" value="d3mi-04">d3mi-04
    </p>
    <p>
    <label for="kelamin">Kelamin: </label>
     <input type="radio" name="kelamin" value="laki-laki">laki-laki
    <input type="radio" name="kelamin" value="perempuan">perempuan
    </p>
    <p>
    <label for="hobi">Hobi: </label>
    <input type="checkbox" name="hobi" value="makan">makan
    <input type="checkbox" name="hobi" value="minum">minum
    <input type="checkbox" name="hobi" value="tidur">tidur
    </p>
    <p>
        <label for="fakultas">Fakultas: </label>
        <select name="fakultas">
            <option value="pilih">pilih</option>
            <option value="terapan">terapan</option>
            <option value="informatika">informatika</option>
        </select>
    </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required value="<?php echo $data['alamat']?>"></textarea>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>