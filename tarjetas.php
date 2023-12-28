<?php include 'definiciones.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo head ?>
    <body>
        <?php echo menu ?>
        <div class="cajaGrande" id="primeraCajaGrande" style=<?php echo imagen ?>;>
            <?php echo tarjeta1 ?>
            <?php echo tarjeta2 ?>
            <?php echo tarjeta3 ?>
        </div>
        <div class="cajaGrande" style=<?php echo tales ?>>
            <?php echo tarjeta2 ?>
            <?php echo tarjeta1 ?>
            <?php echo tarjeta3 ?>
        </div>
        <div class="cajaGrande" style='<?php echo imagen ?>';>
            <?php echo tarjeta3 ?>
            <?php echo tarjeta1 ?>
            <?php echo tarjeta2 ?>
        </div>
        <?php echo acercaDeNosotros ?>
    </body>

    <footer>
        <?php echo preguntaRodolfo ?>
    </footer>
</html>