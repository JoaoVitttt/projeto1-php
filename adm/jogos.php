<?php
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.cdnfonts.com/css/chinese-rocks" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='#'>

</head>

<body>
    <form method="post" action="cadjogos.php">
        <p><input class="form-control" type="text" name="txtNome" placeholder="Digite o nome do JOGO"></p>
        <p><label>descrição</label></p>
        <textarea name="txtDesc" rows="8" cols="50"></textarea>
        <p><input type="text" name="txtDuracao" placeholder="Digite o nome---------"></p>
        <p><input type="submit" name="btnEnviar" value="Enviar para BD"></p>
    </form>
</body>

</html>