<?php 
require './repository/conexao.php';

$sql = "SELECT * FROM home";
if($res=mysqli_query($conn, $sql)){
	$i = 0;
	while ($reg = mysqli_fetch_assoc($res)) {
		$id[$i] = $reg['id'];
		$page[$i] = $reg['page'];
		$end_rua[$i] = $reg['end_rua'];
		$end_cep[$i] = $reg['end_cep'];
		$end_tel[$i] = $reg['end_tel'];
		$end_email[$i] = $reg['end_email'];
		$end_twitter[$i] = $reg['end_twitter'];
		$end_face[$i] = $reg['end_face'];
		$end_insta[$i] = $reg['end_insta'];
		$link_btn[$i] = $reg['link_btn'];
		if($page[$i] == 'home'){
?>

<footer>
	<div class="col1">
		<h3>Sede Administrativa</h3>
		<p>Rua: <?php echo $end_rua[$i]; ?></p>
		<p>CEP: <?php echo $end_cep[$i]; ?></p>
		<p>Tel: <?php echo $end_tel[$i]; ?></p>
		<p>E-mail: <?php echo $end_email[$i]; ?></p>
		<div class="redes">
			<p><a href=""><i class="fab fa-twitter-square"></i></a></p>
			<p><a href="<?php echo $end_face[$i]; ?>"><i class="fab fa-facebook-square"></i></a></p>
			<p><a href="<?php echo $end_insta[$i]; ?>"><i class="fab fa-instagram-square"></i></a></p>
		</div>
		<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
		<form class="btn-pag" action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
		<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
			<input type="hidden" name="currency" value="BRL" />
			<input type="hidden" name="receiverEmail" value="financeiro26dejulho@gmail.com" />
			<input type="hidden" name="iot" value="button" />
			<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
			</form>
		<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
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
		<a href="<?php echo $link_btn[$i]; ?>"><button class="btn">Veja como colaborar!</button></a>
	</div>
</footer>

<?php
	}}}
	mysqli_close($conn);

?>