<?php

include '../../repository/conexao.php';

session_start();

$id_proj = $_GET['id'];

$sql = "SELECT * FROM projetos WHERE id = '$id_proj'";
if($res=mysqli_query($conn, $sql)){
	$i = 0;
	while ($reg = mysqli_fetch_assoc($res)) {
		$id[$i] = $reg['id'];
		$nome[$i] = $reg['nome'];
		$subtitulo[$i] = $reg['subtitulo'];
		$img[$i] = $reg['img'];
        $descricao[$i] = $reg['descricao'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../../css/adm.css">
    <link rel="stylesheet" href="../../css/global.css">
    
</head>
<body>

<div class="conteudo">
    <h2>Editar Projeto | <?php echo $nome[$i]; ?></h2>
    <hr>
    <form class="form-insert" action="./troca_dado_proj.php?id=<?php echo $id_proj; ?>" method="POST" enctype="multipart/form-data">
        <div class="item">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $nome[$i]; ?>">
        </div>
        <div class="item">
            <label for="subtitulo">Subítulo</label>
            <input type="text" id="subtitulo" name="subtitulo" value="<?php echo $subtitulo[$i]; ?>">
        </div>
        <div class="item">
            <?php
            if($img[$i] == ''){
            ?>
            <label for="img">Imagem</label>
            <input type="file" required name="img" id="img">
            <?php
            }else{
                ?>
            <label for="img">Imagem</label>
            <input type="text" id="img" name="img" value="<?php echo $img[$i]; ?>">
            <?php } ?>
        </div>
        <div class="item item-desc">
            <label for="descricao">Descrição</label>
            <textarea type="text" rows="10" id="descricao" name="descricao"><?php echo $descricao[$i]; ?></textarea>
        </div>
        <input type="submit" name="submit" class="btn" value="Editar projeto">
    </form>
    <a class="voltar" href="../projetos.php">Cancelar</a>
</div>


<?php
    }}
?>