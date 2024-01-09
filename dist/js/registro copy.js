const form = document.getElementById('formRegistro');
const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const registerButton = document.getElementById('registerButton');

const usernameValidationMessage = document.getElementById('usernameMessage');
const emailValidationMessage = document.getElementById('emailMessage');
const passwordValidationMessage = document.getElementById('passwordMessage');

  const isEmailValid = (email) => {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
  };

  const isUsernameValid = (username) => {
    const usernameRegex = /^[a-zA-Z0-9áéíóúüÁÉÍÓÚÜ\s]+$/;
    return usernameRegex.test(username);
  };

  const isPasswordValid = (password) => {
    const passwordRegex = /^[a-zA-Z0-9áéíóúüÁÉÍÓÚÜ\s]+$/;
    return passwordRegex.test(password);
  };
  
  const containsSpecialCharacters = (password) => {
    const specialCharsRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    return specialCharsRegex.test(password);
  };

  const handleFormValidation = () => {
    const usernameValue = usernameInput.value.trim();
    const emailValue = emailInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (usernameValue.length > 0) {
     if (usernameValue.length < 6 && isUsernameValid(usernameValue)) {
        usernameValidationMessage.textContent = "¡El nombre es muy corto! Debe tener al menos 6 caracteres ❌!";
        usernameValidationMessage.classList.remove("success-message");
        usernameValidationMessage.classList.add("danger-message");
      } else if (!isUsernameValid(usernameValue)) {
        usernameValidationMessage.textContent = "¡El nombre contiene caracteres inválidos 😤!";
        usernameValidationMessage.classList.remove("success-message");
        usernameValidationMessage.classList.add("danger-message");
      } else {
        usernameValidationMessage.textContent = "¡El nombre es válido ✅!";
        usernameValidationMessage.classList.add("success-message");
        usernameValidationMessage.classList.remove("danger-message");
      }
    } else {
      document.getElementById('usernameMessage').innerText = '';
    }

    if (emailValue.length > 0) {
      if (!isEmailValid(emailValue) || /[<>]/.test(emailValue)) {
        emailValidationMessage.textContent = "¡Ingrese un correo válido ❌!";
        emailValidationMessage.classList.remove("success-message");
        emailValidationMessage.classList.add("danger-message");
      } else {
        emailValidationMessage.textContent = "¡El correo es válido ✅!";
        emailValidationMessage.classList.add("success-message");
        emailValidationMessage.classList.remove("danger-message");
      }
    } else {
      document.getElementById('emailMessage').innerText = '';
    }

    if (passwordValue.length > 0) {
        if (passwordValue.length < 6 && isPasswordValid(passwordValue)) {
          passwordValidationMessage.textContent = "¡La contraseña es muy corta ❌!";
          passwordValidationMessage.classList.remove("success-message");
          passwordValidationMessage.classList.add("danger-message");
        } else if (passwordValue.length >= 6 && passwordValue.length < 10 && isPasswordValid(passwordValue)) {
          passwordValidationMessage.textContent = "¡La contraseña es mediana 😢!";
          passwordValidationMessage.classList.remove("success-message");
          passwordValidationMessage.classList.add("danger-message");
        } else if (passwordValue.length >= 10 && isPasswordValid(passwordValue)) {
          passwordValidationMessage.textContent = "¡La contraseña es válida ✅!";
          passwordValidationMessage.classList.add("success-message");
          passwordValidationMessage.classList.remove("danger-message");
        } else if (!isPasswordValid(passwordValue)) {
            passwordValidationMessage.textContent = "¡La contraseña contiene caracteres inválidos 😤!";
            passwordValidationMessage.classList.remove("success-message");
            passwordValidationMessage.classList.add("danger-message");
        } 
        
        if (containsSpecialCharacters(passwordValue)) {
            passwordValidationMessage.textContent = "¡La contraseña contiene caracteres especiales inválidos 😤!";
            passwordValidationMessage.classList.remove("success-message");
            passwordValidationMessage.classList.add("danger-message");
            registerButton.setAttribute('disabled', 'disabled'); // Deshabilitar el botón
          } else {
            passwordValidationMessage.textContent = '';
            registerButton.removeAttribute('disabled'); // Habilitar el botón
          }
      } else {
        passwordValidationMessage.textContent = '';
        registerButton.setAttribute('disabled', 'disabled'); // Deshabilitar el botón cuando no hay entrada
      }

      if (usernameValue.length > 0 && emailValue.length > 0 && passwordValue.length > 0 && isUsernameValid(usernameValue) && isEmailValid(emailValue) && !/[<>]/.test(emailValue)) {
        registerButton.removeAttribute('disabled');
      } else {
        registerButton.setAttribute('disabled', 'disabled');
      }
  };

  const sanitizeInput = (input) => {
    return input.replace(/<script.*?>|<\/script>/gi, '');
  };

  const resetForm = () => {
    form.reset();
    registerButton.setAttribute('disabled', 'disabled');
  };

  usernameInput.addEventListener('input', () => {
    usernameInput.value = sanitizeInput(usernameInput.value);
    handleFormValidation();
  });

  emailInput.addEventListener('input', () => {
    emailInput.value = sanitizeInput(emailInput.value);
    handleFormValidation();
  });

  passwordInput.addEventListener('input', () => {
    passwordInput.value = sanitizeInput(passwordInput.value);
    handleFormValidation();
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log('Username:', usernameInput.value);
    console.log('Email:', emailInput.value);
    console.log('Password:', passwordInput.value);
    // Aquí puedes realizar más acciones, como enviar los datos a un servidor
    resetForm();
  });

  // Llamamos a la función de validación al cargar la página
  handleFormValidation();