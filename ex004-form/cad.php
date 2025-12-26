<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="form">
        <h1 class="titulo">Resultado</h1>

        <p class="botao">
            <?php 
                $nome = $_POST["nome"] ?? "sem nome";
                $sobrenome = $_POST["sobrenome"] ?? "desconhecido";
                echo "Você se chama $nome $sobrenome"
            ?>
        </p>

        <a 
            href="javascript:history.go(-1)"
            class="back">
            voltar
        </a>
    </section>
</body>
</html>