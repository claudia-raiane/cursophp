<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do formulário retroalimentado
        $preco = $_GET['preco'] ?? 0;
        $porcentagem = $_GET['reajuste'] ?? 0;
        $reajuste =   $preco + ($preco * $porcentagem / 100);
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="idpreco" value="<?=$preco?>">

           <label for="reaj">Qual será o percentual de reajuste (<strong><output id="rangevalue"><?=$porcentagem?></output>%</strong>)</label>
        
            <input type="range" name="reajuste" id="reajuste" min = "0" max= "100" step= "1" value="<?=$porcentagem?>" oninput="rangevalue.value=value">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do reajuste</h2>
        <?php 
            echo "<p>O produto que custava $preco, com <strong>$porcentagem de aumento</strong> vai passar a custar <strong>$reajuste</strong> a partir de agora.</p>";
        ?>

    </section>
</body>
</html>