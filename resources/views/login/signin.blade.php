<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Stock & Shop</title>
</head>

<body>
    <div class="container-left">
        <div class="container-image">
            <image src="assets/images/logo.png" />
        </div>
    </div>

    <form class="form-login" method="post" action="">
        @csrf
        <div class="content-form">
            <div class="header-container">
                <div class="container-image-form">
                    <image src="assets/images/logo.png" />
                </div>
                <p>Acesse sua conta</p>
            </div>
            <div class="input-container">
                <input name="email" id="email" placeholder="Email" type="text">
                <input name="password" id="password" placeholder="Senha" type="password">
            </div>
            <div class="button-container">
                <button class="button-login" type="submit">Acessar</button>
            </div>
        </div>
    </form>
    <script src="js/app.js"></script>
</body>

</html>