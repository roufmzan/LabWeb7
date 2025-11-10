<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data dan Gaji</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Pekerjaan: </label>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Pegawai">Pegawai Kantoran</option>
        </select><br><br>

        <input type="submit" value="Tampilkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $lahir = new DateTime($tanggal_lahir);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir)->y;

        // Tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 10000000;
                break;
            case "Desainer":
                $gaji = 8000000;
                break;
            case "Guru":
                $gaji = 7000000;
                break;
            case "Dokter":
                $gaji = 15000000;
                break;
            case "Pegawai":
                $gaji = 9000000;
                break;
            default:
                $gaji = 0;
        }

        // Tampilkan hasil
        echo "<h3>Hasil Data:</h3>";
        echo "Nama: <strong>$nama</strong><br>";
        echo "Tanggal Lahir: <strong>$tanggal_lahir</strong><br>";
        echo "Umur: <strong>$umur tahun</strong><br>";
        echo "Pekerjaan: <strong>$pekerjaan</strong><br>";
        echo "Gaji: <strong>Rp " . number_format($gaji, 0, ',', '.') . "</strong><br>";
    }
    ?>
</body>
</html>
