<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matches</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Sports Website</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/Wbcode/public/teams">Teams</a></li>
                <li class="nav-item"><a class="nav-link" href="/Wbcode/public/matches">Matches</a></li>
                <li class="nav-item"><a class="nav-link" href="/Wbcode/public/football">Home</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <h1 class="mb-4">Match Schedule</h1>

    <?php if (!empty($matches)): ?>
        <div class="row">
            <?php foreach ($matches as $match): ?>
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $match['home_team']; ?> vs <?php echo $match['away_team']; ?></h5>
                            <p class="card-text">
                                <strong>Date:</strong> <?php echo $match['match_date']; ?><br>
                                <strong>Score:</strong> <?php echo $match['home_score']; ?> - <?php echo $match['away_score']; ?><br>
                                <strong>Status:</strong> <?php echo ucfirst($match['status']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No matches found.</p>
    <?php endif; ?>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <small>&copy; 2025 Sports Website</small>
</footer>

</body>
</html>
