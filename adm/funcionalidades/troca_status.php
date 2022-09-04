<?php 

include '../../repository/conexao.php';

session_start();

$id_page = $_GET['id'];
$status = $_GET['status'];

    
$sql = "UPDATE user SET status = '$status' WHERE id = '$id_page'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['atualiza_status'] = "Usuário atualizado com sucesso!";
    header('location:../usuarios');
} else {
    $_SESSION['atualiza_status'] = "Ocorreu um erro";
    header('location:../usuarios');
}

?>