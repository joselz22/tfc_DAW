<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>

<main>
    <h1>Añadir Restaurante</h1>
    <form action="/TFC_DAW/public/index.php?action=guardar" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion"></textarea><br><br>

        <label>Ubicación:</label><br>
        <input type="text" name="ubicacion"><br><br>

        <label>Horario:</label><br>
        <input type="text" name="horario"><br><br>

        <button type="submit">Guardar</button>
        <a href="/TFC_DAW/public/index.php">Cancelar</a>
    </form>
</main>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>