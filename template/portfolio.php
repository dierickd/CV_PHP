<?php
?>

<section class="section portfolio" id="portfolio">
    <h2 class="title_section">Portfolio</h2>
    <div class="projects">
        <?php for ($i=0; $i < count($projects); $i++): ?>
        <?= portfolio($projects[$i]['link'],$projects[$i]['name'], $projects[$i]['file'], $projects[$i]['techno']); ?>
        <?php endfor ?>
    </div>
</section>
