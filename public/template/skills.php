<?php
$count = count($skills);
?>
<section class="skills section" id="skills">
    <h2 class="title_section">Compétences</h2>
    <div class="cards">
        <?php for ($i=0; $i < $count; $i++): ?>
        <figure class="card">
            <img class="card-img" src="https://icongr.am/devicon/<?= $skills[$i]['link'] ?>" alt=" <?= $skills[$i]['name'] ?> ">
            <figcaption class="card-title"> <?= $skills[$i]['name'] ?> </figcaption>
        </figure>
        <?php endfor; ?>
    </div>
</section>
