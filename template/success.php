<?php
session_start();

if (!$_SESSION) {
    header('Location: ../index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/success.css">
    <title>Document</title>
</head>
<body>
    <header class="header-success">
        <div class="jumbotron">
            <div class="container">
                <h1>Votre message a été envoyé avec succès</h1>
            </div>
        </div>
    </header>
    <div class="container main">
        <h3>Bonjour <?= $_SESSION['mail']['name'] ?>,</h3>
        <p>
            Nous vous remerçions de votre message, nous vous recontacterons dans les plus brefs délais à l'adresse <b><?= $_SESSION['mail']['email'] ?></b> concernant votre demande:
        </p>
        <p class="message">
            <?= $_SESSION['mail']['message'] ?>
        </p>
        <div class="btn-return">
            <a href="../index.php" title="Retour vers la page d'accueil">Retour vers la page d'accueil</a>
        </div>
    </div>
</body>
</html>

<?php
session_destroy();
?>