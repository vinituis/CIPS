<?php

require './repository/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include "./mod/cabecalho.php"?>
</head>
<body>

<?php include "./mod/menu.php";

$id_page = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM projetos WHERE id = '$id_page'");

$usu = mysqli_fetch_object($sql);

if($usu !== NULL){

?>

<div class="conteudo">
    <h2><?php echo $usu->nome; ?></h2>
    <hr>
    <div class="divisor">
        <div><img src="<?php echo $usu->img; ?>" alt=""></div>
        <div>
            <h3 class="title bold"><?php echo $usu->subtitulo; ?></h3>
            <p><?php echo $usu->descricao; ?></p>
        </div>
    </div>
</div>

<?php include "./mod/rodape.php";
}
?>

</body>
</html>