<?php
require_once("config.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM artigos WHERE id = $id";
    $resultado = $mysql->query($consulta);

    $artigo = $resultado->fetch_array();
} else {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $consulta = "UPDATE artigos SET titulo = '$titulo', conteudo='$conteudo' WHERE id = $id";

    $resultado = $mysql->query($consulta);

    if($mysql->affected_rows === 1) {
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8" />
        <title>Inserir Artigo</title>
    </head>
    <body>
        <h1>Novo Artigo</h1>
        <form action="artigo_update.php" method="post">
            <input type="hidden" name="id" value="<?= $artigo['id'] ?>" />
            <label for="titulo">Título</label> <br />
            <input type="text" name="titulo" value="<?= $artigo['titulo'] ?>" /> <br />
            <label for="conteudo">Conteúdo</label> <br />
            <input type="text" name="conteudo" value="<?= $artigo['conteudo'] ?>" /> <br />
            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>