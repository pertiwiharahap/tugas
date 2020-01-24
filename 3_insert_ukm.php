<!DOCTYPE html>
<html>
<head>
    <title>TABLE UKM</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Anggota baru</h3>
    </header>

    <form action= "3_tampilan_insert_ukm.php" method="POST">

        <fieldset> 
		<p> 
		<label for="id_ukm">Id_UKM:</label>
		<input type ="text" name="id_ukm" placeholder="id_ukm"/>
		</p>
		
	
        <p>
            <label for="ukm">UKM: </label>
            <input type="text" name="ukm" placeholder="ukm" />
        </p> 
		
		
        <p>
            <input type="submit" value="submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>