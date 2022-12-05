@if (session()->has('success'))
    <div class="alert alert-success rounded-0"><?= session()->get('success') ?></div>
@elseif (session()->has('warning'))
    <div class="alert alert-warning rounded-0"><?= session()->get('warning') ?></div>


@elseif (session()->has('auth-success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->get('auth-success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('auth-failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= session()->get('auth-failed') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


@endif

