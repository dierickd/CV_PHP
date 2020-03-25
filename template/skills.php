<?php
?>
<section class="skills section" id="skills">
    <h2 class="title_section">compétences</h2>
    <div class="cards">
        <?php foreach ($icons as $icon => $link): ?>
        <figure class="card">
            <img class="card-img" src=" <?= $link ?> " alt=" <?= $icon ?> ">
            <figcaption class="card-title"> <?= $icon ?> </figcaption>
        </figure>
        <?php endforeach; ?>
    </div>
</section>
