<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main> 
        <header>
                <h1>Conversor de Moedas v1.0</h1>
        </header>
        <?php
            $numero = $_GET["numero"] ?? 0; 
            //cotação dolár = 4,95
            //$res = round($numero / 4.95, 2);
            //echo "<p>Seus R\$$numero equivalem a <strong>U$ $res</strong>*<br><strong>*Cotação fixa de R$4,95</strong> informada diretamente no código.</p>";
            $res = round($numero / 4.95);
            //echo "<p>Seus R\$". number_format($numero, 2, ",", "."). " equivalem a <strong>U$" . number_format($res, 2, ",", "."). "</strong>*<br><strong>*Cotação fixa de R$4,95</strong> informada diretamente no código.</p>";

            //biblioteca intl
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrão, $numero, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $res, "USD") . "</strong>*<br><strong>*Cotação fixa de R$4,95</strong> informada diretamente no código.</p>";

        ?>
      <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
    </main>
</body>
</html>