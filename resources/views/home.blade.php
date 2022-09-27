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
</head>

<body>
    Você está logado como {{$name}}, do tipo {{$type}}
    @include('sweetalert::alert')
    <script src="js/app.js"></script>
</body>

</html>
