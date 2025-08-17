<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel + Vue</title>
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
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
    <digis-header></digis-header>
    <hero-section></hero-section>
    <product-list></product-list>
    <contact-form></contact-form>
    <digis-footer></digis-footer>
</div>
</body>
</html>
