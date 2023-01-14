<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>htmml1</title>
</head>
<body>
    <h1>Crear HTML (1)</h1>
    <form action="accion.php" method="post">
        <p><b>Nom de la plantilla: </b> <input type="text" name="nombre" value="nom-plantilla"/></p>
        <p><b>Titol de la pagina: </b> <input type="text" name="titulo" value="Hola Món!"/></p>
        <p><b>Color de fons: </b><input type="color" name="color" value="#00FF00"/></p>
        <p><b>Footer inclos: </b><input type="checkbox" name="footer" checked /></p>
        <p><b>Directori: </b><br>    
        <input type="radio" name="directory"/>/public
        <br><input type="radio" name="directory"/>/public/directory</p>
        <p><button type="" onclick="">bash script</button> <!--rm--></p>  <!--bash-->        
    </form>
    <?php
        echo '
        <a href="/php/7/">Inici</a>';
        ?>
        <!--pered tem kak stavit v seredinu <php> delaiu tak shtobi bilo udobnie pisat cod, potom stavim-->
</body>
</html>