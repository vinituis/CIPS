<?php

include '../../repository/conexao.php';

session_start();

if(isset($_POST['submit'])){

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, 513);
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING, 513);
$pass = md5($_POST['password']);
$status = 'block';

$select = " SELECT * FROM user WHERE login = '$login' && password = '$pass' ";

$result = mysqli_query($conn, $select);
var_dump($result);

if(mysqli_num_rows($result) > 0){

    $_SESSION['status_usu'] = "Erro ao criar usuário";
    header('location:../usuarios.php');

}else{

    $insert = "INSERT INTO user(name, login, password, status) VALUES('$name','$login','$pass', '$status')";
    mysqli_query($conn, $insert);
    if($insert){
        $_SESSION['status_usu'] = "Usuário criado com sucesso!";
        header('location:../usuarios.php');
    }
}

};


?>