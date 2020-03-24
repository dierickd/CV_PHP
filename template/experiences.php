<?php
?>
<section class="section experiences" id="experiences">
    <h2 class="title_section">
        Experiences
    </h2>

    <div class="main-experiences">
        <?php for ($i = 0; $i < count($experiences); $i++): ?>
        <?= cardRectangleWithRound($experiences[$i]) ?>
        <?php endfor; ?>
    </div>
</section>
