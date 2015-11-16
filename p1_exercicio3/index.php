<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>XPTO</title>
        <link rel="stylesheet" href="css/main_style.css" />
    </head>
    <body>
        <div class="container clearfix">
            <?php include "header.php"; ?>
            <section class="content" >
                <?php
                if (isset($_GET["sessao"])):true; 
                    $pg = $_GET["sessao"];
                    switch ($pg) {
                        case "1":
                            include "home.php";
                            break;
                        case "2":
                            include "emp.php";
                            break;
                        case "3":
                            include "local.php";
                            break;
                        case "4":
                            include "prod.php";
                            break;
                        case "5":
                            include "fale.php";
                            break;
                    }
                else:
                    include 'home.php';
                    $pg="";
                endif;
                ?>
            </section>
            <?php include "footer.php"; ?>
        </div>
    </body>
</html>