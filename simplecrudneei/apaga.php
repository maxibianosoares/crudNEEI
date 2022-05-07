<?php
//komesa prosesu apaga dadus

//cek tiha, karik url ne'ebe atu apaga ne'e loos ona GET id -> apaga.php?id=id
if(isset($_GET['id'])){
	
	//bolu file koneksaun BD nian
	include('koneksaun.php');
	
	//halo  variavel $id ne'ebe mak hetan husi URL GET id -> apaga.php?id=id
	$id = $_GET['id'];
	
	//cek iha BD karik iha dadus estudante ho nian url id='$id'
	$cek = mysql_query("SELECT id FROM estudante WHERE id='$id'") or die(mysql_error());
	
	//karik dadus atu apaga ne'e la iha
	if(mysql_num_rows($cek) == 0){
		
		//karik dadus la iha, entaun redirect ka fila fali ba iha pajina baranda index.php
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//karik dadus iha BD, entaun ita bolu query DELETE table estudante ho nian kondisaun WHERE id='$id'
		$del = mysql_query("DELETE FROM estudante WHERE id='$id'");
		
		//karik DELETE susesu
		if($del){
			
			echo 'dadus estudante hamoos ona! ';		//mensajen karik dadus hamoos ona
			echo '<a href="index.php">Fila</a>';	//halo link atu fila ba iha pajina index.php ka baranda
			
		}else{
			
			echo 'dadus la hamoos! ';		//mensajen karik apaga falla 
			echo '<a href="index.php">Fila</a>';	//link atu fila ba pajina baranda
		
		}
		
	}
	
}else{
	
	//redirect ka fila otomatiku ba pajina baranda
	echo '<script>window.history.back()</script>';
	
}
?>