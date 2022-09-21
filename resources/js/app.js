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

$('.form-login').on('submit', function (e) {
    if (!$('.form-login').valid()) {
        return;
    }
    e.preventDefault();
    $.ajax({
        method: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: `/login/validate`,
        dataType: "Json",
        data: {
            email: $('#email').val(),
            password: $('#password').val()
        }
    }).done(function (data) {
        if (data.success) {
        }
    });
});