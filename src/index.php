<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once "Search.php";
        use Vpolo\DioAvancadoPhp\Search;

        $busca = new Search;

        $resultado = $busca->getAdressFromZipcode('14406805');

        print_r($resultado)
    ?>
    </pre>
</body>
</html>