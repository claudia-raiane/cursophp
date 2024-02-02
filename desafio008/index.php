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
        $valor = $_GET['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Número</label>
            <input type="number" name="numero" id="idnumero" value="<?=$valor1?>">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o <strong>número $valor</strong>, temos:<br><ul><li>A sua raiz quadrada é <strong>". number_format($valor**(1/2), 3, ",", "."). "</strong>;</li><li>A sua raiz cúbica é <strong>". number_format($valor**(1/3), 3, ",", ".") ."</strong>.</li></ul></p>";
        ?>

    </section>
</body>
</html>