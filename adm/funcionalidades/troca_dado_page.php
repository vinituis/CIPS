<?php 

session_start();

include '../../repository/conexao.php';

$id_page = $_GET['id'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$descricao = $_POST['descricao'];
$add_1 = $_POST['add_1'];
$add_2 = $_POST['add_2'];


$sql = "UPDATE pages SET titulo = '$titulo' , subtitulo = '$subtitulo' , descricao = '$descricao' , add_1 = '$add_1' , add_2 = '$add_2' WHERE id = '$id_page'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['atualiza_page'] = "Página atualizada com sucesso!";
    header('location:../pages.php');
} else {
    $_SESSION['atualiza_page'] = "Houve um erro: " . mysqli_error($conn);
    var_dump($sql);
}

if(isset($_SESSION['atualiza_page'])){
    echo $_SESSION['atualiza_page'];
}

?>