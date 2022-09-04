<?php

include '../repository/conexao.php';

session_start();

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
    <h2>Usuários</h2>
    <hr>
    <?php
        if(isset($_SESSION['atualiza_status'])){
            $msgUsu = $_SESSION['atualiza_status'];
            unset($_SESSION['atualiza_status']);            
            echo '<span>'.$msgUsu.'</span>';
        }
    ?>
    <div class="tabela">
        
        <table>
            <thead>
                <td>Nome</td>
                <td>Login</td>
                <td>Status</td>
                <td>Ação</td>
            </thead>
            <?php            
            $sql = 'SELECT * FROM user';
                if($res=mysqli_query($conn, $sql)){
                    $id = array();
                    $nome = array();
                    $login = array();
                    $status = array();
                    $i = 0;
                    while ($reg = mysqli_fetch_assoc($res)) {
                        $id[$i] = $reg['id'];
                        $nome[$i] = $reg['nome'];
                        $login[$i] = $reg['login'];
                        $status[$i] = $reg['status'];
                ?>
            <tr>
                <td><?php echo $nome[$i]; ?></td>
                <td><?php echo $login[$i]; ?></td>
                <td><?php echo $status[$i]; ?></td>
                <td class="action">
                    <a href="./funcionalidades/troca_status.php?id=<?php echo $id[$i]; ?>&status=ativo"><p>Ativar</p></a>
                    <a href="./funcionalidades/troca_status.php?id=<?php echo $id[$i]; ?>&status=block"><p>bloquear</p></a>
                </td>
            </tr>
            <?php }} ?>
        </table>
    </div>
    <hr>
    <div class="form">
        <?php
        if(isset($_SESSION['status_usu'])){
            $msg = $_SESSION['status_usu'];
            unset($_SESSION['status_usu']);            
            echo '<span>'.$msg.'</span>';
        }
        ?>
        <h3>Novos Usuários</h3>
        <form action="./funcionalidades/criar_user.php" class="form-insert" method="POST">
            <input name="name" type="text" placeholder="Nome" value="" required>
            <input name="login" type="text" placeholder="Login" value="" required>
            <input name="password" type="password" placeholder="Senha" value="" required>
            <small>Os usuários criados no sistema ficam bloqueados, é necessario liberação manual</small>
            <input type="submit" name="submit" class="btn" value="Criar">
        </form>
    </div>

</div>

<?php mysqli_close($conn); ?>

</body>
</html>