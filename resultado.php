<!DOCTYPE html>
<html>
    <head>
        <title>[ Calculo Volumen PHP]</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="cajaGrande">
            <?php
                define('ingreso', '<input class="tuvieja" type="text" name="altura">');
                define("PI", 3.14159265);
                define("BR", "<br>");
                $diametro = $_POST['diametro'];
                $altura = $_POST['altura'];
                
                if(is_numeric($diametro) && is_numeric($altura) && $diametro >= 0 && $altura >= 0){
                    $radio = $diametro/2;
                    $volumen = PI*($radio*$radio)*$altura;
                    echo BR ."El volumen del cilindro es de: ". $volumen;
                }
                if($diametro < 0 || $altura < 0){
                    echo BR ."El valor ingresado no puede ser negativo";
                }
                if(!is_numeric($diametro) || !is_numeric($altura)){
                    echo BR ."El valor ingresado no es un número";
                }
            ?>
        </div>
        <div>
            <a href="calculoVolumen.php" class="cajaGrande">Calcular otra vez</a>
            <a href="paginaPrincipal.php" class="cajaGrande">Volver al menú principal</a>
        </div>
    </body>
    <footer>
        <div class="cajaGrande"><a>Hecho por Rodolfo</a></div>
    </footer>

</html>