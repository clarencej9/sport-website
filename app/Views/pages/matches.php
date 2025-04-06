<?= view('templates/header', ['title' => 'Matches']) ?>

<div class="container py-4">
    <h2 class="mb-3">Match Fixtures</h2>

    <?php if (!empty($matches)): ?>
        <?php foreach (array_slice($matches, 0, 5) as $match): ?>
            <p>
                <strong><?= esc($match['homeTeam']['name']) ?></strong> vs 
                <strong><?= esc($match['awayTeam']['name']) ?></strong><br>
                <?= date('l, j M Y H:i', strtotime($match['utcDate'])) ?>
            </p>
        <?php endforeach ?>
    <?php elseif (!empty($error)): ?>
        <p class="text-danger">Error: <?= esc($error) ?></p>
    <?php else: ?>
        <p>No matches found.</p>
    <?php endif; ?>
</div>

<?= view('templates/footer') ?>
