// showSweetAlert.js

function mostrarSweetAlert(message) {
    Swal.fire({
        icon: 'success',
        title: message,
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        // Restablecer el formulario después de cerrar el SweetAlert
        document.getElementById('contactForm').reset();
    });
}
