<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio número aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main> 
        <header>
                <h1>Trabalhando com números aleatórios</h1>
        </header>
        <?php
            $numero = rand(1, 100); 
            echo "<p>Gerando um número aleatório entre 0 e 100...<br>O valor gerado foi <strong>$numero</strong></p>";
        ?>
      <button onclick="javascript:document.location.reload()">🔄 Gerar outro </button>
    </main>
</body>
</html>