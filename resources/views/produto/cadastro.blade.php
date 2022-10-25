<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <?php } ?>
            </div>
        </div>
    </div>    
</body>
</html>