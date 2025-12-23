<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="cad.php" method="get" class="form">
        <h1 class="titulo">Resultado</h1>

        <label for="nome" class="label">Nome </label>
        <input type="text" name="nome" id="idnome" placeholder="Escreva seu nome aqui" class="input"><br />

        <label for="sobrenome" class="label">Sobrenome </label>
        <input type="text" name="sobrenome" id="idsobrenome" placeholder="Escreva seu sobrenome aqui" class="input"><br />

        <p class="botao">
            <?php 
                $n = $_GET["nome"];
                $s = $_GET["sobrenome"];
                echo "Você se chama $n $s"
            ?>
        </p>
    </form>
</body>
</html>