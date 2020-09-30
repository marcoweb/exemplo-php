<?php
require_once("config.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM artigos WHERE id = $id";
    $resultado = $mysql->query($consulta);

    $artigo = $resultado->fetch_array();
} else {
    $id = $_POST['id'];
    $consulta = "DELETE FROM artigos WHERE id = $id";

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
        <title>Remover Artigo</title>
    </head>
    <body>
        <h1>Remover Artigo</h1>
        <p>Deseja remover o artigo "<?=$artigo['titulo']?>?";
        <form action="artigo_remover.php" method="post">
            <input type="hidden" name="id" value="<?= $artigo['id'] ?>" />
            <input type="submit" value="Excluir" />
        </form>
    </body>
</html>