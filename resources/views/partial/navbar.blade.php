<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid justify-content-center" style="background-color: #Ffb400;">
        <a class="navbar-brand fs-2" href="#">Giant Book Store</a>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container-fluid justify-content-center" 
        id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ Route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ Route('bookcat', ['id' => 1]) }}">Fiction</a></li> 
                        <li><a class="dropdown-item"href="{{ Route('bookcat',['id' => 2]) }}">Self Development</a></li>
                        <li><a class="dropdown-item" href="{{ Route('bookcat', ['id' => 3]) }}">Manga</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ Route('pub') }}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ Route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>