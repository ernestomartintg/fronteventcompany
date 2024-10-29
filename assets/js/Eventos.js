const eventos = document.querySelectorAll('div.Eventos');

const paquetes = document.querySelectorAll('div.Paquetes');

eventos.forEach((evento, index) => {
    evento.addEventListener('click', () => {
        paquetes.forEach(paquete => {
            paquete.style.display = 'none';
        });

        paquetes[index].style.display = 'flex';
    });
});


const cerrarBotones = document.querySelectorAll('.cerrar');

cerrarBotones.forEach((boton) => {
    boton.addEventListener('click', () => {
        boton.parentElement.style.display = 'none';
    });
});