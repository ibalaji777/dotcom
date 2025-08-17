
@extends('layouts')

@section('content')
    {{-- Hero / Cover --}}
    <section id="home" class="hero text-center py-5">
        <div class="container py-4">
            <h1 class="display-5 fw-bold">Welcome to MyShop</h1>
            <p class="lead mb-4">Your one‑stop shop for amazing products</p>
            <a href="#products" class="btn btn-light btn-lg">Shop Now</a>
        </div>
    </section>

    {{-- Product Showcase --}}
    <section id="products" class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0 fw-bold">Our Products</h2>
                {{-- Optional search/filter UI (static for now) --}}
                <form class="d-none d-md-flex" role="search" onsubmit="return false;">
                    <input class="form-control" type="search" placeholder="Search products..." aria-label="Search">
                </form>
            </div>

            <div class="row g-4">
                @php
                    // You can pass $products from your controller. Here's a safe fallback demo list.
                    $demoProducts = [
                        ['name' => 'Classic Sneakers', 'price' => 49.99, 'img' => 'https://picsum.photos/seed/s1/600/400'],
                        ['name' => 'Leather Backpack', 'price' => 89.00, 'img' => 'https://picsum.photos/seed/s2/600/400'],
                        ['name' => 'Smart Watch', 'price' => 129.99, 'img' => 'https://picsum.photos/seed/s3/600/400'],
                        ['name' => 'Wireless Earbuds', 'price' => 39.99, 'img' => 'https://picsum.photos/seed/s4/600/400'],
                        ['name' => 'Sunglasses', 'price' => 24.50, 'img' => 'https://picsum.photos/seed/s5/600/400'],
                        ['name' => 'T‑Shirt', 'price' => 14.99, 'img' => 'https://picsum.photos/seed/s6/600/400'],
                        ['name' => 'Gaming Mouse', 'price' => 29.99, 'img' => 'https://picsum.photos/seed/s7/600/400'],
                        ['name' => 'Portable Speaker', 'price' => 59.00, 'img' => 'https://picsum.photos/seed/s8/600/400'],
                    ];
                    $list = isset($products) && count($products) ? $products : $demoProducts;
                @endphp

                @foreach ($list as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-soft">
                            <img src="{{ $product['img'] ?? 'https://via.placeholder.com/600x400' }}" class="card-img-top" alt="{{ $product['name'] ?? 'Product' }}">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title">{{ $product['name'] ?? 'Product Name' }}</h5>
                                <p class="text-muted mb-3">${{ number_format($product['price'] ?? 0, 2) }}</p>
                                <a href="#" class="btn btn-primary mt-auto w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="bg-white py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <form method="post" action="#">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" name="name" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control" name="email" placeholder="you@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" name="message" rows="4" placeholder="How can we help?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- =============================================
  (Optional) QUICK START NOTES (not a blade file)
  1) Create the folders:
     resources/views/layouts/app.blade.php
     resources/views/partials/navbar.blade.php
     resources/views/partials/footer.blade.php
     resources/views/home.blade.php
  2) Route: Route::view('/', 'home');
============================================= --}}