<?php 
require './repository/conexao.php';

$sql = "SELECT * FROM home";
if($res=mysqli_query($conn, $sql)){
	$i = 0;
	while ($reg = mysqli_fetch_assoc($res)) {
		$id[$i] = $reg['id'];
		$end_rua[$i] = $reg['end_rua'];
		$end_cep[$i] = $reg['end_cep'];
		$end_tel[$i] = $reg['end_tel'];
		$end_email[$i] = $reg['end_email'];
		$end_twitter[$i] = $reg['end_twitter'];
		$end_face[$i] = $reg['end_face'];
		$end_insta[$i] = $reg['end_insta'];
		$link_btn[$i] = $reg['link_btn'];
?>

<footer>
	<div class="col1">
		<h3>Sede Administrativa</h3>
		<p>Rua: <?php echo $end_rua[0]; ?></p>
		<p>CEP: <?php echo $end_cep[0]; ?></p>
		<p>Tel: <?php echo $end_tel[0]; ?></p>
		<p>E-mail: <?php echo $end_email[0]; ?></p>
		<div class="redes">
			<p><a href=""><i class="fab fa-twitter-square"></i></a></p>
			<p><a href="<?php echo $end_face[0]; ?>"><i class="fab fa-facebook-square"></i></a></p>
			<p><a href="<?php echo $end_insta[0]; ?>"><i class="fab fa-instagram-square"></i></a></p>
		</div>
	</div>
	<div class="col2">
		<h3>Contato</h3>
		<p>Nos envie suas sugestões, elogios e críticas pelo formulário abaixo. Ou, se preferir, envie um e-mail direto para contato@cpis-brasil.org.br</p>
		<form action="" method="post">
			<input name="nome" type="text" placeholder="Nome">
			<input name="email" type="email" placeholder="E-mail">
			<textarea name="mensagem" id="" rows="5" placeholder="Mensagem"></textarea>
			<input type="submit" class="btn">
		</form>
	</div>
	<div class="col3">
		<h3>Seja um voluntário</h3>
		<a href="<?php echo $link_btn[0]; ?>"><button class="btn">Veja como colaborar!</button></a>
	</div>
</footer>

<?php
	}}
?>