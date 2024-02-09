<?php
session_start();
//conectar a BD
include '../basedados/basedados.h';

//verifica se os campos de User e Password foram enviados
if (isset($_POST['user']) && isset($_POST['password'])) {
    //obtem os valores dos campos de User e Password do form para remover condominos
    $user = $_POST['user'];
    $password = $_POST['password'];

    //prepara consulta
    $query_check_condomino = "SELECT * FROM condominos WHERE user = '$user' AND password = '$password'";

    //executa consulta
    $result_check_condomino = mysqli_query($conn, $query_check_condomino);

    //verificar se o condomino existe caso exista e removido
    if (mysqli_num_rows($result_check_condomino) > 0){
        //prepara remocao
        $query_remove_condomino = "DELETE FROM condominos WHERE user = '$user' AND password = '$password'";
        //executa a remocao
        $result_remove_condomino = mysqli_query($conn, $query_remove_condomino);

        //verifica a operacao e redireciona para a "adminPage.php"
        if ($result_remove_condomino){
            echo "Condomino removido com sucesso!";
            header("refresh:3;url=adminPage.php"); //redireciona para pagina "adminPage.php" apos 3s
            exit();
        }
        else{
            echo "Erro ao remover condomino: " . mysqli_error($conn);
            header("refresh:3;url=adminPage.php"); //redireciona para pagina "adminPage.php" apos 3s
            exit();
        }
    }
    else{
        echo "Condomino nao encontrado. Verifique as credenciais.";
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
