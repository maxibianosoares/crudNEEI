<?php
//komesa prosesu aumenta dadus

//cek uluk lai, karik butaun aumenta ita klik
if(isset($_POST['aumenta'])){
	//include ka atu halo koneksaun ba iha baze dadus
	include('koneksaun.php');
	
	//karik butaun aumenta ita klik duni, entaun nian prosesu sei la'o
	$nre		= $_POST['nre'];	//ita halo variavel $nre ho nian dadus hetan input husi nre
	$naran		= $_POST['naran'];	//halo variavel $naran no nian dadus input husi variavel rasik
	$semestre		= $_POST['semestre'];	//halo variavel $semestre no nian dadus input husi dropdown semestre
	$departamentu	= $_POST['departamentu'];	//halo variavel $departamentu no nian dadu input husi dropdown departamentu
	
	//halo query ho komando INSERT INTO atu hatama dadus ba iha database
	$input = mysql_query("INSERT INTO estudante VALUES(NULL, '$nre', '$naran', '$semestre', '$departamentu')") or die(mysql_error());
	
	//karik input query susessu 
	if($input){
		
		echo 'dadus aumenta ho susesu! ';		//pesan karik prosesu aumenta ho susesu
		echo '<a href="aumenta.php">Fila</a>';	//halo link atu fila fali ba pajina aumenta
	}else{
		
		echo 'dadus aumenta falla! ';		//pesan karik dadus aumenta ho falla
		echo '<a href="aumenta.php">Fila</a>';	//halo link atu fila fali ba pajina aumenta
	}
}else{	//karik la detekta ba butaun aumenta kuandu klik

	//redirect ka fila fali ba iha pajina aumenta 
	echo '<script>window.history.back()</script>';

}
?>