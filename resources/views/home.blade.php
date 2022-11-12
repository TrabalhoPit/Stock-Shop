@include('layouts/header')

<div class="containerInicial">
    <div class="navBar">
        <div class="container-logo containers">
            <a href="{{ route('home') }}"><img src="/assets/images/logo-minify.png" class="logo"></a>
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
                <a href="{{ route('myAccount.details') }}" class="action-account">Minha Conta</a>
                <a href="#" data-leave-account class="action-account">Sair</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="menu">
    <div class="item-container">
        <?php if (!empty($products)) { ?>
        <div class="container-titulo">
            <h1>Maquiagens mais vendidas</h1>
        </div>
        <div class="carrosel-item swiper mySwiper">
            <div class="container-item swiper-wrapper">
                <?php foreach ($products as $product) { ?>
                <div class="swiper-slide" data-product-click="<?= $product->id ?>">
                    <img src="/assets/images/produtos/<?= $product->image ?>" class="img">
                    <div class="divDescription">
                        <h2 class="tituloProduto"><?= $product->name ?></h2>
                        <div class="containerDescription">
                            <h3>Vendedor: <?= $product->seller->name ?></h3>
                            <h4>Preço: <?= $product->priceFormat() ?></h4>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <?php } ?>
    </div>
    <div class="item-container">
        <div class="container-titulo">
            <h1>Cosméticos mais vendidos</h1>
        </div>
        <div class="carrosel-item swiper mySwiper">
            <div class="container-item swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/assets/images/produtos/make.png" class="img">
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
@include('modal/product')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/home/index.js"></script>
<script src="js/modal/product.js"></script>
@include('layouts/footer')
