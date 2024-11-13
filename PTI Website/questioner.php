<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questioner Supplier PT PGP</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <h2>SIVASAK</h2>
        <li><img src="pb.png" alt=""><a href="pendaftaran.php">Pendaftaran Vendor</a></li>
        <li><img src="file.png" alt=""><a href="questioner.php">Questioner</a></li>
        <li><img src="sh.png" alt=""><a href="pengumumanpemenang.php">Pengumuman Pemenang Tender</a></li>
    </ul>
</div>

<!-- Navbar -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Calon Vendor</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Questioner Form -->
<div class="content">
    <h2 class="form-title">Questioner Supplier PT PGP</h2>
    <div class="form-container-kuisoner">
        <form action="proses-questioner-supplier.php" method="POST">
            
            <!-- Pertanyaan 1 -->
<label for="pengalaman_bisnis">1. Apakah bisnis utama anda yang sudah berjalan berkaitan dengan barang atau jasa yang akan dipasok?</label>
<select name="pengalaman_bisnis" id="pengalaman_bisnis" required>
    <option value="">Pilih pengalaman</option>
    <option value=">5 tahun">>5 tahun</option>
    <option value="3-5 tahun">3-5 tahun</option>
    <option value="1-3 tahun">1-3 tahun</option>
    <option value="<1 tahun">Kurang dari 1 tahun</option>
    <option value="bukan bisnis utama">Bukan bisnis utama</option>
</select>

<!-- Pertanyaan 2 -->
<label for="distributor_resmi">2. Apakah perusahaan anda merupakan distributor resmi dari barang atau jasa yang anda pasok?</label>
<select name="distributor_resmi" id="distributor_resmi" required>
    <option value="">Pilih jawaban</option>
    <option value="ya">Ya</option>
    <option value="tidak">Tidak</option>
</select>

<!-- Pertanyaan 3 -->
<label for="rangkaian_bisnis">3. Jelaskan rangkaian bisnis anda sampai ke PT PGP</label>
<select name="rangkaian_bisnis" id="rangkaian_bisnis" required>
    <option value="">Pilih rangkaian bisnis</option>
    <option value="langsung">Langsung dari Sumber/Pabrik</option>
    <option value="tidak langsung">Tidak Langsung</option>
    <option value="surat penunjukan">Ada surat penunjukan dari manufacture/sumber</option>
    <option value="tidak ada surat">Tidak ada surat penunjukan dari manufacture/sumber</option>
</select>

<!-- Pertanyaan 4 -->
<label for="spesifikasi_produk">4. Apa spesifikasi produk / jasa anda?</label>
<textarea name="spesifikasi_produk" id="spesifikasi_produk" rows="4" required></textarea>

<!-- Pertanyaan 5 -->
<label for="harga_kualitas_terbaik">5. Apakah perusahaan anda dapat memberikan harga dan kualitas terbaik dari barang / jasa yang anda pasok?</label>
<select name="harga_kualitas_terbaik" id="harga_kualitas_terbaik" required>
    <option value="">Pilih jawaban</option>
    <option value="ya">Ya</option>
    <option value="tidak">Tidak</option>
</select>

<!-- Pertanyaan 6 -->
<label for="jaminan_klaim">6. Apakah perusahaan anda memiliki jaminan klaim terhadap barang / jasa yang anda pasok?</label>
<select name="jaminan_klaim" id="jaminan_klaim" required>
    <option value="">Pilih jawaban</option>
    <option value="ya">Ya</option>
    <option value="tidak">Tidak</option>
</select>

<!-- Pertanyaan 7 -->
<label for="ketepatan_waktu">7. Apakah perusahaan anda dapat memberikan ketepatan waktu dalam pengiriman dari barang / jasa yang kami pesan?</label>
<select name="ketepatan_waktu" id="ketepatan_waktu" required>
    <option value="">Pilih jawaban</option>
    <option value="ya">Ya</option>
    <option value="tidak">Tidak</option>
</select>

<!-- Pertanyaan 8 -->
<label for="peristiwa_penting">8. Apakah ada peristiwa penting menyangkut sertifikasi produk/ jasa atau sistem manajemen, penghargaan, dan lain-lain yang diterima oleh perusahaan anda?</label>
<select name="peristiwa_penting" id="peristiwa_penting" required>
    <option value="">Pilih jawaban</option>
    <option value="ada">Ada (jelaskan di bawah)</option>
    <option value="tidak ada">Tidak ada</option>
</select>
<textarea name="keterangan_peristiwa" id="keterangan_peristiwa" rows="3" placeholder="Jika ada, jelaskan di sini"></textarea>

<!-- Pertanyaan 9 -->
<label for="penjualan_ekspor">9. Apakah ada penjualan / pekerjaan ekspor produk / jasa anda?</label>
<select name="penjualan_ekspor" id="penjualan_ekspor" required>
    <option value="">Pilih jawaban</option>
    <option value="ada">Ada</option>
    <option value="tidak ada">Tidak ada</option>
</select>

<!-- Pertanyaan 10 -->
<label for="kontrak_jangka_panjang">10. Berapa persen pelanggan anda yang mempunyai kontrak jangka panjang? (sebutkan)</label>
<input type="text" name="kontrak_jangka_panjang" id="kontrak_jangka_panjang" placeholder="Isi persentase (%)" required>

<!-- Pertanyaan 11 -->
<label for="nama_pelanggan">11. Siapa saja pelanggan potensial dan utama anda (sebutkan)</label>
<input type="text" name="nama_pelanggan" id="nama_pelanggan" required>

<!-- Pertanyaan 12 -->
<label for="fasilitas_transportasi">12. Apakah anda memiliki fasilitas transportasi sendiri?</label>
<select name="fasilitas_transportasi" id="fasilitas_transportasi" required>
    <option value="">Pilih jawaban</option>
    <option value="ya">Ya</option>
    <option value="truk atau sejenisnya">Truk atau sejenisnya</option>
    <option value="tidak">Tidak</option>
</select>

<!-- Pertanyaan 13 -->
<label for="gudang_sendiri">13. Apakah perusahaan anda memiliki gudang penyimpanan barang / pool kendaraan sendiri?</label>
<select name="gudang_sendiri" id="gudang_sendiri" required>
    <option value="">Pilih jawaban</option>
    <option value="ada">Ada</option>
    <option value="tidak ada">Tidak ada</option>
</select>

<!-- Pertanyaan 14 -->
<label for="rencana_pengembangan">14. Apakah ada rencana pengembangan usaha?</label>
<select name="rencana_pengembangan" id="rencana_pengembangan" required>
    <option value="">Pilih jawaban</option>
    <option value="ada">Ada (jelaskan di bawah)</option>
    <option value="tidak ada">Tidak ada (sebutkan alasan di bawah)</option>
</select>
<textarea name="keterangan_pengembangan" id="keterangan_pengembangan" rows="3" placeholder="Jika ada, jelaskan di sini atau sebutkan alasannya"></textarea>


            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
