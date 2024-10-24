<?php
    /** @var Kirby\Cms\Page $page */
?>

<?php snippet('header') ?>
<h1 class="text-center"><?= $page->title() ?></h1>
<?php snippet('footer') ?>