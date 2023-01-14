<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>directory1</title>
</head>
<body>
    <h1>Crear directori (1)</h1>
    <p>Escriu el nom del directori:</p>
    <form action="accion.php" method="post">
        <p><b>Nom:</b> <input type="text" name="nombre" value="directory" /></p>
        <p><button type="button" onclick="">mkdir</button> <!--rm--></p>  <!--mkdir onclick-->
    </form>
    <?php
        echo '
        <a href="/php/7/">Inici</a>';
        ?>
    <!--pered tem kak stavit v seredinu <php> delaiu tak shtobi bilo udobnie pisat cod, potom stavim-->
</body>
</html>