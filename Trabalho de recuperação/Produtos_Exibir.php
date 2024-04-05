<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e calcula o preço de venda do produto</title>
</head>
<body>
    <?php
    echo "<h3>Exibe E CALCULA O PREÇO DE VENDA DO PRODUTO </h3>";

    $codigo = $_POST["codigo"];
    $descricao = $_POST["descricao"];
    $marca = $_POST["marca"];
    $precoCusto = $_POST["precoCusto"];
    $percentualAumento = $_POST["percentualAumento"];
    
    
    $precoVenda = $precoCusto * (1 + $percentualAumento / 100);

    
    echo "<h3>";
    echo "Código: " . $codigo;
    echo "Descrição: " . $descricao;
    echo "Marca: " . $marca . "<br>";
    echo "Preço de Custo: R$" . number_format($precoCusto, 2, ',', '.') . "<br>";
    echo "% de aumento: " . $percentualAumento . '%<br>';
    echo "Preço de Venda: R$" . number_format($precoVenda, 2, ',', '.') . "<br>";
    echo "</h3>";

    echo "<marquee behavior='alternete'>Desenvolvido por Yudi Nakamura - &copy; 2024</marquee>";
    ?>
</body>
</html>
