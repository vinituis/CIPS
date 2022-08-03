<?php 
require './repository/conexao.php';

$sql = "SELECT * FROM home";
if($res=mysqli_query($conn, $sql)){
	$id = array();
	$banner = array();
	$familias = array();
	$cestas = array();
	$end_rua = array();
	$end_cep = array();
	$end_tel = array();
	$end_email = array();
	$end_twitter = array();
	$end_face = array();
	$end_insta = array();
	$i = 0;
	while ($reg = mysqli_fetch_assoc($res)) {
		$id[$i] = $reg['id'];
		$banner[$i] = $reg['banner'];
		$familias[$i] = $reg['familias'];
		$cestas[$i] = $reg['cestas'];
		$end_rua[$i] = $reg['end_rua'];
		$end_cep[$i] = $reg['end_cep'];
		$end_tel[$i] = $reg['end_tel'];
		$end_email[$i] = $reg['end_email'];
		$end_twitter[$i] = $reg['end_twitter'];
		$end_face[$i] = $reg['end_face'];
		$end_insta[$i] = $reg['end_insta'];
		$link_btn[$i] = $reg['link_btn'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
		include "./mod/cabecalho.php";
	?>
	<link rel="stylesheet" href="./css/home.css">
	<script src="https://kit.fontawesome.com/77f6bd1ed5.js" crossorigin="anonymous"></script>

</head>
<body>

<?php include "./mod/menu.php"?>

<header>
	<img class="banner" src="<?php echo $banner[0]; ?>" alt="">
</header>

<div class="dados">
	<div class="dado">
		<div class="icon"><img src="./images/icon-casa.svg"></div>
		<p class="text"><span><?php echo $familias[0]; ?></span>Familias atendidas</p>
	</div>
	
	<div class="dado">
		<div class="icon"><img src="./images/icon-cesta.svg"></div>
		<p class="text"><span><?php echo $cestas[0]; ?></span>Cestas básicas arrecadadas</p>
	</div>
</div>

<div class="parcerias">
	<h2>Parceiros</h2>
	<div class="parceiros">
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
		<div class="parceiro"><img src="./images/logo.svg"></div>
	</div>
</div>

<?php 
include "./mod/rodape.php";
}}
?>

</body>
</html>