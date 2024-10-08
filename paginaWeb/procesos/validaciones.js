
const form = document.getElementById('loginForm');
const userField = document.getElementById('user');
const pwdField = document.getElementById('pwd');


function contieneCaracteresEspeciales(texto) {
    const regex = /[^a-zA-Z0-9]/;  
    return regex.test(texto);
}


function mostrarError(mensaje) {
    alert(mensaje);
}


form.addEventListener('submit', function (event) {
    const user = userField.value.trim();
    const pwd = pwdField.value.trim();

 
    if (user === "" || pwd === "") {
        event.preventDefault();  // Detener el envío del formulario
        mostrarError("Los campos no pueden estar vacíos.");
        return;
    }

    
    if (contieneCaracteresEspeciales(pwd)) {
        event.preventDefault();
        mostrarError("La contraseña no debe contener caracteres especiales.");
        return;
    }

  
    if (pwd.length > 20) {
        event.preventDefault();
        mostrarError("La contraseña no debe superar los 20 caracteres.");
        return;
    }
});
