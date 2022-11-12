
$("[data-product-click]").on("click", function (e) {
    e.preventDefault();
    const idProduct = $(this).data("product-click");
    $.ajax({
        method: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        dataType: "json",
        url: `/produto/detalhe/${idProduct}`,
    }).done(function (data) {
        if (data.success) {
            const formatter = new Intl.NumberFormat('pt-BR', {
                style: 'currency',
                currency: 'BRL',
            });
            const product = data.product;
            $("[data-image-product-modal]").css("background-image", `url("/assets/images/produtos/${product.image}")`)
            $("[data-name-product-modal]").text(product.name)
            $("[data-description-product-modal]").text(product.description)
            $("[data-value-product-modal]").text(formatter.format(product.price))
            $("[data-id-product-modal]").val(product.id)
        }
    });

    $("[data-modal-product]").fadeTo("slow", 1);
    $("body").css("overflow", "hidden");
})

$('[data-close-modal-product]').on('click', function (e) {
    $("[data-modal-product]").fadeOut("slow", 0);
    $("body").css("overflow", "visible");
})