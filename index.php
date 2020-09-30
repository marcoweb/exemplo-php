<?php
require_once("config.php");

$consulta = "SELECT * FROM artigos";
$resultado = $mysql->query($consulta);
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8" />
        <title>Exemplo</title>
    </head>
    <body>
        <a href="artigo_insert.php">Novo Artigo</a>
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Conteúdo</th>
                <th>&nbsp;</th>
            </tr>
            <?php while($artigo = $resultado->fetch_array()): ?>
            <tr>
                <td><?= $artigo['id']?></td>
                <td><?= $artigo['titulo'] ?></td>
                <td><?= $artigo['conteudo'] ?></td>
                <td>
                    <a href="artigo_update.php?id=<?=$artigo['id']?>">Editar</a>
                    <a href="artigo_remover.php?id=<?=$artigo['id']?>">Remover</a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </body>
</html>