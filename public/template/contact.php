<?php
$age = age($about['birthday_at']);
if ($about['mobility']) {$mobility = 'Véhiculé';} else {$mobility = 'Non véhiculé';}
?>

<section class="section contact" id="contact">
    <div class="main-contact">
        <div class="contact-detail">
            <h3>details</h3>
            <div class="content-details">
                <ul class="contact-group">
                    <li class="item-contact"><i class="fas fa-map-marker-alt"></i><?= $about['city'] . ', ' .
                        $about['country']
                       ?></li>
                    <li class="item-contact"><i class="fas fa-check"></i><?= $age . ' ans - ' . $mobility
                       ?></li>
                    <li class="item-contact"><i class="fas fa-mobile-alt"></i><?= $about['phone'] ?></li>
                    <li class="item-contact"><i class="far fa-envelope"></i><?= $about['email'] ?></li>
                </ul>
            </div>
            <div class="social-icon">
                <?php for ($i=0; $i < $countSocial; $i++): ?>
                    <a href="<?= $social[$i]['link'] ?>" title="Accéder à <?= $social[$i]['name'] ?>"><?=
                       $social[$i]['icon'] ?></a>
                <?php endfor; ?>
            </div>
        </div>
        <div class="contact-me">
            <h3>Me contacter</h3>
            <form action="../traitement/send.php" method="POST">
                <div class="form-group">
                    <div class="item-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name"
                               <?php if (isset($_SESSION['mail']['name'])) {echo 'value="' . $_SESSION['mail']['name'] . '"';} ?> required>
                        <span class="error">
                            <?php if (isset($_SESSION['error']['name'])) {echo $_SESSION['error']['name'];} ?>
                        </span>
                    </div>
                    <div class="item-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            <?php if (isset($_SESSION['mail']['email'])) {echo 'value="' . $_SESSION['mail']['email'] . '"';} ?> required>
                        <span class="error">
                            <?php if (isset($_SESSION['error']['email'])) {echo $_SESSION['error']['email'];} ?>
                        </span>
                    </div>
                </div>
                <div class="item-group">
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" rows="7"><?php if (isset($_SESSION['mail']['message'])) {echo $_SESSION['mail']['message'];} ?></textarea>
                    <span class="error">
                            <?php if (isset($_SESSION['error']['message'])) {echo $_SESSION['error']['message'];} ?>
                        </span>
                </div>
                <div class="btn-submit">
                    <button type="submit" title="Envoyer le message">Envoyer</button>
                </div>
            </form>
            <?php unset($_SESSION['error']) ?>
        </div>
    </div>
</section>
