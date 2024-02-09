<?php
    session_start();
    //informacoes vindas do "processLogin.php"
    $condomino_data = $_SESSION['condomino_data'];
    $user = $condomino_data['user'];
    $password = $condomino_data['password'];
    $mensalidade = $condomino_data['mensalidade'];
    $agua = $condomino_data['despesa_agua'];
    $luz = $condomino_data['despesa_luz'];
    $internet = $condomino_data['despesa_internet'];
    echo "<h1>Pagina do Condominio</h1>

        <h2>Gestao da Mensalidade e Despesas</h2>
        <strong>Mensalidade:</strong>
        <ul>
            <li>Por Pagar: $mensalidade</li>
            <br>
            <form action='processPagarMensalidade.php' method='POST'>
            <button type='submit'>Pagar</button>
            </form>
        </ul>
        <strong>Despesas:</strong>
        <ul>
            <li>Agua: $agua</li>
            <li>Luz: $luz</li>
            <li>Internet: $internet</li>
            <br>
            <form action='processPagarDespesas.php' method='POST'>
            <button type='submit'>Pagar</button>
            </form>
        </ul>

        <h2>Visualizacao das Despesas do Condominio</h2>
        <ul>
            <li>Jardinagem: 125€</li>
            <li>Limpeza Piscina: 258€</li>
            <li>Portao Garagem: 500€</li>
        </ul>

        <h2>Gestao dos Dados Pessoais</h2>
        <p>User: $user</p>
        <p>Passowrd: $password</p>";
?>