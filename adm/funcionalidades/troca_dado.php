<?php 

session_start();

include '../../repository/conexao.php';

$id_page = $_GET['id'];
$banner = $_POST['banner'];
$familias = $_POST['familias'];
$cestas = $_POST['cestas'];
$end_rua = $_POST['rua'];
$end_cep = $_POST['cep'];
$end_tel = $_POST['tel'];
$end_email = $_POST['email'];
$end_twitter = $_POST['twitter'];
$end_face = $_POST['facebook'];
$end_insta = $_POST['instagram'];
$link_btn = $_POST['link'];

$sql = "UPDATE home SET banner = '$banner' , familias = '$familias' , cestas = '$cestas' , end_rua = '$end_rua' , end_cep = '$end_cep' , end_tel = '$end_tel' , end_email = '$end_email' , end_twitter = '$end_twitter' , end_face = '$end_face' , end_insta = '$end_insta' , link_btn = '$link_btn' WHERE id = '$id_page'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['atualiza_page'] = "Página atualizada com sucesso!";
    header('location:../inicial');
} else {
    $_SESSION['atualiza_page'] = "Houve um erro: " . mysqli_error($conn);
}

?>