<?php 
require './repository/conexao.php';

$sql = "SELECT * FROM home";
if($res=mysqli_query($conn, $sql)){
	$i = 0;
	while ($reg = mysqli_fetch_assoc($res)) {
		$id[$i] = $reg['id'];
		$page[$i] = $reg['page'];
		$banner[$i] = $reg['banner'];
		$familias[$i] = $reg['familias'];
		$cestas[$i] = $reg['cestas'];
		if($page[$i] == 'home'){
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
		include "./mod/cabecalho.php";
	?>
	<link rel="stylesheet" href="./css/home.css">

</head>
<body>

<?php include "./mod/menu.php"?>

<header>
	<img class="banner" src="<?php echo $banner[$i]; ?>" alt="">
</header>

<div class="dados">
	<div class="dado">
		<div class="icon"><img src="./images/icon-casa.svg"></div>
		<p class="text"><span><?php echo $familias[$i]; ?></span>Familias atendidas</p>
	</div>
	
	<div class="dado">
		<div class="icon"><img src="./images/icon-cesta.svg"></div>
		<p class="text"><span><?php echo $cestas[$i]; ?></span>Cestas básicas arrecadadas</p>
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
}}}
?>

</body>
</html>