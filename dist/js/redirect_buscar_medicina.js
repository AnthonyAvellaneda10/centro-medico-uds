const buscarMedicina = document.getElementById('redirect-buscar-medicina');

buscarMedicina.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = './buscar-medicina.php'
})