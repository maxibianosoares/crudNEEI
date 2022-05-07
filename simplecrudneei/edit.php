<!DOCTYPE html>
<html>
<head>
	<title>Aplikasaun CRUD simples</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="aumenta.php">aumenta dadus</a></p>
	
	<h3>Edit dadus estudante</h3>
	
	<?php
	//prosesu foti dadus iha BD atu fo sai iha form edit tuir id ne'ebe mak hetan iha GET id -> edit.php?id=id
	
	//include ka bolu file koneksaun iha database
	include('koneksaun.php');
	
	//halo variavel $id ne'ebe mak nian valor husi URL GET id -> edit.php?id=id
	$id = $_GET['id'];
	
	//halo query ho BD ho komandu SELECT tabela ho kondisaun WHERE id = '$id'
	$show = mysql_query("SELECT * FROM estudante WHERE id='$id'");
	
	//cek karik dadus rezulta husi query kalae
	if(mysql_num_rows($show) == 0){
		
		//karik la iha dadus ne'ebe mak la hanesan maka maka sei pasa kedas ba iha pajina baranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//karik hetan dadus, entaun kria variavel $dadus
		$dadus = mysql_fetch_assoc($show);	//rai dadus iha BD ne'ebe mak sei edit iha form script krik ne'e
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- halo input hidden no nia valor mak id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>nre</td>
				<td>:</td>
				<td><input type="text" name="nre" value="<?php echo $dadus['nre']; ?>" required></td>	<!-- value foti husi rezultadu query -->
			</tr>
			<tr>
				<td>naran kompletu</td>
				<td>:</td>
				<td><input type="text" name="naran" size="30" value="<?php echo $dadus['naran']; ?>" required></td> <!-- value foti husi rezultadu query -->
			</tr>
			<tr>
				<td>semestre</td>
				<td>:</td>
				<td>
					<select name="semestre" required>
						<option value="">Hili semestre</option>
						<option value="I" <?php if($dadus['semestre'] == 'I'){ echo 'selected'; } ?>>I</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="II" <?php if($dadus['semestre'] == 'II'){ echo 'selected'; } ?>>II</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="III" <?php if($dadus['semestre'] == 'III'){ echo 'selected'; } ?>>III</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="IV" <?php if($dadus['semestre'] == 'IV'){ echo 'selected'; } ?>>IV</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="V" <?php if($dadus['semestre'] == 'V'){ echo 'selected'; } ?>>V</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="VI" <?php if($dadus['semestre'] == 'VI'){ echo 'selected'; } ?>>VI</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="VII" <?php if($dadus['semestre'] == 'VII'){ echo 'selected'; } ?>>VII</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="VII" <?php if($dadus['semestre'] == 'VIII'){ echo 'selected'; } ?>>VIII</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="extra" <?php if($dadus['semestre'] == 'extra'){ echo 'selected'; } ?>>extra</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
					</select>
				</td>
			</tr>
			<tr>
				<td>departamentu</td>
				<td>:</td>
				<td>
					<select name="departamentu" required>
						<option value="">Hili departamentu</option>
						<option value="Enjenaria Mekanika" <?php if($dadus['departamentu'] == 'Enjenaria Mekanika'){ echo 'selected'; } ?>>Enjenaria Mekanika</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="Enjenaria Informatika" <?php if($dadus['departamentu'] == 'Enjenaria Informatika'){ echo 'selected'; } ?>>Enjenaria Informatika</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="Enjenaria Eltronika eletrica" <?php if($dadus['departamentu'] == 'Enjenaria Eltronika eletrica'){ echo 'selected'; } ?>>Enjenaria Eltronika eletrica</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="Enjenaria Sivil" <?php if($dadus['departamentu'] == 'Enjenaria Sivil'){ echo 'selected'; } ?>>Enjenaria Sivil</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
						<option value="Jeolojia e Petroleo" <?php if($dadus['departamentu'] == 'Jeolojia e Petroleo'){ echo 'selected'; } ?>>Jeolojia e Petroleo</option>	<!-- karik dadus iha BD hanesan ho values, entaun sei eskolla ba nia -->
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="Rai" value="Rai"></td>
			</tr>
		</table>
	</form>
</body>
</html>