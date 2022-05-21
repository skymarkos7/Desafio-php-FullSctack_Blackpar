<?php
include("inc/conn.php"); 


$result_cliente = "SELECT * FROM tb_comentarios WHERE id_festa = '$festa' ORDER BY id ASC";
$resultado_cliente = mysqli_query($link, $result_cliente);

?>

<?php foreach($resultado_cliente as $result){  ?>


	<div><b><?php echo $result["autor"]  ?> <span class="tx12">(<?php echo $result["data"]  ?>)</span>:</b> <?php  echo $result["opniao"]  ?></div>	

<?php } ?>