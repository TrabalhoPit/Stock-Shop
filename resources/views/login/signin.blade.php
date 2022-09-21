
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <title>Stock & Shop</title>
</head>

<body>
    <div class="container-left">
        <div class="container-image">
            <image src="assets/images/logo.png" />
        </div>
    </div>

    <form class="form-login" method="post" id="form-login" action="login/validate">
        @csrf
        <div class="content-form">
            <div class="header-container">
                <p>Acesse sua conta</p>
            </div>
            <div class="input-container">
                <div class="long-input">
                    <input name="email" id="email" placeholder="Email" type="text">
                    <input name="password" id="password" placeholder="Senha" type="password">
                </div>
            </div>
            <div class="button-container">
                <button class="button-login" type="submit" id="login" >Acessar</button>
            </div>
        </div>
    </form>
    <script src="js/app.js"></script>
</body>

</html>
