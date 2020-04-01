<?php
$countSocial = count($social);
?>
<section class="about section" id="about">
    <div class="picture-profile">
        <figure>
            <figcaption></figcaption>
            <img src="../assets/img/<?= $about['picture'] ?>" alt="Photo de <?= $about['name'] ?>">
        </figure>
    </div>
    <div class="details-profile">
        <div class="main-details">
            <h2 class="title-about">qui suis-je</h2>
            <p><?= $about['about'] ?></p>
        </div>
        <div class="social-icon">
            <?php for ($i=0; $i < $countSocial; $i++): ?>
                <a href="<?= $social[$i]['link'] ?>" target="_blank" title="Accéder à <?= $social[$i]['name'] ?>"><?=
                   $social[$i]['icon'] ?></a>
            <?php endfor; ?>
        </div>
    </div>
</section>
