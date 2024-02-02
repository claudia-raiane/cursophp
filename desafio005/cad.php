<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main> 
        <header>
            <h1>Analisador de Número Real</h1>
        </header>
        <?php
            $numero = $_GET["numero"] ?? 0; 
            $int = intval($numero);
            //$int = (int) $numero;

            $fra = $numero - $int;
            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", "."). "</strong> informado pelo usuário:</p>";
            echo "<ul><li>Parte inteira:<strong>". number_format($int, 0, ",", ".")."</strong>;</li><li>Parte fracionária: <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";


        ?>
      <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
    </main>
</body>
</html>