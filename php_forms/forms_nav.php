<?php 


$forms_home_link = BASE_URL . '/php_forms/';

?>

<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL; ?>">RootDocument</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= $forms_home_link; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $forms_home_link . 'login' ?>">Form Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>