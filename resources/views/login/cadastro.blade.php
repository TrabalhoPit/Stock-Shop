@include('layouts/header')
<div class="container-left cadastro">
    <div class="container-image">
        <image src="assets/images/logo.png" />
    </div>
</div>

<form class="form form-cadastro" data-form-validate-fixed method="post" id="form-cadastro" action="cadastro/criar">
    @csrf
    <div class="content-form">
        <div class="header-container cadastro-header">
            <div class="container-image-form">
                <image src="assets/images/logo.png" />
            </div>
            <p class="title-signin">Cadastrar</p>
        </div>
        <div class="input-container">
            <input name="name" id="name" data-required placeholder="Nome" type="text">
            <input name="email" id="email" data-required data-email-validate placeholder="Email" type="text">
            <input name="password" id="password" data-required placeholder="Senha" type="password">
            <input name="password_check" id="password_check" data-required placeholder="Confirmar senha"
                type="password">
            <div class="container-radio">
                <div class="each-radio">
                    <input type="radio" id="seller" name="type" value="1" />
                    <label for="seller">Revendedor</label>
                </div>
                <div class="each-radio">
                    <input type="radio" id="buyer" name="type" value="2" />
                    <label for="buyer">Cliente</label>
                </div>
            </div>
        </div>
        <div class="container-text">
            <p>Já possui uma conta? Logue <a class="link-page" href="{{ route('login.signin') }}">aqui</a>.</p>
        </div>
        <div class="button-container">
            <button class="button-login" type="submit" id="cadastro">Confirmar</button>
        </div>
    </div>
</form>
@include('layouts/footer')
