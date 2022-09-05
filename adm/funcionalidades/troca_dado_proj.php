<?php 

session_start();

include '../../repository/conexao.php';

$id_page = $_GET['id'];
$nome = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$imagem = $_POST['img'];
$descricao = $_POST['descricao'];
$status = 'inativo';

$sql = "UPDATE projetos SET nome = '$nome' , subtitulo = '$subtitulo' , img = '$imagem' , descricao = '$descricao' , status = '$status' WHERE id = '$id_page'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['atualiza_page'] = "Página atualizada com sucesso!";
    header('location:../projetos.php');
} else {
    $_SESSION['atualiza_page'] = "Houve um erro: " . mysqli_error($conn);
}

if(isset($_SESSION['atualiza_page'])){
    echo $_SESSION['atualiza_page'];
}

?>