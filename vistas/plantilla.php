<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php include "vistas/modulos/inicio.php"; ?>

    <?php include "vistas/modulos/contenido.php"; ?>



    <div class="container-fluid">

        <div class="container py-5">

            <?php 

                #ISSET: isset() Determina si una variable está definida y no es NULL

                if(isset($_GET["modulos"])){

                    if( $_GET["modulos"] == "registro" ||
                        $_GET["modulos"] == "ingreso" ||
                        $_GET["modulos"] == "inicio" ||
                        $_GET["modulos"] == "inventario" ||
                        $_GET["modulos"] == "salir"){

                        include "modulos/".$_GET["modulos"].".php";

                    }else{

                        include "modulos/error404.php";
                    }


                }else{

                    include "modulos/registro.php";

                }

                

                ?>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>