
<!-- Formulario -->
<form action="c-llamado.php" method="POST">
    Inserte palabra <input type="text" name="palabra">
    <br>
    <input type="submit" value="Traducir"><!-- Botón -->
</form><!--  cierre del formulario -->

<?php echo $r; ?>