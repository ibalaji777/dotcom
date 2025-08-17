<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'MyShop' }}</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Optional: custom styles --}}
    <style>
        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
        }
        .card img { object-fit: cover; height: 220px; }
        .shadow-soft { box-shadow: 0 10px 25px rgba(0,0,0,.06); }
    </style>
</head>
<body class="bg-light">

@include('partials.navbar')

<main class="min-vh-100">
    @yield('content')
</main>

@include('partials.footer')

</body>
</html>