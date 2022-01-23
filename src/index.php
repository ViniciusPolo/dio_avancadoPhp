<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<p, initial-scale=1.0">
    <title>Buscador de CEP</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <h1>Busca de CEP</h1>
    <div class="form">

        <form>
            CEP:<input type="type="number placeholder="00000000" method="GET" name="cep">
            <br><br><input type="submit">
        </form>
    </div>
    <div>
    Cep: Informado: 
        <?php
    echo $_GET['cep'];
    
    ?>
    </div>
    <pre>
    <?php
        require_once "Search.php";
        use Vpolo\DioAvancadoPhp\Search;

        $busca = new Search;
        
        $resultado = $busca->getAdressFromZipcode($_GET['cep']);

        print_r($resultado)
    ?>
    </pre>
</body>
</html>