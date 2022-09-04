<?php 

include '../../repository/conexao.php';

session_start();

$id_page = $_GET['id'];
$status = $_GET['status'];

    
$sql = "UPDATE projetos SET status = '$status' WHERE id = '$id_page'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['atualiza_status'] = "Status atualizado com sucesso!";
    header('location:../projetos');
} else {
    $_SESSION['atualiza_status'] = "Ocorreu um erro";
    header('location:../projetos');
}

?>