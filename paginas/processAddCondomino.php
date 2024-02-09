<?php
session_start();
//conectar a BD
include '../basedados/basedados.h';

//verifica se os campos de User e Password foram enviados
if (isset($_POST['user']) && isset($_POST['password'])){
    //obtem os valores dos campos de User e Password do form para adicionar condominos
    $user = $_POST['user'];
    $password = $_POST['password'];

    //prepara para adicionar o novo condomino
    $query_add_condomino = "INSERT INTO condominos (user, password) VALUES ('$user', '$password')";

    //executa
    $result_add_condomino = mysqli_query($conn, $query_add_condomino);

    //verifica a operacao e redireciona para a "adminPage.php"
    if ($result_add_condomino){
        echo "Condomino adicionado com sucesso!";
        header("refresh:3;url=adminPage.php"); //redireciona para pagina "adminPage.php" apos 3s
        exit();
    }
    else{
        echo "Erro ao adicionar condomino: " . mysqli_error($conn);
        header("refresh:3;url=adminPage.php"); //redireciona para pagina "adminPage.php" apos 3s
        exit();
    }
}
else{
    echo "User e Password sao obrigatorios. Redirecionando para a pagina da administracao...";
    header("refresh:3;url=adminPage.php"); //redireciona para pagina "adminPage.php" apos 3s
    exit();
}
?>
