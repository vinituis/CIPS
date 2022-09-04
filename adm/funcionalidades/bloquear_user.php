<?php 

include '../../repository/conexao.php';

session_start();

$id_page = $_GET['id'];
    
$sql = "UPDATE user SET status = 'block' WHERE id = '$id_page'";

if (mysqli_query($conn, $sql)) {
    header('location:../usuarios.php?alt=Sucesso+ao+atualizar');
} else {
    header('location:../usuarios.php?alt=Erro+ao+atualizar');
}



?>