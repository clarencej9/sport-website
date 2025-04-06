

<div class="container py-4">
    <h2 class="mb-3">Information about Clubs in Prem,La liga, Seria A, Bundesliga
    </h2>

    <input 
        type="text" 
        id="teamSearch" 
        placeholder="Search teams..." 
        class="form-control mb-3" 
    />

    <ul id="teamResults" class="list-group">
        <?php if (!empty($teams) && is_array($teams)): ?>
            <?php foreach ($teams as $team): ?>
                <li class="list-group-item">
                    <?= esc($team['name']) ?> 
                    (<?= esc($team['location']) ?>) - Founded: <?= esc($team['founded']) ?>
                </li>
            <?php endforeach ?>
        <?php else: ?>
            <li class="list-group-item text-muted">No team data available.</li>
        <?php endif ?>
    </ul>
</div>

<script>
    const searchInput = document.getElementById('teamSearch');
    const resultList = document.getElementById('teamResults');

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.trim();

        if (query.length === 0) {
            return;
        }

        fetch('/Wbcode/public/search/teams?q=' + encodeURIComponent(query))
            .then(response => response.json())
            .then(data => {
                resultList.innerHTML = '';

                if (data.length === 0) {
                    resultList.innerHTML = '<li class="list-group-item text-muted">No teams found.</li>';
                    return;
                }

                data.forEach(team => {
                    const li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.textContent = `${team.name} (${team.location}) - Founded: ${team.founded}`;
                    resultList.appendChild(li);
                });
            });
    });
</script>


