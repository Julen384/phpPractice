<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <style>

        header{
        position:relative;
        margin:auto;
        text-align:center;
        padding:5px;
        }

        nav{
        position:relative;
        margin:auto;
        width:100%;
        height:auto;
        background:black;
        }

        nav ul{
        position:relative;
        margin:auto;
        width:50%;
        text-align:center;
        }

        nav ul li{
        display:inline-block;
        width:24%;
        line-height:50px;
        list-style: nome;
        }

        nav ul li a{
        color:white;
        text-decoration:nome;
        }

        section{
        position:relative;
        padding:20px;
        }

    </style>
</head>
<body>

    <header>
        <h1>LOGOTIPO</h1>
    </header>

    <?php
        include "modules/navegacion.php"
    ?>

<section>
    <h1>PÁGINA DE INICIO</h1>
</section>

</body>
</html>