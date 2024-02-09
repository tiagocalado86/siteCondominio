<?php
session_start();
//conectar a BD
include '../basedados/basedados.h';

//verifica se os campos de User e Password foram enviados
if (isset($_POST['user']) && isset($_POST['password'])){
    //obtem os valores dos campos de User e Password do form
    $user = $_POST['user'];
    $password = $_POST['password'];

    //prepara as consultas para as tabelas "condominos" e "admins"
    $query_condominos = "SELECT * FROM condominos WHERE user = '$user' AND password = '$password'";
    $query_admins = "SELECT * FROM admins WHERE user = '$user' AND password = '$password'";

    //consulta
    $result_condominos = mysqli_query($conn, $query_condominos);
    $result_admins = mysqli_query($conn, $query_admins);

    //verifica se e condomino
    if (mysqli_num_rows($result_condominos) > 0){
        //armazena os dados do condomino para usar na "condominoPage.php"
        $condomino_data = mysqli_fetch_assoc($result_condominos); //agrupa as informacoes obtidas num array
        $_SESSION['condomino_data'] = $condomino_data;
        
        //redireciona para a pagina do condominoPage.php
        header("Location: condominoPage.php");
        exit();
    }

    //verifica se e admin
    elseif (mysqli_num_rows($result_admins) > 0){
        //armazena os dados do admin para usar na "adminPage.php"
        $admin_data = mysqli_fetch_assoc($result_admins); //agrupa as informacoes obtidas num array
        $_SESSION['admin_data'] = $admin_data;

        //redireciona para a pagina do adminPage.php
        header("Location: adminPage.php");
        exit();
    }

    //se os dados fornecidos nao coinciderem com nenhum da BD
    else{
        echo "Credenciais invalidas. Redirecionando para a pagina inicial...";
        header("refresh:3;url=index.php"); //redireciona para pagina inicial apos 3s
        exit();
    }
}
//caso os campos de user e password nao forem preenchidos
else{
    echo "User e Password sao obrigatorios. Redirecionando para a pagina inicial...";
    header("refresh:3;url=index.php"); //redireciona para pagina inicial apos 3s
    exit();
}
?>
