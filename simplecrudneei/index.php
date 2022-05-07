<!DOCTYPE html>
<html>
<head>
	<title>Aplikasaun CRUD simples</title>
</head>
<body>
	<h2>CRUD simples</h2>
	
	<p><a href="index.php">Baranda</a> / <a href="aumenta.php">amenta dadus</a></p>
	
	<h3>dadus estudante</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#fff00">
			<th>No.</th>
			<th>NRE</th>
			<th>Naran kompletu</th>
			<th>Semestre</th>
			<th>Departamentu</th>
			<th>Opsaun</th>
		</tr>
		
		<?php
		//iclude file koneksaun ba baze dadus
		include('koneksaun.php');
		
		//query ba bazedadus ho SELECT table estudante tuir NRE ne'ebe boot liu
		$query = mysql_query("SELECT * FROM estudante ORDER BY nre DESC") or die(mysql_error());
		
		//cek karik dadus iha leten ne'e mamuk
		if(mysql_num_rows($query) == 0){	//nia funsaun atu lee karik dadus mamuk
			
			//Karik dadus mamuk sei fo info
			echo '<tr><td colspan="6">dadus la iha!</td></tr>';
			
		}else{	//iha ne'e lee ba baze dadus ne'ebe karik la mamuk
			
			//karik dadus la mamuk, entaun sei halo repetisaun while
			$no = 1;	//kria variavel $no atu halo numeru tuir urutan
			while($dadus = mysql_fetch_assoc($query)){	
			//repetisaun while hodi halo variavel $dadus ne'ebe mak sei foti dadus iha BD
				
				//fo sai row iha BD
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//fo sai numeru tuir malu
					echo '<td>'.$dadus['nre'].'</td>';	//fo sai NRE husi BD
					echo '<td>'.$dadus['naran'].'</td>';	//fo sai naran husi BD
					echo '<td>'.$dadus['semestre'].'</td>';	//fo sai dadus semestre iha BD
					echo '<td>'.$dadus['departamentu'].'</td>';	//fo sai departamentu iha BD
echo '<td><a href="edit.php?id='.$dadus['id'].'">Edit</a> /
 <a href="apaga.php?id='.$dadus['id'].'" onclick="return confirm(\'tebes ka?\')">Apaga</a></td>';	
//fo sai edit no apaga ne'ebe mak iha link idaidak iha GET id -> ?id=id
				echo '</tr>';
				
				$no++;	//fo sai numeru tuir row
				
			}
			
		}
		?>
	</table>
</body>
</html>