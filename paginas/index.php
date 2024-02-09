<?php
    echo "<h1>Login Area</h1>
        <form action='processLogin.php' method='POST'>
            <label>User:</label>
            <input type='text' name='user'>

            <label>Password:</label>
            <input type='password' name='password'><br><br>

            <button type='submit'>Login</button>
        </form><br>

        <h1>Informações do Condominio</h1>
        <p><strong>Localizacao:</strong> Rua Feliz, 420</p>
        <p><strong>Horarios de Atendimento do Administrador:</strong></p>
        <ul>
            <li>Segunda a Sexta: 9h00 as 18h00</li>
            <li>Sabado: 9h00 as 12h00</li>
        </ul>
        <p><strong>Contactos:</strong></p>
        <ul>
            <li>Email: melhorcondominio@gmail.com</li>
            <li>Telefone: +351 916969969</li>
        </ul>";
?>
