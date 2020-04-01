<?php
$train = $model->getAll('training');
$count = count($train);
?>
<section class="section training" id="training">
    <h2 class="title_section">
        formation
    </h2>

    <div class="main-training">
        <?php for ($i = 0; $i < $count; $i++): ?>
            <?php $date = dateConvert($train[$i]['start_at'], $train[$i]['end_at']) ?>
            <div class="card-round">
                <div class="date"><?= ucfirst($date[0]) ?><span>à</span><?= $date[1] ?></div>
                <div class="card-detail">
                    <div class="title-detail">
                        <h3><?= $train[$i]['school'] ?></h3>
                    </div>
                    <div class="job-detail">
                        <p><?= $train[$i]['job'] ?></p>
                    </div>
                    <div class="body-detail">
                        <p><?= $train[$i]['detail'] ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
