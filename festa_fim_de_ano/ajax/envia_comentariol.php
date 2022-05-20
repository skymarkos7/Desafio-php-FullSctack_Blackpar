<?php
	include("../inc/conn.php");
	
	$sqlInsertOpiniao = "insert into tb_comentarios (autor, id_festa, opniao, data) values ('".$_REQUEST["autor"]."','".$_REQUEST["id_festa"]."','".$_REQUEST["opiniao"]."',NOW()) ";
	$resInsertOpiniao = mysqli_query($link,$sqlInsertOpiniao);
	
	
	$sqlListComments = "select *,STR_TO_DATE(data, '%d/%m/%Y') as dataFrm from tb_comentarios where id='".mysqli_insert_id()."'";
	$resListComments = mysqli_query($link,$sqlListComments);
	$fetchListComments = mysqli_fetch_array($resListComments);
	 
	
?>{"autor":"<?=$fetchListComments["autor"]?>","opiniao":"<?=$fetchListComments["comentario"]?>","data":"<?=$fetchListComments["dataFrm"]?>"}







