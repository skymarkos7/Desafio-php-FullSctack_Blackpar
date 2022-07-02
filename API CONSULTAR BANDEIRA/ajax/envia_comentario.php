<?php
	include("../inc/conn.php");
	
	$sqlInsertOpiniao = "insert into tb_comentarios (autor, comentario, id_festa, data) values ('".$_REQUEST["nome"]."','".$_REQUEST["opiniao"]."','".$_REQUEST["festaId"]."',NOW()) ";
	$resInsertOpiniao = mysqli_query($link,$sqlInsertOpiniao) or die(mysqli_error());
	
	$id_insert = mysqli_insert_id($link);
	
	$sqlListComments = "select *,DATE_FORMAT(DATA,'%d/%m/%Y %H:%i') AS dataFrm from tb_comentarios where id='".$id_insert."'";
	$resListComments = mysqli_query($link,$sqlListComments) or die(mysqli_error());
	$fetchListComments = mysqli_fetch_array($resListComments);
	 
	
?>{"sucess":"ok","id":"<?=$id_insert?>","autor":"<?=$fetchListComments["autor"]?>","opiniao":"<?=$fetchListComments["comentario"]?>","data":"<?=$fetchListComments["dataFrm"]?>","festaId":"<?=$fetchListComments["id_festa"]?>"}