<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>

<main>
    <h1>Listado de restaurantes</h1>
    <a href="/TFC_DAW/public/index.php?action=crear">Añadir restaurante</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Ubicación</th>
            <th>Horario</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($restaurantes as $r): ?>
        <tr>
            <td><?= $r['id_restaurante'] ?></td>
            <td><?= $r['nombre'] ?></td>
            <td><?= $r['descripcion'] ?></td>
            <td><?= $r['ubicacion'] ?></td>
            <td><?= $r['horario'] ?></td>
            <td>
                <a href="/TFC_DAW/public/index.php?action=editar&id=<?= $r['id_restaurante'] ?>">Editar</a>
                <a href="/TFC_DAW/public/index.php?action=eliminar&id=<?= $r['id_restaurante'] ?>"
                   onclick="return confirm('¿Eliminar este restaurante?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>