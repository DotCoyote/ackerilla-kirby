<?php
/** @var Kirby\Cms\Page $page */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Twinkle+Star&display=swap" rel="stylesheet">
  <?= vite()->js('index.ts', array('defer' => true)) ?>
  <!-- We imported `index.css` inside `index.js`, so `index.js` is the Vite
  entry containing our CSS. -->
  <?= vite()->css('index.ts') ?>
</head>
<body>
