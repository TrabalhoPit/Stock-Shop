@include('layouts/header')

<div class="container">
    @include('my-account/menu/menu')
    <div class="container-info">
        <div class="container-titulo">
            <h1>Detalhes da conta</h1>
        </div>       
        <div class="info">
            <div class="row-double">
                <div class="information">
                    <span class="titulo-informacao">Seu nome:</span>
                    <span class="value-informacao"><?= $user->name ?></span>
                </div>
                <div class="information">
                    <span class="titulo-informacao">Criado em:</span>
                    <span class="value-informacao"><?= $user->dateCreated ?></span>
                </div>
            </div>
            <div class="row">
                <div class="information">
                    <span class="titulo-informacao">Seu email:</span>
                    <span class="value-informacao"><?= $user->email ?></span>
                </div>
            </div>
            <div class="row">
                <div class="information">
                    <span class="titulo-informacao">Seu tipo:</span>
                    <span class="value-informacao"><?= $user->typeString ?></span>
                </div>
            </div>
        </div>
    </div>
</div>









@include('layouts/footer')
