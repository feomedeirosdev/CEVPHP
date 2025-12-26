<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex003</title>
</head>
<body>
    <?php 
        $nome = "Fabio \u{1F418}";
        $sobrenome = "Medeiros";
        const PAIS = "Brasil";

        $nome = 'Eduardo \u{1F418}';
        $sobrenome = "Oliveira";
        const PAIS = "EUA";
        $data = date('D y-m-d');

        echo "Meu nome é $nome $sobrenome, e eu moro no ". PAIS. ". Hoje é ". date('y'). ". $data";
    ?>
</body>
</html>