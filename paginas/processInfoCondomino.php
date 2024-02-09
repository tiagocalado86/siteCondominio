<?php
session_start();
//conectar a BD
include '../basedados/basedados.h';

//consulta todas as informacoes dos condominos
$query = "SELECT * FROM condominos";
$result = mysqli_query($conn, $query);

//verifica sucesso da consulta
if ($result){
    echo "<h1>Informacoes dos Condominos</h1>";

    //loop nos resultados da consulta para mostrar as infos de todos os condominos
    while ($row = mysqli_fetch_assoc($result)){
        echo "<h2>Condomino: " . $row['user'] . "</h2>";
        echo "<ul>";
        echo "<li>Mensalidade: " . $row['mensalidade'] . "</li>";
        echo "<li>Despesa de Água: " . $row['despesa_agua'] . "</li>";
        echo "<li>Despesa de Luz: " . $row['despesa_luz'] . "</li>";
        echo "<li>Despesa de Internet: " . $row['despesa_internet'] . "</li>";
        echo "</ul>";
        echo "<p>---------------------------------------------</p>";
        
    }
}
//se a consulta falhar
else{
    echo "Erro ao recuperar informacoess dos condominos: " . mysqli_error($conn);
}
?>
