<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <title>Stock & Shop</title>
    <link rel="shortcut icon" href="assets/images/logo-minify.png" type="image/x-icon">
</head>

<body>
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
                <input name="email" id="email" data-required data-email-validate placeholder="Email"
                    type="text">
                <input name="password" id="password" data-required placeholder="Senha" type="password">
            </div>
            <div class="container-text">
                <p>Não possui uma conta? Crie a sua <a class="link-page" href="{{route('signup')}}">aqui</a>.</p>
            </div>
            <div class="button-container">
                <button class="button-login" type="submit" id="login">Entrar</button>
            </div>
        </div>
    </form>
    @include('sweetalert::alert')
    <script src="js/app.js"></script>
</body>

</html>
