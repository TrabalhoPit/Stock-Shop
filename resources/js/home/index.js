window.$ = require("jquery");

if (typeof Swiper !== "undefined") {
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
}

$('[data-leave-account]').on("click", function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Você tem certeza que deseja deslogar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                dataType: "json",
                url: `/disconnect`,
            }).done(function (data) {
                if (data.success) {
                    Swal.fire(
                        'Deslogado!',
                        '',
                        'success'
                    );
                    location.reload();
                }
            });
        }
    })
});
