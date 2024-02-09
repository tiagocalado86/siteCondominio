<?php
session_start();
//conectar a BD
include '../basedados/basedados.h';

//verifica user
if (isset($_SESSION['condomino_data'])){
    //obtem o usario em questao
    $user = $_SESSION['condomino_data']['user'];

    //atualiza a mensalidade do usario para NULL pois esta a ser paga
    $query_update_despesas = "UPDATE condominos SET despesa_agua = NULL, despesa_luz = NULL, despesa_internet = NULL WHERE user = '$user'";
    $result_update_despesas = mysqli_query($conn, $query_update_despesas);

    //verifica o sucesso e redireciona para "condominoPage.php"
    if ($result_update_despesas){
        echo "Despesas pagas com sucesso!";
        header("refresh:3;url=condominoPage.php"); //redireciona para pagina "condominoPage.php" apos 3s
        exit();
    }
    else{
        echo "Erro ao pagar as despesas: " . mysqli_error($conn);
        header("refresh:3;url=condominoPage.php"); //redireciona para pagina "condominoPage.php" apos 3s
        exit();
    }
}
//se houver problemas
else{
    echo "Acesso nao autorizado. Redirecionando para a pagina inicial...";
    header("refresh:3;url=index.php"); //redireciona para pagina "index.php" apos 3s
    exit();
}
?>
