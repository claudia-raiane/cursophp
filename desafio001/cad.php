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
                <h1>Resultado Final</h1>
        </header>
        <?php
            $numero = $_GET["numero"]; 
            echo "<p>O número escolhido foi <strong>$numero</strong>;<br>Seu <em>antecessor</em> é <strong>".($numero-1)."</strong>;<br>Seu <em>sucessor</em> é <strong>".($numero+1)."</strong>.</p>";
        ?>
      <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
    </main>
</body>
</html>