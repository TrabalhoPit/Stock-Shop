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


    $('#login').on('click', function(e){
        e.preventDefault();
        // alert('teste');
        $.ajax({
                  method: "POST",
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  url: `/login/validate`,
                  data: { email: $('#email').val(), 
                          senha: $('#senha').val()  }
              }).done(function( data ) {
                    if(data.success){
                    }
              });
    });

    $('#cadastro').on('click', function(e){
        e.preventDefault();
        // alert('teste');
        $.ajax({
                  method: "POST",
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  url: `/cadastro/criar`,
                  data: { email: $('#email').val(), 
                          name: $('#name').val(), 
                          password: $('#password').val(), 
                          type: $('#type').val()  }
              }).done(function( data ) {
                    if(data.success){
                    }
              });
    });