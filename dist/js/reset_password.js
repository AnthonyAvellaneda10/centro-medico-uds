document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.getElementById("email");
    const emailValidationMessage = document.getElementById("emailValidationMessage");
    const submitButton = document.querySelector(".reset-password");
    const resetPasswordForm = document.getElementById("formResetPassword");
  
    submitButton.setAttribute("disabled", true); // Botón deshabilitado por defecto
  
    function validateEmail() {
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
      const containsSpecialChars = /[<>\\]/.test(email); // Actualizado para incluir '<', '>', y '\'
  
      if (email === "") {
        emailValidationMessage.textContent = "¡El correo es requerido 🧐!";
        emailValidationMessage.classList.remove("success-message");
        emailValidationMessage.classList.add("danger-message");
        submitButton.setAttribute("disabled", true);
      } else if (containsSpecialChars || !emailRegex.test(email)) {
        emailValidationMessage.textContent = "¡Ingrese un correo válido ❌!";
        emailValidationMessage.classList.remove("success-message");
        emailValidationMessage.classList.add("danger-message");
        submitButton.setAttribute("disabled", true);
      } else {
        emailValidationMessage.textContent = "¡El correo es válido ✅!";
        emailValidationMessage.classList.remove("danger-message");
        emailValidationMessage.classList.add("success-message");
        submitButton.removeAttribute("disabled");
      }
    }
  
    emailInput.addEventListener("input", validateEmail);
  
    resetPasswordForm.addEventListener("submit", function (event) {
      event.preventDefault();
      const emailValue = emailInput.value.trim();
      console.log("Correo electrónico ingresado:", emailValue);
  
      // Resetea el formulario después de mostrar por consola el correo ingresado
      resetPasswordForm.reset();

      emailValidationMessage.textContent = "";
  
      // Vuelve a deshabilitar el botón después de enviar el formulario
      submitButton.setAttribute("disabled", true);
    });
  });
  