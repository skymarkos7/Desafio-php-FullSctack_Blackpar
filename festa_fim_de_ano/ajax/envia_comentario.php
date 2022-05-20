<?php


$result_cliente = "SELECT * FROM tb_comentarios WHERE id_festa='FESTA ANOS 80'  ORDER BY id DESC";
$resultado_cliente = mysqli_query($link, $result_cliente);

?>

<?php foreach($resultado_cliente as $result){  ?>


	
	<p>Nome: <?php echo $result["autor"]  ?> </p>
	<p>Data: <?php echo $result["data"]  ?> </p>
	<p>Comentario: <?php  echo $result["opniao"]  ?> </p>	
	<p>id festa: <?php echo $result["id_festa"]  ?> </p>

<?php } ?>