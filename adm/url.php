<?php 

include_once("../dao/conexao.php");

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];


    if($arquivo['error'])
        die("Falha ao enviar Arquivo");
        
    $pasta = "..img/";
    $nomedoArquivo = $arquivo['name'];
    $newnomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomedoArquivo,PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != 'png')
        die("Tipo de arquivo não aceito");  

    $path = $pasta . $newnomeArquivo . "." . $extensao;    
    $certo = move_uploaded_file($arquivo['tb_img'], $path);
    if($certo){
        $mysqli->query("ÏNSER INTO tb_img (nome_arquivo, path) VALUES ('$nomedoArquivo', '$path')") or die($mysqli->error);
    }
        //echo "<p>Arquivo enviado com sucesso! <a href=\"img/$newnomeArquivo.$extensao\">Clique Aqui!!</a></p>";
        
    else
        echo "<p>Falha ao enviar Arquivo</p>";

    //echo "Arquivo Enviado";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> salvar a url de uma imagem</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="">
        <p>
            <label for="">Selecione o Arquivo</label>
            <input name="arquivo" type="file">
        </p>
        <button name="upload" type="submit">Enviar Arquivo</button>
    </form>

    <?php
        //while ($arquivo = $sql_query->mysqli_fetch_assoc()) {
    ?>
    <img src="<?php echo $arquivo['$path']; ?>" alt="">

    <?php
    //}
    ?>

</body>

</html>