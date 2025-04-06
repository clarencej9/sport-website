<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Sports Site') ?></title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Wbcode/public/">🏟️ SportsSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/Wbcode/public/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Wbcode/public/football">Football</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Wbcode/public/matches">Matches</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Wbcode/public/teams">Teams</a></li>
                </ul>
            </div>
        </div>
    </nav>
