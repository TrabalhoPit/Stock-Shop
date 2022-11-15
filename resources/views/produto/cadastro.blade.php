@include('layouts/header')
<div class="containerInicial">
    <div class="navBar">
        <div class="container-logo containers">
            <a href="{{ route('home') }}"><img src="/assets/images/logo-minify.png" class="logo"></a>
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
            <div class="dropdown-content">
                <a href="{{ route('myAccount.details') }}" class="action-account">Minha Conta</a>
                <a href="#" data-leave-account class="action-account">Sair</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="bodyProduct">
    <h1 class="textTitule">Cadastre seu <span class="textColor">Produto</span></h1>
    <div class="containerImageProduct">
        <div class="containerImage">
            <img src="/assets/images/sabonete.jpg">
        </div>
    </div>
</div>
<div class="containerInformationProduct">
    <h1 class="textInformation">Informações do Produto</h1>
    <div class="information">
        <div class="containerLabel">
            <label class="textLabel">Nome do Produto:</label>
            <input type="text" class="inputsInformationNome">
        </div>
        <div class="containerLabel">
            <label class="textLabel">Quant. em Estoque:</label>
            <input type="number" class="inputsInformationEstoque">
        </div>
        <div class="containerLabel">
            <label class="textLabel">Marca do Produto:</label>
            <input type="text" class="inputsInformationMarca" placeholder="Ex: Natura, Boticário, Eudora, etc...">
        </div>
        <div class="containerLabel">
            <label class="textLabel">Categoria:</label>
            <input type="text" class="inputsInformationCategoria">
        </div>
        <div class="containerLabelValor">
            <label class="textLabel">Valor do Produto:</label>
            <input type="number" class="inputsInformationValor">
        </div>
        <div class="containerLabel">
            <label class="textLabel">Descrição:</label>
            <input type="text" class="inputsInformationDescription">
        </div>
    </div>
    <div class=containerButtons>
        <button class="btnSalvarProduct">Salvar</button>
        <button class="btnLimpar">Limpar</button>
    </div>
</div>
<script src="/js/home/index.js"></script>
@include('layouts/footer')
