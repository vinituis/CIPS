<?php

include '../../repository/conexao.php';

session_start();

$id_page = $_GET['id'];

$sql = "SELECT * FROM pages WHERE id = '$id_page'";
if($res=mysqli_query($conn, $sql)){
	$i = 0;
	while ($reg = mysqli_fetch_assoc($res)) {
		$id[$i] = $reg['id'];
		$page[$i] = $reg['page'];
		$titulo[$i] = $reg['titulo'];
		$subtitulo[$i] = $reg['subtitulo'];
		$descricao[$i] = $reg['descricao'];
		$img[$i] = $reg['img'];
		$add_1[$i] = $reg['add_1'];
		$add_2[$i] = $reg['add_2'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../../css/adm.css">
    <link rel="stylesheet" href="../../css/global.css">
    
</head>
<body>

<div class="conteudo">
    <h2>Edição da Página | <?php echo $titulo[$i]; ?></h2>
    <hr>
    <form class="form-insert" action="./troca_dado_page.php?id=<?php echo $id_page; ?>" method="POST">
        <div class="item">
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo[$i]; ?>">
        </div>
        <div class="item">
            <label for="subtitulo">Subtitulo</label>
            <input type="text" id="subtitulo" name="subtitulo" value="<?php echo $subtitulo[$i]; ?>">
        </div>
        <div class="item item-desc">
            <label for="descricao">Descrição</label>
            <textarea type="text" rows="10" id="descricao" name="descricao"><?php echo $descricao[$i]; ?></textarea>
        </div>
        <div class="item item-desc">
            <label for="add_1">Informação 1</label>
            <input type="text" id="add_1" name="add_1" value="<?php echo $add_1[$i]; ?>">
        </div>
        <div class="item item-desc">
            <label for="add_2">Informação 2</label>
            <input type="text" id="add_2" name="add_2" value="<?php echo $add_2[$i]; ?>">
        </div>
        
        <input type="submit" name="submit" class="btn" value="Editar página">
    </form>
    <a class="voltar" href="../pages.php">Cancelar</a>
</div>

<?php 
    }}
mysqli_close($conn); 

?>

</body>
</html>