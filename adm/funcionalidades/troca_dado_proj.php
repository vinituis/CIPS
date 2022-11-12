<?php 

session_start();

include '../../repository/conexao.php';

if(isset($_FILES['img'])){

    $extensao = strtolower(substr($_FILES['img']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/projeto/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

}

if($extensao == ''){
    $imagem = '';
}else{
    $imagem = './adm/funcionalidades/'.$diretorio.$novo_nome;
}

$id_page = $_GET['id'];
$nome = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
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