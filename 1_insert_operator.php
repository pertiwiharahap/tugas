<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa yang Mengikuti (LCC)</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Anggota baru</h3>
    </header>

    <form action= "1_tampilan_insert_operator.php" method="POST">

        <fieldset> 
		<p> 
		<label for="id_operator">ID_Operator:</label>
		<input type ="text" name="id_operator" placeholder="id_operator"/>
		</p>
		
	
        <p>
            <label for="nama_operator">Nama Operator: </label>
            <input type="text" name="nama_operator" placeholder="nama_operator" />
        </p>
		
		  <p>
            <label for="status">Status: </label>
            <input type="text" name="status" placeholder="status" />
        </p>
		
		
		<p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="username" />
        </p>
		
		<p>
            <label for="password">Password: </label>
            <input type="text" name="password" placeholder="password" />
        </p>
	
        <p>
            <input type="submit" value="submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>