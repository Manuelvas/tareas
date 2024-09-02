<?php
require_once("layouts/header.php")
?>
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br> <br>
    <input type="text" placeholder="INGRESE CORREO:" name="correo"> <br> <br>
    <input type="text" placeholder="INGRESE TELEFONO:" name="telefono"> <br> <br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <br> <br>
    <input type="hidden" name="m" value="guardar">
</form>

<?php
require_once("layouts/footer.php");