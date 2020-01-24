<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Mahasiswa yang Mengikuti Ujian UKM (LCC)</title>
</head>

<body>
    <header>
        <h3>Daftar nilai mahasiswa yang mengikuti ujian ukm </h3>
    </header>

    <form action= "4_tampilan_insert_nilai.php" method="POST">

        <fieldset> 
		<p> 
		<label for="id_nilai">ID_Nilai:</label>
		<input type ="text" name="id_nilai" placeholder="id_nilai"/>
		</p>
		
	
        <p>
            <label for="NIM">NIM: </label>
            <input type="text" name="NIM" placeholder="NIM" />
        </p>
		
		
		  <p>
            <label for="nilai_ujian">Nilai Ujian: </label>
            <input type="text" name="nilai_ujian" placeholder="nilai_ujian" />
        </p>
		
		
		<p>
            <label for="taggal_ujian">Tanggal Ujian: </label>
            <input type="date" name="taggal_ujian" placeholder="tanggal_ujian" />
        </p>
		
		<p>
            <label for="ukm">UKM: </label>
            <input type="text" name="ukm" placeholder="ukm" />
        </p>
		<p>
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" placeholder="keterangan" />
        </p>
	
        <p>
            <input type="submit" value="submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>