<?php
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/bfe9f51c30.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
    include 'template/header.php';
    include 'template/navbar.php';
?>
<main class="main">
    <?php
    include "template/about.php";
    include "template/skills.php";
    include "template/portfolio.php";
    include "template/training.php";
    ?>
</main>
<?php
    include 'template/form.php';
?>
</body>
</html>
