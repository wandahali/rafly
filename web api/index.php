<!DOCTYPE html>
<html>
<head>
	<title>Formulir inimah buat template we wk</title>
	<style>
		body {
            background-image: url('gambarapi.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
}
		form {
			background-color: white;
			padding: 20px;
			margin: 50px auto;
			width: 500px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
			font-weight: bold;
			color: #2d3e50;
			margin-bottom: 20px;
		}

		input[type="text"], input[type="email"], select, textarea {
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			font-size: 16px;
			font-family: Arial, sans-serif;
		}

		label {
			font-weight: bold;
			color: #2d3e50;
			display: block;
			margin-bottom: 10px;
		}

		input[type="submit"] {
			background-color: #2d3e50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}

		input[type="submit"]:hover {
			background-color: #34495e;
		}
	</style>
</head>
<body>
	<form>
		<h1>Formulir Pendaftaran milad smait mahmudiyah</h1>

		<label for="nama">Nama Lengkap</label>
	<input type="text" id="nama" name="nama" required 

	<label for="Kelas">kelas</label>
	<select input type="text" id="kelas" name="kelas">
<option value="X IPA PA">X IPA PA</option>
			<option value="X IPA PI">X IPA PI</option>
<option value="X IPS PA">X IPS PA</option>
			<option value="X IPS PI">X IPS PI</option>
<option value="XI IPA PA">XI IPA PA</option>
			<option value="XI IPA PI">XI IPA PI</option>
<option value="XI IPS PA">XI IPS PA</option>
			<option value="XI IPS PI">XI IPS PI</option>
<option value="XII IPA PA">XII IPA PA</option>
			<option value="XII IPA PI">XII IPA PI</option>
<option value="XII IPS PA">XII IPS PA</option>
			<option value="XII IPS PI">XII IPS PI</option>

		</select>

		<label for="mata lomba">mata lomba</label>
		<select id="text" name="mata lomba">
			<option value="MTQ">MTQ</option>
			<option value="Tahfidzul Qur'an">Tahfidzul Qur'an</option>
	<option value="Qira'atul Qur'an">Qira'atul Qur'an</option>
			<option value="shalawat">shalawat</option>
	<option value="Pidato 4 bahasa">pidato 4 bahasa</option>
			<option value="Lomba cerdas cermat">Lomba cerdas cermat</option>
<option value="Presentasi">presentasi</option>
			<option value="menghias tumpeng">menghias tumpeng</option>
		</select>

		<label for="pesan">Pesan atau saran</label>
		<textarea id="pesan" name="pesan" required></textarea>

		<input type="submit" value="Kirim">
	</form>
</body>
</html