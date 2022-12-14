require("./bootstrap");
window.$ = require("jquery");
window.$ = require("jquery-validation");

$.extend($.validator.messages, {
    required: "Campo obrigatório!",
    email: "Email inválido!",
    equalTo: "Digite o mesmo valor por favor!"
});

$("[data-form-validate-fixed]").validate({});

$("input[data-required]").each(function () {
    $(this).rules("add", { required: true });
});

$("input[data-email-validate]").each(function () {
    $(this).rules("add", { email: true });
});

$("input#password_check").rules("add", { equalTo: "#password" });

$(".form-login").on("submit", function (e) {
    if (!$(".form-login").valid()) {
        return;
    }
    e.preventDefault();
    loginAjax($("#email").val(), $("#password").val());
});

$("#cadastro").on("click", function (e) {
    if (!$(".form-cadastro").valid()) {
        return;
    }
    e.preventDefault();
    $.ajax({
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        url: `/cadastro/criar`,
        data: {
            email: $("#email").val(),
            name: $("#name").val(),
            password: $("#password").val(),
            password: $("#password_check").val(),
            type: $('input[name=type]:checked').val(),
        },
    }).done(function (data) {
        if (data.success) {
            loginAjax(data.data.email, data.data.password);
        }
    });
});

function loginAjax(email, password) {
    $.ajax({
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: `/login/validate`,
        dataType: "Json",
        data: {
            email: email,
            password: password,
        },
    }).then(function (data) {
        if (data.success) {
            window.location.href = "/";
            return;
        }
        location.reload();
    });
}

$("[data-edit-account]").on("click", function (e) {
    if (!$("[data-edit-account-form]").valid()) {
        return;
    }
    e.preventDefault();
    $.ajax({
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        url: `/usuario/editar`,
        data: {
            id: $('#id').val(),
            email: $("#email").val(),
            name: $("#name").val(),
            password: $("#password").val(),
            password: $("#password_check").val(),
            type: $('input[name=type]:checked').val(),
        },
    }).done(function (data) {
        if (data.success) {
            location.reload();
        }
    });
});

$("[data-edit-password]").on("click", function (e) {
    if (!$("[data-edit-account-password-form]").valid()) {
        return;
    }
    e.preventDefault();
    $.ajax({
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        url: `/usuario/editar/senha`,
        data: {
            oldPassword: $('#old_password').val(),
            newPassword: $("#new_password").val(),
        },
    }).done(function (data) {
        if (data.success) {
            location.reload();
        }
    });
});