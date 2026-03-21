<h1>Listado de restaurantes</h1>
<a href="../../public/index.php?action=crear">Añadir restaurante</a>
<br><br>
<table border="1" cellpading="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Ubicación</th>
        <th>Horario</th>
    </tr>

    <?php foreach ($restaurantes as $r): ?>
        <tr>
            <td><?= $r['id_restaurante'] ?></td>
            <td><?= $r['nombre'] ?></td>
            <td><?= $r['descripcion'] ?></td>
            <td><?= $r['ubicacion'] ?></td>
            <td><?= $r['horario'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>