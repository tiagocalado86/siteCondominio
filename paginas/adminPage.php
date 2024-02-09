<?php
    session_start();
    //informacoes vindas do "processLogin.php"
    $admin_data = $_SESSION['admin_data'];
    $user = $admin_data['user'];
    $password = $admin_data['password'];

    echo "<h1>Pagina de Administracao</h1>

        <h2>Informacoes de Utilizadores</h2>
        <p><strong>Informacoes</strong></p>
        <p>------------------------------</p>
        <form action='processInfoCondomino.php' method='POST'>
        <button type='submit'>Visualizar</button>
        </form>
        <p>------------------------------</p>

        <br>
        
        <h2>Alterar Mensalidade e Despesas de Condominos</h2>
        <form action='processUpdateMD.php' method='POST'>
        <label>User:</label>
        <input type='text' name='user'><br><br>

        <label>Nova Mensalidade:</label>
        <input type='text' name='nova_mensalidade'><br><br>

        <label>Nova Despesa da Agua:</label>
        <input type='text' name='nova_desp_agua'><br><br>

        <label>Nova Despesa da Luz:</label>
        <input type='text' name='nova_desp_luz'><br><br>

        <label>Nova Despesa da Internet:</label>
        <input type='text' name='nova_desp_internet'><br><br>

        <button type='submit'>Update</button>
        </form>

        <br>

        <h2>Adicionar e Remover Utilizadores</h2>
        <p>------------------------------------------------------------------------------------------</p>
        <h2>Adicionar Utilizador</h2>
        <form action='processAddCondomino.php' method='POST'>
        <label>User:</label>
        <input type='text' name='user'>

        <label>Password:</label>
        <input type='text' name='password'><br><br>

        <button type='submit'>Adicionar</button>
        </form>
        <br>
        <h2>Remover Utilizador</h2>
        <form action='processRemoveCondomino.php' method='POST'>
        <label>User:</label>
        <input type='text' name='user'>

        <label>Password:</label>
        <input type='text' name='password'><br><br>

        <button type='submit'>Remover</button>
        </form>
        <p>------------------------------------------------------------------------------------------</p>

        <br>

        <h2>Visualizacao das Despesas do Condominio</h2>
        <ul>
            <li>Jardinagem: 125€</li>
            <li>Limpeza Piscina: 258€</li>
            <li>Portao Garagem: 500€</li>
        </ul>

        <br>

        <h2>Gestao dos Dados Pessoais</h2>
        <p>User: $user</p>
        <p>Passowrd: $password</p>";
?>
