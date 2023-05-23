<?php
// Cek apakah form login telah disubmit
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lengkapi dengan validasi username dan password di sini
    // Misalnya, cocokkan dengan data yang tersimpan di database

    // Validasi tambahan: periksa apakah password adalah kebalikan dari username
    if($password === reverseString($username)){
        // Setelah validasi berhasil, redirect ke halaman beranda
        header("Location: PHP_01.php");
        exit();
    } else {
        echo "Login gagal. Silakan cek kembali username dan password.";
    }
}

// Fungsi untuk membalikkan string
function reverseString($str){
    $reversedStr = '';
    $length = strlen($str);

    for($i = $length - 1; $i >= 0; $i--){
        $reversedStr .= $str[$i];
    }

    return $reversedStr;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Silakan Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
