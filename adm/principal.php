<?php
    session_start();
    #echo"<h1> Login do Administrador</h1>";
    include_once("validarcookie.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Red Dead Redemption 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='##'>
</head>

<body>
    <?php
      echo "<h1> Bem vindo ".$_SESSION["usuario"]."</h1>";
    ?>
    <form method="post" action="cadjogos.php">
        <p><input class="from-control" type="text" name="txtNome" placeholder="Digite o nome Jogo"></p>
        <p><label>Descrição:</label></p>
        <textarea name="txtDec" rows="8" cols="50"></textarea>
        <p><input type="text" name="txtDuracao" placeholder="Digite a Duração do Jogo"></p>
        <p><input type="submit" name="btnEnviar" value="Enviar para o BD"></p>
    </form>
    <form method="post" action="alteraPersonagem.php">
        <p><input class="form-control" type="text" name="txtNome" placeholder="New nome" /></p>
        <p><label>Descrição:</label></p>
        <textarea name="txtDesc" rows="8" cols="50"></textarea>
        <p><input type="text" name="txtDuracao" placeholder="Digite o Nome do Personagem" /></p>
        <p><input type="submit" name="btnEnviar" value="Alterar Personagem" /></p>
    </form>
    <form method="post" action="removePersonagem.php">
        <input type="number" name="id" value="Remover Personagem">
        <button type="submit" name="submit">Excluir</button>
    </form>
    <a href="logout.php">Logout</a>
</body>

</html>