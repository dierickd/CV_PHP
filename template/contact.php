<?php
$age = age($contact['birthday']);
?>

<section class="section contact" id="contact">
    <div class="main-contact">
        <div class="contact-detail">
            <h3>details</h3>
            <div class="content-details">
                <ul class="contact-group">
                    <li class="item-contact"><?= $contact['iconCity'] . $contact['city'] . ', ' . $contact['country'] ?></li>
                    <li class="item-contact"><?= $contact['iconCheck'] . $age . ' ans - ' . $contact['vehicle'] ?></li>
                    <li class="item-contact"><?= $contact['iconPhone'] . $contact['phone'] ?></li>
                    <li class="item-contact"><?= $contact['iconEmail'] . $contact['email'] ?></li>
                </ul>
            </div>
            <div class="social-icon">
                <?php for ($i=0; $i < count($iconsSocial); $i++): ?>
                    <a href="<?= $iconsSocial[$i]['link'] ?>" title="Accéder à <?= $iconsSocial[$i]['name'] ?>"><img src="<?= $iconsSocial[$i]['icon'] ?>" alt="<?= $iconsSocial[$i]['name'] ?>"></a>
                <?php endfor; ?>
            </div>
        </div>
        <div class="contact-me">
            <h3>Me contacter</h3>
            <form novalidate action="../functions/send.php" method="POST">
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
