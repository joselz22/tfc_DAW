CREATE DATABASE IF NOT EXISTS centro_comercial CHARACTER SET utf8mb4 COLLATE utf8mb4 USE centro_comercial;
/*Creación de tablas*/
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    contraseña VARCHAR(250) NOT NULL,
    rol ENUM('usuario', 'admin') DEFAULT 'usuario',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE restaurantes (
    id_restaurante INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    ubicacion VARCHAR(100),
    horario VARCHAR(100),
    imagen VARCHAR(250)
);
CREATE TABLE reservas (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_restaurante INT NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    num_personas INT NOT NULL DEFAULT 1,
    estado ENUM('activa', 'cancelada') DEFAULT 'activa',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (id_restaurante) REFERENCES restaurantes(id_restaurante) ON DELETE CASCADE
);
/*Datos de prueba*/
INSERT INTO usuarios (nombre, email, contraseña, rol) VALUES 
('Admin', 'admin@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin'),
('Juan García', 'juan@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'usuario');
INSERT INTO restaurantes (nombre, descripcion, ubicacion, horario, imagen) VALUES
('Ristorante Trattoria ', 'Restaurante italiano con pastas y pizzas artesanales', 'Planta 1 - Local 12', '12:00 - 23:00', 'trattoria.jpg'),
('Sushi Tokio', 'Cocina japonesa tradicional', 'Planta 1 - Local 15', '13:00 - 22:30', 'sushi.jpg'),
('El Rincón', 'Cocina española casera', 'Planta 2 - Local 3', '11:00 - 22:00', 'rincon.jpg');
INSERT INTO reservas (id_usuario, id_restaurante, fecha, hora, num_personas) VALUES
(2, 1, '2026-03-20', '14:00:00', 2),
(2, 3, '2026-03-22', '21:00:00', 4);