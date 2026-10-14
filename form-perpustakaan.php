<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Rak Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
        .card { background: white; padding: 20px; max-width: 400px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin: auto; }
        select, button { width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px; }
        button { background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #218838; }
        .hasil { margin-top: 15px; padding: 15px; background: #e2e3e5; border-left: 5px solid #6c757d; border-radius: 3px; }
    </style>
</head>
<body>

<div class="card">
    <h3 style="text-align: center;">Cari Lokasi Buku 🔍</h3>
    <form method="POST">
        <label for="buku">Pilih Kategori/Jenis Buku:</label>
        <select name="buku" id="buku" required>
            <option value="" disabled selected>-- Pilih Buku --</option>
            <option value="dongeng">Dongeng & Cerita Anak</option>
            <option value="sejarah">Sejarah & Biografi</option>
            <option value="sains">Sains & Pengetahuan Alam</option>
            <option value="novel">Novel & Fiksi</option>
            <option value="komik">Komik & Manga</option>
            <option value="agama">Agama & Spiritual</option>
            <option value="kamus">Kamus & Ensiklopedia</option>
            <option value="komputer">Teknologi & Komputer</option>
        </select>
        <button type="submit">Cari Lokasi Rak</button>
    </form>

    <?php
    // Cek jika tombol submit ditekan
    if (isset($_POST['buku'])) {
        $buku = $_POST['buku'];
        
        // Logika penentuan lokasi rak
        switch ($buku) {
            case "dongeng":
                $lokasi = "Rak Atas No 3 (Lorong Anak)";
                break;
            case "sejarah":
                $lokasi = "Rak Tengah No 1 (Lorong Sosial)";
                break;
            case "sains":
                $lokasi = "Rak Bawah No 5 (Lorong IPA)";
                break;
            case "novel":
                $lokasi = "Rak Atas No 1 (Lorong Sastra)";
                break;
            case "komik":
                $lokasi = "Rak Tengah No 4 (Lorong Hiburan)";
                break;
            case "agama":
                $lokasi = "Rak Paling Atas No 2 (Lorong Religi)";
                break;
            case "kamus":
                $lokasi = "Rak Khusus Referensi (Dekat Meja Petugas)";
                break;
            case "komputer":
                $lokasi = "Rak Tengah No 7 (Lorong IT & RPL)";
                break;
            default:
                $lokasi = "Lokasi tidak ditemukan.";
        }

        // Tampilkan letak rak
        echo "<div class='hasil'>";
        echo "Buku pilihanmu berada di:<br>";
        echo "<strong>$lokasi</strong>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>