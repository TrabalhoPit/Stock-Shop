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
    <div class="container-left cadastro">
        <div class="container-image">
            <image src="assets/images/logo.png" />
        </div>
    </div>

    <form class="form-cadastro" method="post" id="form-cadastro" action="cadastro/criar">
        @csrf
        <div class="content-form">
            <div class="header-container">
                <p>Cadastrar</p>
            </div>
            <div class="input-container">
                <input name="name" id="name" data-required placeholder="Nome" type="text">
                <input name="email" id="email" data-required data-email-validate placeholder="Email" type="text">
                <input name="password" id="password" data-required placeholder="Senha" type="password">
                <select name="type" id="type" data-required required>
                    <option value="">Selecione um tipo de vendedor</option>
                    <option value="1">Vendedor</option>
                    <option value="2">Consumidor</option>
                </select>
            </div>
            <div class="button-container">
                <button class="button-login" type="submit" id="cadastro">Confirmar</button>
            </div>
        </div>
    </form>
    <script src="js/app.js"></script>
</body>

</html>