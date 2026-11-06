<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'IdeaHub' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                IdeaHub
            </a>

            <span class="text-white">
                Share Your Ideas
            </span>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-5">

        {{ $slot }}

    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">
            © {{ date('Y') }} IdeaHub. All rights reserved.
        </p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>