<?php

include '../../repository/conexao.php';

session_start();

if(isset($_POST['submit'])){

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$pass = md5($_POST['password']);

$select = " SELECT * FROM user WHERE login = '$login' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

    $_SESSION['status_usu'] = "Erro ao criar usuário";
    header('location:../usuarios');

}else{

    $insert = "INSERT INTO user(nome, login, password) VALUES('$name','$login','$pass')";
    mysqli_query($conn, $insert);
    if($insert){
        $_SESSION['status_usu'] = "Usuário criado com sucesso!";
        header('location:../usuarios');
    }
}

};


?>