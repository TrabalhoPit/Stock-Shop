@include('layouts/header')
<div class="containerInicialProduto">
    <div class="navBar">
        <div class="container-logo containers">
            <img src="/assets/images/logo-minify.png" class="logo">
        </div>
        <div class="container-input containers">
            <div class="containerInput">
                <input type="text" class="inputs" placeholder="Pesquisar">
                <img src="/assets/images/icons/search.png" class="btnBuscar">
            </div>
        </div>
        <div class="container-actions <?= $isLoggedIn ? 'container-min' : '' ?> containers">
            <?php if (!$isLoggedIn) { ?>
                <div class="containerButtons">
                    <a href="{{ route('login.signin') }}"><button class="btnLogin buttons">Login</button></a>
                    <a href="{{ route('signup') }}"><button class="btnSign buttons">Sign up</button></a>
                </div>
            <?php } else { ?>
                <div class="container-my-account">
                    <img src="/assets/images/icons/my-account.png">
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div>
    
</div>
@include('layouts/footer')