

<style>
    .football-hero {
        background-image: url('/Wbcode/public/images/news1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: yellow; 
        padding: 6rem 2rem;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.7); 
    }
</style>

<div class="football-hero text-center">
    <h1 class="display-4 fw-bold">Football Central</h1>
    <p class="lead">Stay up to date with the latest fixtures and football news.</p>
</div>

<div class="container py-5">
    <h3 class="mb-4">Live Fixtures</h3>
    <div id="liveMatches">Loading fixtures...</div>
</div>

<script>
    const apiKey = '<?= '4d0ab3760b354f9a97d002c793b18585' ?>';

    fetch('https://api.football-data.org/v4/matches', {
        headers: { 'X-Auth-Token': apiKey }
    })
    .then(response => response.json())
    .then(data => {
        const container = document.getElementById('liveMatches');
        container.innerHTML = '';

        if (data.matches && data.matches.length > 0) {
            data.matches.slice(0, 5).forEach(match => {
                const div = document.createElement('div');
                div.className = 'mb-3 p-3 border rounded bg-light';
                div.innerHTML = `
                    <strong>${match.homeTeam.name}</strong> vs <strong>${match.awayTeam.name}</strong><br>
                    <small>${new Date(match.utcDate).toLocaleString()}</small>
                `;
                container.appendChild(div);
            });
        } else {
            container.innerHTML = '<p class="text-muted">No live fixtures available.</p>';
        }
    })
    .catch(error => {
        console.error(error);
        document.getElementById('liveMatches').innerText = 'Error loading fixtures.';
    });
</script>


