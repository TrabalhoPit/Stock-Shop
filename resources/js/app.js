require('./bootstrap');
window.$ = require('jquery')
window.$ = require('jquery-validation')

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
                // alert(data.success);
                    if(data.success){
                        window.location.reload();
                    }
              });
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

