<?php
session_start();
//conectar a BD
include '../basedados/basedados.h';
//verifica se os campos foram introduzidos
if (isset($_POST['user']) && isset($_POST['nova_mensalidade']) && isset($_POST['nova_desp_agua']) && isset($_POST['nova_desp_luz']) && isset($_POST['nova_desp_internet'])){
    //armazena os valores do formulario
    $user = $_POST['user'];
    $novaMensalidade = $_POST['nova_mensalidade'];
    $novaDespAgua = $_POST['nova_desp_agua'];
    $novaDespLuz = $_POST['nova_desp_luz'];
    $novaDespInternet = $_POST['nova_desp_internet'];

    //prepara alteracao
    $query_update = "UPDATE condominos SET mensalidade = '$novaMensalidade', despesa_agua = '$novaDespAgua', despesa_luz = '$novaDespLuz', despesa_internet = '$novaDespInternet' WHERE user = '$user'";

    //executa alteracao
    $result_update = mysqli_query($conn, $query_update);

    //verifica o sucesso da alteracao
    if ($result_update){
        echo "Dados atualizados com sucesso! Redirecionando para a pagina de administracao...";
        header("refresh:3;url=adminPage.php"); //redireciona para pagina "index.php" apos 3s
    }
    else{
        echo "Erro ao atualizar dados: " . mysqli_error($conn);
        header("refresh:3;url=adminPage.php"); //redireciona para pagina "index.php" apos 3s
    }
}
//se campos nao foram introduzidos
else{
    echo "Todos os campos sao obrigatorios. Redirecionando para a pagina de administracao...";
    header("refresh:3;url=adminPage.php"); //redireciona para pagina "index.php" apos 3s
}
?>
