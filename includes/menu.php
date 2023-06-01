<?php?>

<div class="container-fluid">
    <iframe src="https://giphy.com/embed/8mobHRoCrANZOwcG4Q" alt="Logo" width="62" height="60"
        class="d-inline-block align-text-top" allowFullScreen></iframe>
    <a class="navbar-brand" href="?secao=home">Navbar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?secao=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?secao=historia">História</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?secao=personagens">Personagens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?secao=contato">Contato</a>
            </li>

        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div>
</div>