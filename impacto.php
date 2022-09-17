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
		
		if($page[$i] == 'impacto'){
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

<div class="aviso">
    <h3 class="title"><?php echo $add_1[$i]; ?></h3>
    <h4><?php echo $add_2[$i]; ?></h4>
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
    <link rel="stylesheet" href="./css/impacto.css">
    <script src="https://kit.fontawesome.com/77f6bd1ed5.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="conteudo">
    <h2>Nosso impacto</h2>
    <hr>
    <div class="itens">
        <div class="item">
            <p class="title">15.000</p>
            <i class="fas fa-shopping-basket"></i>
            <p>Cestas Básicas</p>
        </div>
        <div class="item">
            <p class="title">15.000</p>
            <i class="fas fa-shopping-basket"></i>
            <p>Cestas Básicas</p>
        </div>
        <div class="item">
            <p class="title">15.000</p>
            <i class="fas fa-shopping-basket"></i>
            <p>Cestas Básicas</p>
        </div>
        <div class="item">
            <p class="title">15.000</p>
            <i class="fas fa-shopping-basket"></i>
            <p>Cestas Básicas</p>
        </div>
        <div class="item">
            <p class="title">15.000</p>
            <i class="fas fa-shopping-basket"></i>
            <p>Cestas Básicas</p>
        </div>
        
    </div>
    <div class="cuidado">
        <h2>Nós estamos cuidando das pessoas e das familias</h2>
        <div class="divisor">
            <div class="numero">73,22%</div>
            <div>
                <p>Dos moradores da região de Sapopemba vivem com renda de até meio salário minimo (R$ 606,00)</p>
            </div>
        </div>
    </div>
</div>

</body>
</html> -->