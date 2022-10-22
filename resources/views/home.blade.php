<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/scroll/index.css">
    <title>Stock & Shop</title>
    <link rel="shortcut icon" href="assets/images/logo-minify.png" type="image/x-icon">
</head>

<body>
    <div class="containerInicial">
        <div class="navBar">
            <div class="container-logo containers">
                <img src="assets/images/logo-minify.png" class="logo">
            </div>
            <div class="container-input containers">
                <div class="containerInput">
                    <input type="text" class="inputs" placeholder="Pesquisar">
                    <img src="assets/images/icons/search.png" class="btnBuscar">
                </div>
            </div>
            <div class="container-actions <?= $isLoggedIn ? 'container-min' : '' ?> containers">
                <?php if(!$isLoggedIn) { ?>
                <div class="containerButtons">
                    <a href="{{ route('login.signin') }}"><button class="btnLogin buttons">Login</button></a>
                    <a href="{{ route('signup') }}"><button class="btnSign buttons">Sign up</button></a>
                </div>
                <?php } else { ?>
                <div class="container-my-account">
                    <img src="assets/images/icons/my-account.png">
                </div>
                <div class="dropdown-content">
                    <a href="#" class="action-account">Editar Conta</a>
                    <a href="#" class="action-account">Sair</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="item-container">
            <div class="container-titulo">
                <h1>Maquiagens mais vendidas</h1>
            </div>
            <div class="carrosel-item swiper mySwiper">
                <div class="container-item swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/make.png" class="img">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-titulo">
                <h1>Cosméticos mais vendidos</h1>
            </div>
            <div class="carrosel-item swiper mySwiper">
                <div class="container-item swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/make.png" class="img">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="divDescription">
                            <h2 class="tituloProduto">Kit de Maquiagem Eudora</h2>
                            <div class="containerDescription">
                                <h3>Vendedor: Luiza Pereira</h3>
                                <h4>Preço: R$100,00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/home/index.js"></script>
</body>

</html>
