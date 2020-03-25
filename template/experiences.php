<?php

?>
<section class="section experiences" id="experiences">
    <h2 class="title_section">
        Experiences
    </h2>

    <div class="main-experiences">
        <?php for ($i = 0; $i < count($experiences); $i++): ?>
            <?php $date = dateConvert($experiences[$i]['start_at'], $experiences[$i]['end_at']) ?>
            <div class="card-round">
                <div class="date"><?= ucfirst($date[0]) ?><span>à</span><?= $date[1] ?></div>
                <div class="card-detail">
                    <div class="title-detail">
                        <h3><?= $experiences[$i]['society'] ?></h3>
                    </div>
                    <div class="job-detail">
                        <p><?= $experiences[$i]['job'] ?></p>
                    </div>
                    <div class="body-detail">
                        <p><?= $experiences[$i]['detail'] ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
