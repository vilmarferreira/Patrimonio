<?php
include"config.php";
$id=$_GET['id'];
if(isset($id))
{
	$query=$mysqli->query("delete from grupo where idGrupo='$id'");
	if($query)
	{
		echo"<script>alert('Excluido com sucesso');location.href='../view/telaGrupo.php'</script>";
	}
	else
	{
		header('location : ../view/telaGrupo.php');
	}
}
?>