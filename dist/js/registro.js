const form = document.getElementById('formRegistro');
const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const registerButton = document.getElementById('registerButton');
const usernameMessage = document.getElementById('usernameMessage');
const passwordMessage = document.getElementById('passwordMessage');
const emailMessage = document.getElementById('emailMessage');

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

const handleFormValidation = () => {
  const isUsername = isUsernameValid(usernameInput.value);
  const isEmail = isEmailValid(emailInput.value);
  const isPassword = isPasswordValid(passwordInput.value);
  const isUsernameLengthValid = usernameInput.value.length >= 6;
  const isPasswordLengthValid = passwordInput.value.length >= 10;

  if (isUsername && isEmail && isPassword && isUsernameLengthValid && isPasswordLengthValid) {
    registerButton.removeAttribute('disabled');
  } else {
    registerButton.setAttribute('disabled', 'disabled');
  }
};

const validateUsername = () => {
  const username = usernameInput.value.trim();

  if (username.length === 0) {
    usernameMessage.textContent = '¡El nombre es requerido 🧐!';
    usernameMessage.classList.remove("success-message");
    usernameMessage.classList.add("danger-message");
  } else if (username.length < 6) {
    usernameMessage.textContent = '¡El nombre es muy corto! Debe tener al menos 6 caracteres ❌!';
    usernameMessage.classList.remove("success-message");
    usernameMessage.classList.add("danger-message");
  } else if (!isUsernameValid(username)) {
    usernameMessage.textContent = '¡El nombre contiene caracteres inválidos 😤!';
    usernameMessage.classList.remove("success-message");
    usernameMessage.classList.add("danger-message");
  } else {
    usernameMessage.textContent = '¡El nombre es válido ✅!';
    usernameMessage.classList.add("success-message");
    usernameMessage.classList.remove("danger-message");
  }

  handleFormValidation();
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
  registerButton.setAttribute('disabled', 'disabled');

  usernameMessage.textContent = '';
  passwordMessage.textContent = '';
  emailMessage.textContent = '';
};

usernameInput.addEventListener('input', () => {
  validateUsername();
});

emailInput.addEventListener('input', () => {
  validateEmail();
});

passwordInput.addEventListener('input', () => {
  validatePassword();
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
