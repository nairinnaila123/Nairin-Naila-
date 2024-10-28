<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <form method="post" action="">
        <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
        <input type="number" name="nilai1" required><br>

        <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
        <input type="number" name="nilai2" required><br>

        <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
        <input type="number" name="nilai3" required><br>

        <label for="nilai4">Masukkan Nilai Mata Kuliah 4:</label>
        <input type="number" name="nilai4" required><br>

        <label for="nilai5">Masukkan Nilai Mata Kuliah 5:</label>
        <input type="number" name="nilai5" required><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil nilai dari input form
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];
        $nilai4 = $_POST['nilai4'];
        $nilai5 = $_POST['nilai5'];

        // Menghitung rata-rata
        $rataRata = ($nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5) / 5;

        // Menentukan status kelulusan
        if ($rataRata >= 60) {
            $statusKelulusan = "Lulus";
        } else {
            $statusKelulusan = "Tidak Lulus";
        }

        // Menampilkan hasil
        echo "<h3>Nilai Rata-Rata: " . number_format($rataRata, 2) . "</h3>";
        echo "<h3>Status Kelulusan: " . $statusKelulusan . "</h3>";
    }
    ?>
</body>
</html>