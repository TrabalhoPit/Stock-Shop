@include('layouts/header')

<div class="container">
    @include('my-account/menu/menu')
    <div class="container-info">
        <div class="container-titulo">
            <h1>Editar Senha</h1>
        </div>
        <form name="edit-password-form" data-form-validate-fixed data-edit-account-password-form action="">
            <div class="edit">
                <div class="row-double">
                    <div class="row">
                        <span class="titulo-informacao">Senha Antiga:</span>
                        <input class="value-input" data-required name="old_password" id="old_password" type="password" />
                    </div>
                    <div class="row">
                        <span class="titulo-informacao">Nova Senha:</span>
                        <input class="value-input" data-required name="new_password" id="new_password" type="password" />
                    </div>
                </div>
                <div class="button-edit">
                    <button data-edit-password>Editar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@include('layouts/footer')
