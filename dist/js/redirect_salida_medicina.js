const buscarMedicina = document.getElementById('redirect-salida-medicina');

buscarMedicina.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = './salida-medicina.php'
})