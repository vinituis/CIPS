<?php 
require './repository/conexao.php';

$sql = "SELECT * FROM pages";
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
		
		if($page[$i] == 'transparencia'){
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include "./mod/cabecalho.php"?>
    <link rel="stylesheet" href="./css/sobre.css">
</head>
<body>

<?php include "./mod/menu.php"?>

<div class="conteudo">
    <h2><?php echo $titulo[$i]; ?></h2>
    <hr>
    <div class="divisor">
        <div><img src="<?php echo $img[$i]; ?>" alt=""></div>
        <div>
            <h3 class="title bold"><?php echo $subtitulo[$i]; ?></h3>
            <p><?php echo $descricao[$i]; ?></p>
        </div>
    </div>
</div>

<?php 
}}}
include "./mod/rodape.php";
?>

</body>
</html>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./css/transparencia.css">
</head>
<body>

<div class="conteudo">
    <h2>TransparĂȘncia</h2>
    <hr>
    <div class="itens">
        <div class="item">
            <a href="" class="btn">Ata de posse</a>
        </div>
        <div class="item">
            <a href="" class="btn">Ata de posse</a>
        </div>
        <div class="item">
            <a href="" class="btn">Ata de posse</a>
        </div>
        <div class="item">
            <a href="" class="btn">Ata de posse</a>
        </div>
        <div class="item">
            <a href="" class="btn">Ata de posse</a>
        </div>
        <div class="item">
            <a href="" class="btn">Ata de posse</a>
        </div>
    </div>
</div>

</body>
</html> -->