<?php

include 'koneksi.php';
$nimx = $_GET['NIM'];
$query =mysqli_query($koneksi,"SELECT * FROM mahasiswa where NIM='$nimx'");
$m = mysqli_fetch_array($query);
?>


<form method="POST" action="2_update_data.php">
<p> NIM:<input type="text" name="NIM" value="<?php echo $m['NIM']; ?>"></p>
<p> Nama Lengkap :<input type="text" name="nama_lengkap" value="<?php echo $m['nama_lengkap']; ?>"></p>
<p> Jurusan:
	<label for="jurusan">Jurusan:</label>
		<select name="jurusan">
		<option> MI j </option>
		<option> AK j </option>
		<option> AB j </option>
		<option> HUMAS j </option>
		</select>
<p> Gander:
	<input type="radio" name="jk" value="laki-laki" <?php if ($m['jk']=="laki-laki") {echo "checked";}?>>laki-laki
	<input type="radio" name="jk" value="perempuan" <?php if ($m['jk']=="perempuan") {echo "checked";}?>>perempuan
	
<p>NO_HP :<input type="text" name="no_hp" value="<?php echo $m['no_hp']; ?>"></p>
<p>Email :<input type="text" name="email" value="<?php echo $m['email']; ?>"></p>
<p>Alamat tinggal :<input type="text" name="alamat_tinggal" value="<?php echo $m['alamat_tinggal']; ?>"></p>

			<label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
	</p>
<p> Username: <input type="text" name="username" value="<?php echo $m['username']; ?>"> </p>

<p> Password: <input type="text" name="password" value="<?php echo $m['password']; ?>"> </p>
<input type="submit" name="submit" value="UPDATE">

</form>

