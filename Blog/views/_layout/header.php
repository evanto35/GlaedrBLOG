<!doctype html>
<html lang="en">
<head>
    <!--  CSS  -->
    <?php if (!$this->isAuthorized()) : ?>
        <link rel="stylesheet" href="<?= \Framework\Core\Config::PUBLIC; ?>styles/blue.min.css">
    <?php else : ?>
        <link rel="stylesheet" href="<?= \Framework\Core\Config::PUBLIC; ?>styles/<?= $this->getTemplate(); ?>">
    <?php endif; ?>

    <link rel="stylesheet" href="<?= \Framework\Core\Config::PUBLIC; ?>styles/styles.css">

    <!--  JS  -->
    <script src="<?= \Framework\Core\Config::PUBLIC; ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?= \Framework\Core\Config::PUBLIC; ?>js/bootstrap.min.js"></script>
    <script src="<?= \Framework\Core\Config::PUBLIC; ?>js/bootbox.min.js"></script>
    <script src="<?= \Framework\Core\Config::PUBLIC; ?>js/scripts.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gleadr Blog</title>
</head>
<body>

<?php include_once "menu.php"; ?>

<div class="container">
    <?php include_once "messages.php"; ?>
    <div class="row">