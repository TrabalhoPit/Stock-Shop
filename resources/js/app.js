require('./bootstrap');
window.$ = require('jquery')
window.$ = require('jquery-validation')


$(".form-login").validate({
    rules: {
        email: { required: true, email: true },
        password: { required: true }
    },
    messages: {
        email: {
            required: "Campo obrigatório",
            email: "Digite um email válido"
        },
        password: {
            required: "Campo obrigatório"
        }
    }
});
