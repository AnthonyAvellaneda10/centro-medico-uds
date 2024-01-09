const form = document.getElementById('formLogin');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const loginButton = document.getElementById('loginButton');
const passwordMessage = document.getElementById('passwordMessage');
const emailMessage = document.getElementById('emailMessage');

const isEmailValid = (email) => {
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  return emailRegex.test(email);
};

const isPasswordValid = (password) => {
  const passwordRegex = /^[a-zA-Z0-9áéíóúüÁÉÍÓÚÜ\s]+$/;
  return passwordRegex.test(password);
};

const handleFormValidation = () => {
  const isEmail = isEmailValid(emailInput.value);
  const isPassword = isPasswordValid(passwordInput.value);
  const isPasswordLengthValid = passwordInput.value.length >= 10;

  if (isEmail && isPassword && isPasswordLengthValid) {
    loginButton.removeAttribute('disabled');
  } else {
    loginButton.setAttribute('disabled', 'disabled');
  }
};

const validatePassword = () => {
  const password = passwordInput.value.trim();

  if (password.length === 0) {
    passwordMessage.textContent = '¡La contraseña es requerida 🧐!';
    passwordMessage.classList.remove("success-message");
    passwordMessage.classList.add("danger-message");
    passwordMessage.classList.remove("warning-message");
  } else if (password.length < 6 && isPasswordValid(password)) {
    passwordMessage.textContent = '¡La contraseña es muy corta ❌!';
    passwordMessage.classList.remove("success-message");
    passwordMessage.classList.add("danger-message");
    passwordMessage.classList.remove("warning-message");
  } else if (password.length < 10 && isPasswordValid(password)) {
    passwordMessage.textContent = '¡La contraseña es mediana 😢!';
    passwordMessage.classList.remove("success-message");
    passwordMessage.classList.remove("danger-message");
    passwordMessage.classList.add("warning-message");
  } else if (!isPasswordValid(password)) {
    passwordMessage.textContent = '¡La contraseña contiene caracteres inválidos 😤!';
    passwordMessage.classList.remove("success-message");
    passwordMessage.classList.add("danger-message");
    passwordMessage.classList.remove("warning-message");
  } else {
    passwordMessage.textContent = '¡La contraseña es válida ✅!';
    passwordMessage.classList.add("success-message");
    passwordMessage.classList.remove("danger-message");
    passwordMessage.classList.remove("warning-message");
  }

  handleFormValidation();
};

const validateEmail = () => {
  const email = emailInput.value.trim();

  if (email.length === 0) {
    emailMessage.textContent = '¡El correo es requerido 🧐!';
    emailMessage.classList.remove("success-message");
    emailMessage.classList.add("danger-message");
  } else if (!isEmailValid(email)) {
    emailMessage.textContent = '¡Ingrese un correo válido ❌!';
    emailMessage.classList.remove("success-message");
    emailMessage.classList.add("danger-message");
  } else {
    emailMessage.textContent = '¡El correo es válido ✅!';
    emailMessage.classList.add("success-message");
    emailMessage.classList.remove("danger-message");
  }

  handleFormValidation();
};

const sanitizeInput = (input) => {
  return input.replace(/<script.*?>|<\/script>/gi, '');
};

const resetForm = () => {
  form.reset();
  loginButton.setAttribute('disabled', 'disabled');

  passwordMessage.textContent = '';
  emailMessage.textContent = '';
};

emailInput.addEventListener('input', () => {
  validateEmail();
});

passwordInput.addEventListener('input', () => {
  validatePassword();
});

form.addEventListener('submit', (e) => {
  e.preventDefault();
  console.log('Email:', emailInput.value);
  console.log('Password:', passwordInput.value);
  // Aquí puedes realizar más acciones, como enviar los datos a un servidor

  resetForm();
});

// Llamamos a la función de validación al cargar la página
handleFormValidation();
