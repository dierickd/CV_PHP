<?php
?>

<section class="section portfolio" id="portfolio">
    <h2 class="title_section">Portfolio</h2>
    <div class="projects">
        <?php for ($i=0; $i < count($projects); $i++): ?>
            <div class="card-project">
                <img class="card-project-img" src="../img/<?= $projects[$i]['file'] ?> " alt=" <?= $projects[$i]['name'] ?> ">
                <div class="card-project-footer">
                    <span class="name-site"> <?= $projects[$i]['name'] ?> </span>
                    <span> <?= $projects[$i]['techno'] ?> </span>
                    <a href=" <?= $projects[$i]['link'] ?> " target="_blank">Voir le site</a>
                </div>
                <a href=" <?= $projects[$i]['link'] ?> " target="_blank" class="hover">
                    <?= $projects[$i]['name'] ?>
                    <span><?= $projects[$i]['techno'] ?></span>
                </a>
            </div>



        <?php endfor ?>
    </div>
</section>
