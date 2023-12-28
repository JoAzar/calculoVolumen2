<?php include 'definiciones.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo head ?>
    <body>
        <div class="cajaGrande">
            <div class="cilindroImagen"></div>
            <form name="formularioDatos" method="post" action="resultado.php">
                <p style="text-decoration: underline;">Calcular el volumen de un cilindro</p>
                <br/>Ingrese el diámetro🧠<br/><input class="input" type="text" name="diametro" value=""><br/>
                <br/>Ingrese la altura🧠<br/><input class="input" type="text" name="altura" value="">
                <br/><br/>
                <input class="botonCalcular" value="👉calcular👈" type="submit"/>
                <br/><br/>
            </form>
        </div>
    </body>
    <footer>
       <?php echo preguntaRodolfo ?>
    </footer>
</html>
