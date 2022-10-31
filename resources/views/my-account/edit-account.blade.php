@include('layouts/header')

<div class="container">
    @include('my-account/menu/menu')
    <div class="container-info">
        <div class="container-titulo">
            <h1>Editar conta</h1>
        </div>
        <form name="edit-account-form" data-form-validate-fixed data-edit-account-form action="">
            <input type="hidden" name="id" id="id" value="<?= $user->id ?>">
            <div class="edit">
                <div class="row">
                    <div class="information">
                        <span class="titulo-informacao">Nome:</span>
                        <input class="value-input" data-required name="name" id="name" type="text"
                            value="<?= $user->name ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="information">
                        <span class="titulo-informacao">Email:</span>
                        <input class="value-input" data-required data-email-validate name="email" id="email" type="text"
                            value="<?= $user->email ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="information">
                        <span class="titulo-informacao">Tipo:</span>
                        <div class="container-radio">
                            <div class="each-radio">
                                <input type="radio" id="seller" <?= $user->type == 1 ? 'checked' : '' ?>
                                    name="type" value="1" />
                                <label for="seller">Revendedor</label>
                            </div>
                            <div class="each-radio">
                                <input type="radio" id="buyer" <?= $user->type == 2 ? 'checked' : '' ?>
                                    name="type" value="2" />
                                <label for="buyer">Cliente</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-edit">
                    <button data-edit-account>Editar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@include('layouts/footer')
