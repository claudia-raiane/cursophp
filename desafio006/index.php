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
        $valor1 = $_GET['dividendo'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Dividendo</label>
            <input type="number" name="dividendo" id="idvalor1" min='0' value="<?=$valor1?>">
            <label for="valor2">Divisor</label> 
            <input type="number" name="divisor" id="idvalor2" min ='1' value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 
            //Cálculos
            $quociente = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
            //echo "<p>Temos como dividendo: <strong>$valor1</strong>;<br>Temos como divisor: <strong>$valor2</strong>;<br>Temos como resto: <strong>". $valor1 % $valor2. "</strong>;<br>Temos como quociente: <strong>". intdiv($valor1, $valor2) ."</strong>.</p>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>