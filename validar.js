document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.querySelector('form');
    
    if (formulario) {
        formulario.addEventListener('submit', function(e) {
            const nombre = document.querySelector('input[name="nombre"]').value;
            const email = document.querySelector('input[name="email"]').value;

            if (nombre.trim() === '') {
                e.preventDefault();
                alert('El nombre es obligatorio');
                return;
            }

            if (!email.includes('@')) {
                e.preventDefault();
                alert('Por favor, ingresa un correo electrónico válido');
                return;
            }
        });
    }
});