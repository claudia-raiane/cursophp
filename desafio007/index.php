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
        $salario = $_GET['salario'] ?? 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" value="<?=$valor1?>" step = "0.01">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p> 
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $quantidade = intdiv($salario, 1380);
            $resto = $salario % 1380;
            echo "<p>Quem recebe um salário de R$".number_format($salario, 2, ",", ".").", ganha <strong>$quantidade salários mínimos</strong> + R$".number_format($resto, 2, ",", ".").".</p>";
        ?>

    </section>
</body>
</html>