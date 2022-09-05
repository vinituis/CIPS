<nav>
	<div class="logo">
		<a href="./home.php"><img src="./images/logo-n.svg" alt=""></a>
	</div>
	<div class="nav-itens">
		<div class="nav-item dropdown">Conheça
            <div class="dropdown-content">
                <a href="./sobre.php">Sobre a CIPS 26 de Julho</a>
                <a href="./impacto.php">Nosso impacto</a>
                <a href="./equipe.php">Equipe</a>
            </div>
        </div>
		<div class="nav-item dropdown">Projetos
            <div class="dropdown-content">
                <?php
                require "./repository/conexao.php";
                
                $sql = 'SELECT * FROM projetos';
                    if($res=mysqli_query($conn, $sql)){
                        $id = array();
                        $nome = array();
                        $i = 0;
                        while ($reg = mysqli_fetch_assoc($res)) {
                            $id[$i] = $reg['id'];
                            $nome[$i] = $reg['nome'];
                            $status[$i] = $reg['status'];
                            if($status[$i] == 'ativo'){
                ?>
                <a href="./projeto.php?id=<?php echo $id[$i]; ?>"><?php echo $nome[$i]; ?></a>
                <?php }}} ?>
            </div>
        </div>
		<a href="./apoie.php"><div class="nav-item">Apoie nossa causa</div></a>
		<a href="./transparencia.php"><div class="nav-item">Transparencia</div></a>
	</div>
</nav>