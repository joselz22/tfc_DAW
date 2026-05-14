//Validacóin del login
const formLogin = document.getElementById('form-login');
if (formLogin) {
    formLogin.addEventListener('submit', function (e) {
        const email    = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        let errores    = [];

        if (email === '') errores.push('El email es obligatorio.');
        if (!email.includes('@')) errores.push('El email no es válido.');
        if (password === '') errores.push('La contraseña es obligatoria.');
        if (password.length < 6) errores.push('La contraseña debe tener al menos 6 caracteres.');

        if (errores.length > 0) {
            e.preventDefault();
            mostrarErrores('errores-login', errores);
        }
    });
}
//Validación de registro
const formRegistro = document.getElementById('form-registro');
if (formRegistro) {
    formRegistro.addEventListener('submit', function (e) {
        const nombre   = document.getElementById('nombre').value.trim();
        const email    = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const confirm  = document.getElementById('confirm').value.trim();
        let errores    = [];

        if (nombre === '') errores.push('El nombre es obligatorio.');
        if (nombre.length < 2) errores.push('El nombre debe tener al menos 2 caracteres.');
        if (email === '') errores.push('El email es obligatorio.');
        if (!email.includes('@')) errores.push('El email no es válido.');
        if (password === '') errores.push('La contraseña es obligatoria.');
        if (password.length < 6) errores.push('La contraseña debe tener al menos 6 caracteres.');
        if (password !== confirm) errores.push('Las contraseñas no coinciden.');

        if (errores.length > 0) {
            e.preventDefault();
            mostrarErrores('errores-registro', errores);
        }
    });
}
//Validación de errores del formulario de reserva
const formReserva = document.getElementById('form-reserva');
if (formReserva) {
    formReserva.addEventListener('submit', function (e) {
        const fecha       = document.getElementById('fecha').value;
        const hora        = document.getElementById('hora').value;
        const numPersonas = document.getElementById('num_personas').value;
        let errores       = [];
        if (fecha === '') errores.push('La fecha es obligatoria.');
        if (hora === '') errores.push('La hora es obligatoria.');
        if (numPersonas === '' || numPersonas < 1) errores.push('El número de personas debe ser al menos 1.');
        if (numPersonas > 20) errores.push('El número máximo de personas es 20.');
        const hoy = new Date();
        hoy.setHours(0, 0, 0, 0);
        const fechaSeleccionada = new Date(fecha);
        if (fechaSeleccionada < hoy) errores.push('La fecha no puede ser anterior a hoy.');
        if (errores.length > 0) {
            e.preventDefault();
            mostrarErrores('errores-reserva', errores);
        }
    });
}
//Mostrar errores causados
function mostrarErrores(id, errores) {
    const contenedor = document.getElementById(id);
    if (!contenedor) return;
    contenedor.innerHTML = errores.map(e => `<p>• ${e}</p>`).join('');
    contenedor.classList.remove('hidden');
    contenedor.scrollIntoView({ behavior: 'smooth', block: 'center' });
}
//Filtro en tipo de tiendas

const filtrosBtns = document.querySelectorAll('.filtro-btn');
const tarjetasTiendas = document.querySelectorAll('[data-categoria]');

if (filtrosBtns.length > 0) {
    filtrosBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filtrosBtns.forEach(b => {
                b.style.backgroundColor = '';
                b.style.color = '';
                b.classList.remove('bg-blue-800', 'text-white');
                b.classList.add('bg-white', 'text-gray-600');
            });
            btn.classList.remove('bg-white', 'text-gray-600');
            btn.classList.add('bg-blue-800', 'text-white');

            const filtro = btn.dataset.filtro;
            tarjetasTiendas.forEach(tarjeta => {
                if (filtro === 'todas' || tarjeta.dataset.categoria === filtro) {
                    tarjeta.style.display = '';
                } else {
                    tarjeta.style.display = 'none';
                }
            });
        });
    });
}
//Menú hamburguesa solo para móvil
const menuToggle = document.getElementById('menu-toggle');
const menuMovil  = document.getElementById('menu-movil');
const lineas     = document.querySelectorAll('.hamburger-line');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        const abierto = !menuMovil.classList.contains('hidden');

        if (abierto) {
            menuMovil.classList.add('hidden');
            lineas[0].style.transform = '';
            lineas[1].style.opacity   = '';
            lineas[2].style.transform = '';
        } else {
            menuMovil.classList.remove('hidden');
            lineas[0].style.transform = 'translateY(8px) rotate(45deg)';
            lineas[1].style.opacity   = '0';
            lineas[2].style.transform = 'translateY(-8px) rotate(-45deg)';
        }
    });

    menuMovil.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuMovil.classList.add('hidden');
            lineas[0].style.transform = '';
            lineas[1].style.opacity   = '';
            lineas[2].style.transform = '';
        });
    });
}