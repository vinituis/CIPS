<?php

include '../repository/conexao.php';

session_start();

$sql = "SELECT * FROM home";
if($res=mysqli_query($conn, $sql)){
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
    <?php include "./mod/cabecalho.php"; ?>
    <link rel="stylesheet" href="../css/adm.css">
    
</head>
<body>
<?php include "./mod/menu.php";?>

<div class="conteudo">
    <h2>Edição da Página Inicial</h2>
    <hr>
    <?php
        if(isset($_SESSION['atualiza_page'])){
            $msg = $_SESSION['atualiza_page'];
            unset($_SESSION['atualiza_page']);            
            echo '<span>'.$msg.'</span>';
        }
    ?>
    <form class="form-insert" action="./funcionalidades/troca_dado.php?id=<?php echo $id[0]; ?>" method="POST">
        <div class="item">
            <label for="banner">Banner</label>
            <input type="text" id="banner" name="banner" value="<?php echo $banner[0]; ?>">
        </div>
        <div class="item">
            <label for="familias">familias</label>
            <input type="text" id="familias" name="familias" value="<?php echo $familias[0]; ?>">
        </div>
        <div class="item">
            <label for="cestas">cestas</label>
            <input type="text" id="cestas" name="cestas" value="<?php echo $cestas[0]; ?>">
        </div>
        <div class="item">
            <label for="rua">rua</label>
            <input type="text" id="rua" name="rua" value="<?php echo $end_rua[0]; ?>">
        </div>
        <div class="item">
            <label for="cep">cep</label>
            <input type="text" id="cep" name="cep" value="<?php echo $end_cep[0]; ?>">
        </div>
        <div class="item">
            <label for="tel">tel</label>
            <input type="text" id="tel" name="tel" value="<?php echo $end_tel[0]; ?>">
        </div>
        <div class="item">
            <label for="email">email</label>
            <input type="text" id="email" name="email" value="<?php echo $end_email[0]; ?>">
        </div>
        <div class="item">
            <label for="twitter">twitter</label>
            <input type="text" id="twitter" name="twitter" value="<?php echo $end_twitter[0]; ?>">
        </div>
        <div class="item">
            <label for="facebook">facebook</label>
            <input type="text" id="facebook" name="facebook" value="<?php echo $end_face[0]; ?>">
        </div>
        <div class="item">
            <label for="instagram">instagram</label>
            <input type="text" id="instagram" name="instagram" value="<?php echo $end_insta[0]; ?>">
        </div>
        <div class="item">
            <label for="link">link</label>
            <input type="text" id="link" name="link" value="<?php echo $link_btn[0]; ?>">
        </div>
        <input type="submit" name="submit" class="btn" value="Alterar dados">
    </form>
</div>

<?php 
    }}
mysqli_close($conn); 

?>

</body>
</html>