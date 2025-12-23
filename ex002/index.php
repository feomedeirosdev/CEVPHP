<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ex 002</title>
</head>

<body>
    <h1>Site</h1>
    <?php date_default_timezone_set("America/Fortaleza")?>
    <?php $nome = "Fabio medeiros"; ?>
    <p><?php echo "Hoje é: " . date("D d/m/Y") . " ás " . date("G:i:s T"); ?></p>
</body>
</html>