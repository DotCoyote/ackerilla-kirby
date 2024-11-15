<?php
/** @var Kirby\Cms\Page $page */
?>

<div class="relative isolate overflow-hidden pt-14">
    <?php if ($image = $page->heroImage()->toFile()) : ?>
        <img  class="absolute inset-0 -z-10 h-full w-full object-cover" src="<?= $image->url() ?>" alt="">
    <?php endif ?>

    <div class="absolute inset-0 -z-10 bg-tertiary/20" aria-hidden="true">    </div>


    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex">
                <div class="uppercase text-white border-b border-white">
                    <?= $page->heroTop(); ?>
                </div>
            </div>
            <div>
                <h1 class="text-balance font-cursive text-5xl font-semibold tracking-tight text-white sm:text-7xl">
                    <?= $page->heroMiddle(); ?>
                </h1>
                <p class="mt-4 text-pretty text-lg font-medium text-white sm:text-base">
                    <?= $page->heroBottom(); ?></p>
                <div class="mt-10 flex gap-x-6">
                    <a href="#" class="rounded-md uppercase bg-primary px-10 py-5 text-sm font-semibold text-white shadow-sm hover:bg-primary-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-700 transition-colors">Jetzt Mitglied werden!</a>
                </div>
            </div>
        </div>
    </div>
</div>