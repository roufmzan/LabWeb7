# Nama : RO'UF MUHAMMAD FAUZAN
# NIM : 3124110157
# Kelas : TI.24.A1

**php_dasar.php**
<img width="1440" height="900" alt="Tangkapan Layar 2025-11-10 pukul 17 47 00" src="https://github.com/user-attachments/assets/31c129eb-e227-4f29-af8c-423163404c50" />


**Codingan**
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>

    <h2>Menggunakan Variable</h2>
    <?php
        $nim = "312410063";
        $nama = "Felix Amon Sitinjak";
        echo "NIM : $nim <br>"; 
        echo "Nama : $nama"; 
    ?>
</body>
</html>
```

**Penjelesan**
# Latihan PHP Dasar

Repository ini berisi kode latihan sederhana untuk mempelajari dasar-dasar PHP berdasarkan file `php_dasar.php`.

Proyek ini mencakup:
* Menyisipkan (embed) kode PHP di dalam file HTML.
* Mencetak output ke layar browser menggunakan `echo`.
* Deklarasi dan penggunaan *variable* dasar di PHP.

## Cara Menjalankan

Anda tidak bisa membuka file `.php` ini langsung di browser seperti file `.html` biasa. File PHP harus dieksekusi di sisi server.

### Prasyarat
* Web Server (seperti **Apache** atau **Nginx**)
* **PHP**
* Cara termudah untuk pemula adalah menginstal *bundle software* seperti **XAMPP**, **WAMP**, atau **MAMP** yang sudah berisi Apache dan PHP.

### Langkah-langkah Instalasi
1.  **Clone repository** ini ke komputer Anda.
    ```bash
    git clone [URL_REPOSITORY_ANDA]
    ```
2.  **Pindahkan folder** proyek ke dalam direktori *web root* server Anda.
    * Jika menggunakan XAMPP: pindahkan ke `C:\xampp\htdocs\`
    * Jika menggunakan WAMP: pindahkan ke `C:\wamp\www\`
3.  **Jalankan** web server Anda (misalnya, start Apache dari XAMPP Control Panel).
4.  **Buka browser** Anda dan akses file melalui URL `localhost`, contoh:
    ```
    http://localhost/nama-folder-proyek/php_dasar.php
    ```
    *(Ganti `nama-folder-proyek` dengan nama folder tempat Anda menyimpan file)*

## Tampilan Hasil

Setelah dijalankan dengan benar di server, halaman web akan menampilkan output berikut:

> # Belajar PHP Dasar
> Hello World
>
> ## Menggunakan Variable
> NIM : 312410063
> Nama : Felix Amon Sitinjak

**latihan2.php**

<img width="1440" height="900" alt="Tangkapan Layar 2025-11-10 pukul 17 46 47" src="https://github.com/user-attachments/assets/d2ef6ce1-7aeb-487d-b0ec-30d679e161c1" />

**Codingan**
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
        echo 'Selamat Datang ' . $_POST['nama'];
    ?>

    <?php 
    $gaji = 1000000; 
    $pajak = 0.1; 
    $thp = $gaji - ($gaji*$pajak); 
    echo "Gaji sebelum pajak = Rp. $gaji <br>"; 
    echo "Gaji yang dibawa pulang = Rp. $thp"; 
    ?> 

    <?php 
    $nama_hari = date("l"); 
    if ($nama_hari == "Sunday") { 
        echo "Minggu"; 
    } elseif ($nama_hari == "Monday") { 
        echo "Senin"; 
    } else { 
        echo "Selasa"; 
    } 
    ?> 

    <?php 
    $nama_hari = date("l"); 
    switch ($nama_hari) {
        case "Sunday": 
            echo "Minggu"; 
            break; 
        case "Monday": 
            echo "Senin"; 
            break; 
        case "Tuesday": 
            echo "Selasa"; 
            break; 
        default: 
            echo "Sabtu"; }
    ?>

    <?php 
    echo "Perulangan 1 sampai 10 <br />"; 
    for ($i=1; $i<=10; $i++) { 
        echo "Perulangan ke: " . $i . '<br />'; 
    } 
 
    echo "Perulangan Menurun dari 10 ke 1 <br />"; 
    for ($i=10; $i>=1; $i--) { 
        echo "Perulangan ke: " . $i . '<br />'; 
    } 
    ?> 

    <?php 
    echo "Perulangan 1 sampai 10 <br />"; 
    $i=1; 
    while ($i<=10) { 
        echo "Perulangan ke: " . $i . '<br />'; 
        $i++; 
    } 
    ?> 

    <?php 
    echo "Perulangan 1 sampai 10 <br />"; 
    $i=1; 
    do { 
        echo "Perulangan ke: " . $i . '<br />'; 
        $i++; 
    } while ($i<=10); 
    ?> 
</body>
</html>
```

