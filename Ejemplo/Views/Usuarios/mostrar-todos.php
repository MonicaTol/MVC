<h1>Listado de usarios</h1>

<?php while ($usuario=$todos_los_usuarios->fetch_object()):?>

<?= $usuario->nombre ?>

<?php endwhile; ?>

