<?php
/** @var Kirby\Cms\Page $page */
?>

<?php snippet('header') ?>
<?php snippet('page-header') ?>
<?php snippet('hero') ?>
<h1 class="text-center text-gray-400"><?= $page->title() ?></h1>
<?php snippet('footer') ?>