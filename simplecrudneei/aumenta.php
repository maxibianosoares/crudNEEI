<!DOCTYPE html>
<html>
<head>
	<title>Aplikasaun CRUD simples</title>
</head>
<body>
	<h2>CRUD simples</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="aumenta.php">aumenta dadus</a></p>
	
	<h3>aumenta dadus estudante</h3>
	
	<form action="aumenta-proses.php" method="post">
		<table cellpadding="5" cellspacing="0" border = "1">
			<tr>
				<td>nre</td>
				<td>:</td>
				<td><input type="text" name="nre" required></td>
			</tr>
			<tr>
				<td>naran kompletu</td>
				<td>:</td>
				<td><input type="text" name="naran" size="30" required></td>
			</tr>
			<tr>
				<td>semestre</td>
				<td>:</td>
				<td>
					<select name="semestre" required>
						<option value="">Hili semestre</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
						<option value="VI">VI</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="extra">extra</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>departamentu</td>
				<td>:</td>
				<td>
					<select name="departamentu" required>
						<option value="">Hili departamentu</option>
						<option value="Enjenaria Mekanika">Enjenaria Mekanika</option>
						<option value="Enjenaria Informatika">Enjenaria Informatika</option>
						<option value="Enjenaria Eltronika eletrica">Enjenaria Eltronika eletrica</option>
						<option value="Enjenaria Sivil">Enjenaria Sivil</option>
						<option value="Jeolojia e Petroleo">Jeolojia e Petroleo</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="aumenta" value="aumenta"></td>
			</tr>
		</table>
	</form>
</body>
</html>