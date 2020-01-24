<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa yang Mengikuti (LCC)</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Anggota baru</h3>
    </header>

    <form action= "2_tampilan_insert.php" method="POST">

        <fieldset> 
		<p> 
		<label for="NIM">Nim:</label>
		<input type ="text" name="NIM" placeholder="Nim"/>
		</p>
		
	
        <p>
            <label for="nama_lengkap">Nama: </label>
            <input type="text" name="nama_lengkap" placeholder="nama lengkap" />
        </p>
		
		 <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
		
		<p>
		<label for="jurusan">Jurusan:</label>
		<select name="jurusan">
		<option> MI j </option>
		<option> AK j </option>
		<option> AB j </option>
		<option> HUMAS j </option>
		</select>
		</p>
		
		<p>
		<label for="no_hp">NO_HP:</label>
		<input type ="text" name="no_hp"/>
		</p>
		
		<p> 
		<label for="email">Email:</label>
		<input type ="text" name="email" placeholder="email anda"/>
		</p>
	
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
		
		<p>
            <label for="alamat_tinggal">Alamat Tinggal: </label>
            <textarea name="alamat_tinggal"></textarea>
        </p>
		<p>
            <label for="password">Password: </label>
            <input type="text" name="password" placeholder="password" />
        </p>
		
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Username" />
        </p>
		 
		
		
        <p>
            <input type="submit" value="submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>