**Penjelasan**
# Kumpulan Latihan PHP (latihan2.php)

Repository ini berisi file `latihan2.php` yang mendemonstrasikan berbagai konsep dasar, logika kontrol, dan perulangan dalam PHP.

## Konsep yang Dibahas

File ini mencakup beberapa contoh kode untuk:

* **Form Handling**: Menerima input dari form HTML sederhana menggunakan method `POST` dan menampilkannya dengan `$_POST`.
* **Operasi Aritmatika**: Menghitung variabel (contoh: menghitung gaji bersih setelah pajak).
* **Fungsi Bawaan (Built-in)**: Menggunakan fungsi `date("l")` untuk mendapatkan nama hari saat ini.
* **Logika Kondisional (If-Else)**: Menggunakan `if`, `elseif`, dan `else` untuk menerjemahkan nama hari ke Bahasa Indonesia.
* **Logika Kondisional (Switch)**: Alternatif untuk `if-else` menggunakan struktur `switch case` untuk menerjemahkan nama hari.
* **Perulangan (Loops)**:
    * `for` (contoh perulangan naik dari 1-10 dan turun dari 10-1).
    * `while` (contoh perulangan naik dari 1-10).
    * `do-while` (contoh perulangan naik dari 1-10).

## Cara Menjalankan

File PHP **tidak bisa** dibuka langsung di browser. File ini harus dieksekusi oleh server.

### Prasyarat
* Web Server (seperti **Apache**)
* **PHP**
* Cara termudah adalah menginstal *bundle software* seperti **XAMPP** atau **WAMP** yang sudah berisi keduanya.

### Langkah-langkah
1.  **Pindahkan file** `latihan2.php` ke dalam direktori *web root* server Anda.
    * Jika menggunakan XAMPP: pindahkan ke `C:\xampp\htdocs\`
    * Jika menggunakan WAMP: pindahkan ke `C:\wamp\www\`
    *(Anda bisa membuat subfolder di dalamnya, misal: `htdocs/proyek-php/`)*
2.  **Jalankan** web server Anda (misalnya, start Apache dari XAMPP Control Panel).
3.  **Buka browser** Anda dan akses file melalui URL `localhost`:
    ```
    http://localhost/latihan2.php
    ```
    *(Atau `http://localhost/nama-folder-anda/latihan2.php` jika Anda menyimpannya di subfolder)*

## Catatan Penting: Error "Undefined index: nama"

Saat Anda pertama kali membuka halaman ini di browser, Anda **pasti** akan melihat pesan *Warning* atau *Notice* seperti:

`Notice: Undefined index: nama in ...\latihan2.php on line ...`

### Kenapa Ini Terjadi?
Ini **bukan** error yang merusak. Ini terjadi karena kode `echo 'Selamat Datang ' . $_POST['nama'];` langsung dijalankan saat halaman dimuat.

Pada saat itu, Anda belum mengirimkan (submit) form apa pun, sehingga `$_POST['nama']` memang belum ada (kosong/undefined).

### Solusi
Pesan *Warning* itu akan **hilang** setelah Anda mengetikkan nama di form dan menekan tombol "Kirim", karena saat itulah `$_POST['nama']` baru memiliki nilai.

Dalam kode di dunia nyata (produksi), hal ini biasanya ditangani dengan `isset()` untuk memeriksa apakah variabel tersebut sudah ada sebelum digunakan:

```php
<?php
    if (isset($_POST['nama'])) {
        echo 'Selamat Datang ' . $_POST['nama'];
    }
?>
```
**Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan 
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung 
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang 
berbeda-beda sesuai pilihan pekerjaan**

<img width="1440" height="900" alt="Tangkapan Layar 2025-11-10 pukul 17 45 43" src="https://github.com/user-attachments/assets/874cc6ae-66ca-4e9b-85ef-d865ec01f000" />

**Codingan**
```
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
```
**Penjelasan**
# Latihan PHP - Form Input Data Diri

Proyek ini merupakan latihan dasar pemrograman PHP yang menampilkan **form input sederhana** untuk memasukkan:
- Nama
- Tanggal Lahir
- Pekerjaan

Setelah data dikirim, sistem akan menghitung **umur otomatis berdasarkan tanggal lahir**, dan menampilkan **gaji sesuai pilihan pekerjaan**.

---

## Cara Menjalankan

1. Pastikan kamu sudah menginstal **XAMPP**
2. Simpan file `latihan.php` di dalam folder:


---

## Fitur Program

- Input nama, tanggal lahir, dan pekerjaan
- Hitung umur otomatis dari tanggal lahir
- Tampilkan gaji berdasarkan pekerjaan
- Tampilan sederhana berbasis HTML + PHP
