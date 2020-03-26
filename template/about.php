<?php
?>
<section class="about section" id="about">
    <div class="picture-profile">
        <figure>
            <figcaption></figcaption>
            <img src="../img/me2.png" alt="Photo de Dierick Déwi">
        </figure>
    </div>
    <div class="details-profile">
        <div class="main-details">
            <h2 class="title-about">qui suis-je</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur dicta dolore dolorem ea
                eaque explicabo in, neque, odit possimus qui, reprehenderit tenetur vitae? Animi architecto laboriosam
                optio quaerat voluptas.
            </p>
        </div>
        <div class="social-icon">
            <?php for ($i=0; $i < count($iconsSocial); $i++): ?>
                <a href="<?= $iconsSocial[$i]['link'] ?>" title="Accéder à <?= $iconsSocial[$i]['name'] ?>"><?= $iconsSocial[$i]['icon'] ?></a>
            <?php endfor; ?>
        </div>
    </div>
</section>
