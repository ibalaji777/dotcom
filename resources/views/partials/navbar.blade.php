<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">MyShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('#home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('#products') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('#contact') }}">Contact</a></li>
            </ul>
            <a href="#" class="btn btn-outline-primary ms-3 position-relative">
                🛒
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $cartCount ?? 0 }}</span>
            </a>
        </div>
    </div>
</nav>