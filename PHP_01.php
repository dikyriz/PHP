<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
    
</head>
<body>

<?php
// Inisialisasi variabel
$nama = $email = $alamat = $jenis_kelamin = $nomor_telepon = "";

// Cek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form
    $nama = test_input($_POST["nama"]);
    $email = test_input($_POST["email"]);
    $alamat = test_input($_POST["alamat"]);
    $jenis_kelamin = test_input($_POST["jenis_kelamin"]);
    $nomor_telepon = test_input($_POST["nomor_telepon"]);

    // Pengecekan nama hanya berisi huruf
    if (!preg_match("/^[a-zA-Z ]*$/", $nama) && !preg_match("/^[0-9]*$/", $nomor_telepon)) {
        $namaErr = "Hanya huruf dan spasi yang diperbolehkan";
        $nomorTeleponErr = "Hanya angka yang diperbolehkan";
    }

    // Pengecekan nomor telepon hanya berisi angka
    else if (!preg_match("/^[0-9]*$/", $nomor_telepon)) {
        $nomorTeleponErr = "Hanya angka yang diperbolehkan";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $nama)){
        $namaErr = "Hanya huruf dan spasi yang diperbolehkan";
    } 
    else {

        
        // Menampilkan data yang diinputkan
        echo "<h2>Data yang Anda masukkan:</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Alamat: " . $alamat . "<br>";
        echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
        echo "Nomor Telepon: " . $nomor_telepon . "<br>";
    }
}

// Fungsi untuk membersihkan data inputan
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Form Data Diri</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <span class="error"><?php if(isset($namaErr)) { echo $namaErr; } ?></span><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" id="alamat" required></textarea><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin" id="jenis_kelamin" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br><br>

    <label for="nomor_telepon">Nomor Telepon:</label>
    <input type="text" name="nomor_telepon" id="nomor_telepon" required>
    <span class="error"><?php if(isset($nomorTeleponErr)) { echo $nomorTeleponErr; } ?></span><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
