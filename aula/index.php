<html>
<head>
    <?php require_once("head.php"); ?>
</head>

<body>

    <div class="container">
        <?php require_once("menu.php"); ?>
    </div>

    <div class="container">
        <?php
            $pagina = $_GET["arq"];

            if (empty($pagina)){
                require_once("index.php?arq=home.php");
            }elseif ($pagina == 'home.php'){
                require_once($_GET["arq"]);
            }elseif ($pagina == 'empresa.php'){
                require_once($_GET["arq"]);
            }elseif ($pagina == 'produtos.php'){
                require_once($_GET["arq"]);
            }elseif ($pagina == 'servico.php'){
                require_once($_GET["arq"]);
            }elseif ($pagina == 'contato.php'){
                require_once($_GET["arq"]);
            }else{
                echo '<h2>Página não encontrada</h2>';
            }
         ?>
    </div>

</body>

<header class="page-header container">
    <?php require_once("header.php"); ?>
</header>

</html>