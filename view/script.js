// Obtener los elementos de abrir y cerrar la carta
const abrirButton = document.getElementById('Abrir');
const cerrarButton = document.getElementById('Cerrar');
const contenedorCarta = document.getElementById('AbrirContenedor');

// Función para abrir la carta
abrirButton.addEventListener('click', () => {
    contenedorCarta.style.display = 'block';
});

// Función para cerrar la carta
cerrarButton.addEventListener('click', () => {
    contenedorCarta.style.display = 'none';
});
