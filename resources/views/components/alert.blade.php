@if (session()->has('success'))
    <div class="alert alert-success rounded-0"><?= session()->get('success') ?></div>
@elseif (session()->has('warning'))
    <div class="alert alert-warning rounded-0"><?= session()->get('warning') ?></div>
@endif
