require("./bootstrap");
window.$ = require("jquery");
window.$ = require("jquery-validation");

$.extend($.validator.messages, {
    required: "Campo obrigatório!",
    email: "Email inserido de forma incorreta.",
});

$("form").validate({});

$("input[data-required]").each(function () {
    $(this).rules("add", { required: true });
});

$("input[data-email-validate]").each(function () {
    $(this).rules("add", { email: true });
});


$(".form-login").on("submit", function (e) {
    if (!$(".form-login").valid()) {
        return;
    }
    e.preventDefault();
    $.ajax({
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: `/login/validate`,
        dataType: "Json",
        data: {
            email: $("#email").val(),
            password: $("#password").val(),
        },
    }).done(function (data) {
        if (data.success) {
        }
    });
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
        url: `/cadastro/criar`,
        data: {
            email: $("#email").val(),
            name: $("#name").val(),
            password: $("#password").val(),
            type: $("#type").val(),
        },
    }).done(function (data) {
        // alert(data.success);
        if (data.success) {
            window.location.reload();
        }
    });
});
