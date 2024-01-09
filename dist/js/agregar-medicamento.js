document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('agregarMedicamento');
    const textInputs = form.querySelectorAll('input[type="text"]');
    const selectInputs = form.querySelectorAll('select');

    const isTextInputValid = (inputValue) => {
        const regex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s]+$/; // Expresión regular para validar el formato deseado
        return regex.test(inputValue);
    };

    const isSelectInputValid = (selectValue) => {
        return selectValue !== "Elige una opción";
    };

    const checkInputsValidity = () => {
        let allInputsValid = true;

        textInputs.forEach((input) => {
            if (!isTextInputValid(input.value)) {
                allInputsValid = false;
            }
        });

        selectInputs.forEach((select) => {
            if (!isSelectInputValid(select.value)) {
                allInputsValid = false;
            }
        });

        return allInputsValid;
    };

    const toggleSubmitButton = () => {
        const submitBtn = form.querySelector('.nextBtn');

        if (checkInputsValidity()) {
            submitBtn.removeAttribute('disabled');
        } else {
            submitBtn.setAttribute('disabled', 'disabled');
        }
    };

    const resetForm = () => {
        form.reset(); // Resetea el formulario
        toggleSubmitButton(); // Deshabilita el botón después del reseteo
    };

    textInputs.forEach((input) => {
        input.addEventListener('input', () => {
            toggleSubmitButton();
        });
    });

    selectInputs.forEach((select) => {
        select.addEventListener('change', () => {
            toggleSubmitButton();
        });
    });

    // Agregar evento al formulario para mostrar valores por consola al enviar
    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Evitar que el formulario se envíe

        const formData = {};

        textInputs.forEach((input) => {
            console.log(`Valor de ${input.name}: ${input.value}`);
            formData[input.name] = input.value;
        });

        selectInputs.forEach((select) => {
            console.log(`Valor de ${select.name}: ${select.value}`);
            formData[select.name] = select.value;
        });

        console.log("Valores del formulario (en formato JSON):");
        console.log(JSON.stringify(formData, null, 2)); // Muestra los datos en formato JSON

        resetForm(); // Resetea el formulario y deshabilita el botón

        // Aquí puedes enviar el formulario o realizar otras acciones con los valores
    });

    // Al cargar la página, asegúrate de que el botón esté deshabilitado inicialmente
    toggleSubmitButton();
});
