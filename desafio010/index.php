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
        $corrente = date('Y');
        $ano = $_GET['nascimento'] ?? 2000;
        $atual = $_GET['atualidade'] ?? $corrente;
        $idade = $atual - $ano;
  
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="idnascimento" min= "1900" max="<?=$corrente?>"value="<?=$ano?>">

            <label for="atual">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$corrente?></strong>)</label>
            <input type="number" name="atualidade" id="idatualidade" min = "1900" value="<?=$atual?>">
            
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            echo "<p>Quem nasceu em $ano vai ter <strong>$idade anos</strong> em $atual!</p>";
        ?>

    </section>
</body>
</html>