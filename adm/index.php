<?php

include '../repository/conexao.php';

if(isset($_SESSION['admin_name'])){
    header('location:./home.php');
}

// ini_set('display_errors', 0);
// ini_set('display_startup_erros', 0);

if(isset($_POST['submit'])){

   $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user WHERE login = '$login' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
   

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['status'] == 'ativo'){

        $_SESSION['admin_name'] = $row['name'];
        session_start();
        header('location:./home.php');
      }     
   }else{
      $error[] = 'Não identificamos seu registo';
   }

};
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adm | CPIS</title>
    <!-- CSS Global -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/adm.css">

</head>
<body>
<div class="conteudo conteudo-login">
    <div class="login">
        <h2>Acesse o CPIS</h2>
        <form action="" method="post" id="loginSMDI">
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
            <input name="login" type="text" placeholder="Digite seu email" />
            <input name="password" type="password" placeholder="Digite seu CPF" />
            <input type="submit" name="submit" class="btn" value="Acessar" />
        </form>
    </div>
</div>
    
    
<?php mysqli_close($conn); ?>

</body>
</html>