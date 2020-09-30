<?php
if(isset($_POST['titulo'])) {
  $titulo = $_POST['titulo'];
  $conteudo = $_POST['conteudo'];
  $consulta = "INSERT INTO artigos(titulo, conteudo) VALUES ('$titulo', '$conteudo')";

  require_once('config.php');

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
        <form action="artigo_insert.php" method="post">
            <label for="titulo">Título</label> <br />
            <input type="text" name="titulo" /> <br />
            <label for="conteudo">Conteúdo</label> <br />
            <input type="text" name="conteudo" /> <br />
            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>