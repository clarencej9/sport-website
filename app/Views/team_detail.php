<h2><?php echo $team['team_name']; ?></h2>
<p>Country: <?php echo $team['country']; ?></p>
<p>City: <?php echo $team['city']; ?></p>
<p>Stadium: <?php echo $team['stadium']; ?></p>
<p>Founded: <?php echo $team['founded']; ?></p>

<h3>Players</h3>
<ul>
    <?php foreach ($players as $player): ?>
        <li><?php echo $player['player_name']; ?> (<?php echo $player['position']; ?>)</li>
    <?php endforeach; ?>
</ul>
