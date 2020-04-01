<?php
require_once '../../../src/functions/include.php';

// Create new Model
$model = new Model();

// request getAll for each section
$about = $model->get('personnal');
$social = $model->getAll('socials');
$skills = $model->getAll('competences');
$experiences = $model->getAll('experiences');
$projects = $model->getAll('portfolio');
var_dump($about);
?>

<!doctype html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../../assets/css/admin/admin.css">
   <title>Dashboard | Administration</title>
</head>
<body>
<header class="header-admin">
   <div class="jumbotron">
      <div class="container">
         <h1>Administration</h1>
         <a href="/">Retour au site</a>
      </div>
   </div>
</header>
<main class="main">
   <section class="section about">

   </section>
</main>
</body>
</html>