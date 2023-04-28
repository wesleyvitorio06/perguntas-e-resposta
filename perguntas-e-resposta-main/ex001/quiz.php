<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta do seu quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>resposta Do Seu Quiz</h1>
        <?php  
        $acertos = $_GET ["acertos"]  ?? "<br>";
        $pmj = $_GET["pmj"] ?? "agua em vinho<br>";
        $davi = $_GET ["  davi"]  ?? "davi<br>";
        $paulo = $_GET["pmj"] ?? "13<br>";
        echo "<p> resposta certa é 13";
        echo "<p>resposta acertar é $pmj</p>";
        echo "<p> resposta certa é $davi";
        echo "<p>sua pontuação é 3$acertos ";
        ?>
        <button onclick="javascript:history.go(-1)">volta para inicio</button>
    </main>
</body>
</html>
