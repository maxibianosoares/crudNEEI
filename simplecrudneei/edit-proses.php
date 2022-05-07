<?php
//komesa proses edit dadus

//cek, karik butaun 
if(isset($_POST['Rai'])){
	
	//include ka atu halo koneksaun ba baze dadus
	include('koneksaun.php');
	
	//karik buataun aumenta klik duni entaun nian prosesu sei aumenta
	$id			= $_POST['id'];	//halo variavel $id no nia mai husi input hidden id nian
	$nre		= $_POST['nre'];	//halo variavel $nre no nia mai husi input nre nian
	$naran		= $_POST['naran'];	//halo variavel $naran no nian mai husi input naran kompletu nian
	$semestre		= $_POST['semestre'];	//naran variavel $semestre no nia mai husi input dropdown semestre nian
	$departamentu	= $_POST['departamentu'];	//kria variavel $departamentu no nia mai husi input dropdown departamentu nian
	
	//kria query ho komando UPDATE atu update dadus ba iha BD ho nian kondisaun WHERE id='$id' <- foti husi input hidden id nian
	$update = mysql_query("UPDATE estudante SET nre='$nre', naran='$naran', semestre='$semestre', departamentu='$departamentu' WHERE id='$id'") or die(mysql_error());
	
	//karik query update susesu
	if($update){
		
		echo 'dadus Rai ho susesu! ';		//pesan karik dadus rai ho susesu
		echo '<a href="edit.php?id='.$id.'">Fila</a>';	//halo link atu fila fali ba iha pajina edit
		
	}else{
		
		echo 'rai dadus la susesu! ';		//mensajen karik rai dadus falla
		echo '<a href="edit.php?id='.$id.'">Fila</a>';	//halo link atu fila ba iha pajina edit
		
	}

}else{	//karik hetan detekta husi butaun rai ita klik

	//redirect atu fo fila ba iha pajina edit nian
	echo '<script>window.history.back()</script>';

}
?>