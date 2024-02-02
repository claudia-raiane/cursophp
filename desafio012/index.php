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
        $total_segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" min= "0" step = "1" required value="<?=$segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $total_segundos;
        //Total de semanas
        $semanas = floor($sobra / 604800);
        $sobra = $sobra % 604800;
        //Total de dias
        $dias = floor($sobra / 86400);
        $sobra = $sobra % 86400;
        //Total de horas
        $horas = floor($sobra / 3600);
        $sobra = $sobra % 3600;
        //Total de minutos
        $minutos = floor($sobra / 60);
        $sobra = $sobra % 60;
        //Total de segundos
        $segundos = $sobra;
    ?>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <!--php 
            //echo "<p>Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de:<ul><li>$semanas semanas;</li><li>$dias dias;</li><li>$horas horas;</li><li>$minutos minutos;</li><li>$segundos segundos.</li></ul></p>";
        -->
        <p>Analisando o valor que você digitou, <strong><?=number_format($total_segundos, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>