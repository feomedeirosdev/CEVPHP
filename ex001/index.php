<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Primeiro PHP denovo</title>
</head>

<body>
    <h1>Site</h1>
    <!-- <h2> <?php phpinfo(); ?> </h2> -->
    <div class="card">
        <h1>Servidor LAMP Ativo! 🚀</h1>
        <p>Hoje é dia: <strong><?php echo date("d/m/Y"); ?></strong></p>
        <p>Hora atual: <strong><?php echo date("H:i:s"); ?></strong></p>
        
        <p>Versão do PHP: <code><?php echo phpversion(); ?></code></p>
        
        <p class="status">
            <?php 
                echo "O PHP está processando corretamente!";
            ?>
        </p>
    </div>
</body>
</html>