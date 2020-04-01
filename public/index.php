<?php
session_start();
require_once '../src/functions/include.php';
// Create new Model
$model = new Model();

// request getAll for each section
$about = $model->get('personnal');
$social = $model->getAll('socials');
$skills = $model->getAll('competences');
$experiences = $model->getAll('experiences');
$projects = $model->getAll('portfolio');

?>

<!doctype html>
<html lang="fr" id="top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/bfe9f51c30.js" crossorigin="anonymous"></script>
    <title>Developpeur web junior | Dierick Déwi</title>
</head>
<body>
<?php
include 'template/header.php';
include 'template/navbar.php';
?>
<main class="main">
   <?php
   include 'template/about.php';
   include 'template/skills.php';
   include 'template/experiences.php';
   include 'template/portfolio.php';
   include 'template/training.php';
   include 'template/contact.php';
   include 'template/footer.php';
   ?>
</main>
</body>
</html>
