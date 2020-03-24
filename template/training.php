<?php
?>
<section class="section training" id="training">
    <h2 class="title_section">
        formation
    </h2>

    <div class="main-training">
        <?php for ($i = 0; $i < count($training); $i++): ?>
            <?= cardRectangleWithRound($training[$i]) ?>
        <?php endfor; ?>
    </div>
</section>
