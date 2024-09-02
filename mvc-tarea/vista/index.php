<?php
require_once("layouts/header.php");

?>

<a href="..\mvc" class="btn">PRODUCTOS</a>
<a href="..\mvc-tarea" class="btn">CLIENTES</a> <br> <br>
<a href="index.php?m=nuevo" class="btn">NUEVO</a> <br> <br>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>CORREO</td>
            <td>TELEFONO</td>
            <td>ACCIÓN</td>
        </tr>
    </thead>
    <tbody>
        <?php
            if (!empty($dato)):
                foreach ($dato as $key => $value)
                    foreach ($value as $v): ?>
                    <tr>
                        <td><?php echo $v['id'] ?></td>
                        <td><?php echo $v['nombre'] ?></td>
                        <td><?php echo $v['correo'] ?></td>
                        <td><?php echo $v['telefono'] ?></td>
                        <td>
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['id'] ?>">EDITAR</a>

                            <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");