<form action="" method='POST'>
    <table>
    <tr>
    <td><label for="username">username</label></td>
    <td><input type="text" name="username" id="username"><br></td>
    </tr>
    <tr>
    <td><label for="password">password</label></td>
    <td><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
</form>  
<?php 
include 'koneksi.php';
$id = $_POST['id'];
$password = md5($_POST['pass']);

$login = mysqli_query("select * from registrasi where nim='$id' and pass='$pass'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['status'] = "login";
    header("location:halamanawal.php");
}else{
    header("location:halamanawal.php"); 
}

?>  
</html>