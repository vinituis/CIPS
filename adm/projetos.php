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
    <h2>Projetos</h2>
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
                <td>Título</td>
                <td>Subtítulo</td>
                <td>Status</td>
                <td colspan="2">Ação</td>
            </thead>
            <?php            
            $sql = 'SELECT * FROM projetos';
                if($res=mysqli_query($conn, $sql)){
                    $id = array();
                    $titulo = array();
                    $subtitulo = array();
                    $status = array();
                    $i = 0;
                    while ($reg = mysqli_fetch_assoc($res)) {
                        $id[$i] = $reg['id'];
                        $titulo[$i] = $reg['nome'];
                        $subtitulo[$i] = $reg['subtitulo'];
                        $status[$i] = $reg['status'];
                ?>
            <tr>
                <td><?php echo $titulo[$i]; ?></td>
                <td><?php echo $subtitulo[$i]; ?></td>
                <td><?php echo $status[$i]; ?></td>
                <td class="action">
                    <a href="./funcionalidades/troca_status_proj.php?id=<?php echo $id[$i]; ?>&status=ativo"><p>Ativar</p></a>
                    <a href="./funcionalidades/troca_status_proj.php?id=<?php echo $id[$i]; ?>&status=inativo"><p>bloquear</p></a>
                </td>
                <td><a href="./funcionalidades/troca_status.php?id=<?php echo $id[$i]; ?>&status=inativo"><p>editar</p></a></td>
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