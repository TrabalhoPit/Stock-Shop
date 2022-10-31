<div class="container-menu">
    <?php foreach ($accountMenu as $menu){ ?>
    <a href="<?= $menu['url'] ?>">
        <div class="menus <?= $menu['active'] ? 'active' : '' ?>">
            <div class="titulo-menu"><?= $menu['name'] ?></div>
        </div>
    </a>
    <?php } ?>
</div>
