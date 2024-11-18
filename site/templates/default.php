<?php
/** @var Kirby\Cms\Page $page */
?>

<?php snippet('header') ?>

<div id="st-container" class="st-container">
    <?php snippet('offcanvas') ?>

    <div class="st-pusher">
        <div class="st-content"><!-- this is the wrapper for the content -->
            <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
                <?php snippet('page-header') ?>
                <?php snippet('hero') ?>
                <h1 class="text-center text-gray-400"><?= $page->title() ?></h1>
            </div>
        </div>
    </div>
</div>
<?php snippet('footer') ?>
