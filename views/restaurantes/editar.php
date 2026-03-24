<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>
<main>
    <h1>Editar Restaurante</h1>
    <form action="/TFC_DAW/public/index.php?action=actualizar" method="POST">
        <input type="hidden" name="id" value="<?= $restaurante['id_restaurante'] ?>">

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?= $restaurante['nombre'] ?>" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion"><?= $restaurante['descripcion'] ?></textarea><br><br>

        <label>Ubicación:</label><br>
        <input type="text" name="ubicacion" value="<?= $restaurante['ubicacion'] ?>"><br><br>

        <label>Horario:</label><br>
        <input type="text" name="horario" value="<?= $restaurante['horario'] ?>"><br><br>

        <button type="submit">Actualizar</button>
        <a href="/TFC_DAW/public/index.php">Cancelar</a>
    </form>
</main>
<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>