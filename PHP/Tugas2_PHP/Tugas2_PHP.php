<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
</head>
<body>
    <?php
    // Inisialisasi variabel
    $nama = "";
    $pekerjaan = "";
    $hobby = "";

    // Cek apakah formulir sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari formulir
        $nama = $_POST["nama"];
        $pekerjaan = $_POST["pekerjaan"];
        $hobby = $_POST["hobby"];
    }
    ?>

    <!-- Form -->
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" required><br><br>

        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan" id="pekerjaan" required>
            <option value="Manager" <?php if ($pekerjaan === "Manager") echo "selected"; ?>>Manager</option>
            <option value="Freelancer" <?php if ($pekerjaan === "Freelancer") echo "selected"; ?>>Freelancer</option>
            <!-- Tambahkan semua pekerjaan hingga pekerjaan 10 -->
        </select><br><br>

        <label>Hobby:</label><br>
        <?php
        // Daftar hobi
        $hobbies = array("Memasak", "Olahraga", "Videografi", "Fotografi", "Menonton Film", "Mendengar Musik", "Mengetik", "Bermain Game", "Menari", "Menggambar");
        foreach ($hobbies as $h) {
            echo '<input type="radio" name="hobby" value="' . $h . '"';
            if ($h === $hobby) echo " checked";
            echo '> ' . ucfirst($h) . '<br>';
        }
        ?><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    // Tampilkan data dalam bentuk tabel jika tombol "Simpan" diklik
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<br><br>";
        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
        echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
