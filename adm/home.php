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
    <h2>A</h2>
    <hr>
</div>

<?php mysqli_close($conn); ?>

</body>
</html>