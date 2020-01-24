<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
</head>

<body>
    <header>
        <h1>Data Anggota LCC</h1>
        
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="2_input_data_mahasiswa.php">Data Mahasiswa yang Ikut UKM (LCC)</a></li>
            <li><a href="4_input_nilai_ukm.php">Hasil Ujian</a></li>
			  <li><a href="3_tabel_ukm.php">Table UKM</a></li>
        </ul>
    </nav>

    </body>
</html>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
<a href = "http://localhost/TheEvent/TheEvent/index.php">kembali</a>