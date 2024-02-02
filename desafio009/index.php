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
        $valor1 = $_GET['numero1'] ?? 0;
        $valor2 = $_GET['numero2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;

    ?>
    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° valor</label>
            <input type="number" name="numero1" id="idnumero1" required value="<?=$valor1?>">
            <label for="peso1">1° peso</label>
            <input type="number" name="peso1" id="idpeso1" min="1" required value="<?=$peso1?>">
            <label for="valor2">2° valor</label>
            <input type="number" name="numero2" id="idnumero2" required value="<?=$valor2?>">
            <label for="peso1">2° peso</label>
            <input type="number" name="peso2" id="idpeso2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das médias</h2>
        <?php 
            $mediasimples = ($valor1 + $valor2) / 2;
            $mediaponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            echo "<p>Analisando os valores ". number_format($valor1, 2, ",", ".") ." e ". number_format($valor2, 2, ",", ".").":<br><ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($mediasimples, 2, ",", ".").".</li><li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($mediaponderada, 2, ",", ".") .".</li></ul></p>";
        ?>

    </section>
</body>
</html>