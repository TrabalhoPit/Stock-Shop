@include('layouts/header')
<div class="container-left login">
    <div class="container-image">
        <image src="assets/images/logo.png" />
    </div>
</div>

<form class="form form-login" data-form-validate-fixed method="post" action="">
    @csrf
    <div class="content-form">
        <div class="header-container">
            <div class="container-image-form">
                <image src="assets/images/logo.png" />
            </div>
            <p class="title-signin">Acesse sua conta</p>
        </div>
        <div class="input-container">
            <input name="email" id="email" data-required data-email-validate placeholder="Email" type="text">
            <input name="password" id="password" data-required placeholder="Senha" type="password">
        </div>
        <div class="container-text">
            <p>Não possui uma conta? Crie a sua <a class="link-page" href="{{ route('signup') }}">aqui</a>.</p>
        </div>
        <div class="button-container">
            <button class="button-login" type="submit" id="login">Entrar</button>
        </div>
    </div>
</form>
@include('layouts/footer')
