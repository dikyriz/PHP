<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submitForm').click(function() {
                var nama = $('#nama').val();
                var email = $('#email').val();
                var alamat = $('#alamat').val();
                var jenisKelamin = $('#jenis_kelamin').val();
                var nomorTelepon = $('#nomor_telepon').val();

                $.ajax({
                    type: 'POST',
                    url: 'PHP_01.php',
                    data: {
                        nama: nama,
                        email: email,
                        alamat: alamat,
                        jenis_kelamin: jenisKelamin,
                        nomor_telepon: nomorTelepon
                    },
                    success: function(response) {
                        $('#result').html(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h2>Form Data Diri</h2>

    <form>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

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
        <input type="text" name="nomor_telepon" id="nomor_telepon" required><br><br>

        <button type="button" id="submitForm">Submit</button>
    </form>

    <div id="result"></div>
</body>
</html>