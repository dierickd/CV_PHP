<?php
?>
<section class="section training" id="training">
    <h2 class="title_section">
        formation
    </h2>

    <div class="main-training">
        <?php for ($i = 0; $i < count($training); $i++): ?>
            <?php $date = dateConvert($training[$i]['start_at'], $training[$i]['end_at']) ?>
            <div class="card-round">
                <div class="date"><?= ucfirst($date[0]) ?><span>à</span><?= $date[1] ?></div>
                <div class="card-detail">
                    <div class="title-detail">
                        <h3><?= $training[$i]['society'] ?></h3>
                    </div>
                    <div class="job-detail">
                        <p><?= $training[$i]['job'] ?></p>
                    </div>
                    <div class="body-detail">
                        <p><?= $training[$i]['detail'] ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
