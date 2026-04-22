<?php
include 'config.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $minat = $_POST['minat'];

    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama','$email','$password','$umur','$gender','$minat')");
    echo "Registrasi berhasil!";
}
?>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="number" name="umur" placeholder="Umur"><br>
    <select name="gender">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select><br>
    <input type="text" name="minat" placeholder="Minat"><br>
    <button name="register">Daftar</button>
</form>
