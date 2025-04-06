<?= view('templates/header', ['title' => 'Matches']) ?>

<style>
    .matches-hero {
        background-image: url('/Wbcode/public/images/Footballimg1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: yellow;
        padding: 6rem 2rem;
        text-align: center;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
    }

    .fixture-box {
        background-color: rgba(0, 0, 0, 0.6); 
        color: #fff;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
    }

    .ronaldo-img {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 100px;
        height: auto;
        z-index: 100;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }
</style>

<div class="matches-hero">
    <h1 class="display-4 fw-bold">Upcoming Matches</h1>
    <p class="lead">Get the latest fixtures and game times below.</p>
</div>

<div class="container py-4">
    <h2 class="mb-3">Match Fixtures</h2>
    <div id="fixtures">Loading fixtures...</div>
</div>

<img src="/Wbcode/public/images/ronaldo.jfif" alt="Ronaldo" class="ronaldo-img">

<script>
    const apiKey = '<?= '4d0ab3760b354f9a97d002c793b18585' ?>'; 

    fetch('https://api.football-data.org/v4/matches', {
        headers: { 'X-Auth-Token': apiKey }
    })
    .then(response => response.json())
    .then(data => {
        const container = document.getElementById('fixtures');
        container.innerHTML = '';

        if (data.matches && data.matches.length > 0) {
            data.matches.slice(0, 5).forEach(match => {
                const matchInfo = `
                    <div class="fixture-box">
                        <strong>${match.homeTeam.name}</strong> vs <strong>${match.awayTeam.name}</strong><br>
                        ${new Date(match.utcDate).toLocaleString()}
                    </div>
                `;
                container.innerHTML += matchInfo;
            });
        } else {
            container.innerHTML = 'No matches found.';
        }
    })
    .catch(error => {
        console.error(error);
        document.getElementById('fixtures').innerText = 'Error loading fixtures.';
    });
</script>

<?= view('templates/footer') ?>
