<?php

/** @var Kirby\Cms\Site $site */
?>

<header class="absolute inset-x-0 top-0 z-50 sticky-header" data-sticky-header>
    <div class="bg-quaternary/70 text-xs header-top">
        <div class="mx-auto flex max-w-7xl items-center justify-between py-2 lg:px-8">
            <div></div>
            <nav>
                <ul class="flex gap-x-4">
                    <li>
                        <a href="#" class="text-gray-700">Kontakt</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-700">Impressum</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-700">Datenschutz</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-bottom mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <?php if ($asset = asset('assets/logo.png')) : ?>
                    <img class="h-8 w-auto" src="<?= $asset->url() ?>" alt="<?= $site->title(); ?> Logo">
                <?php endif ?>
            </a>
        </div>
        <div class="flex lg:hidden" id="st-trigger-effects">
            <button
                type="button"
                data-offcanvas-toggle
                data-effect="st-effect-4"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <?php
        $menu = $site->mainMenu()->toStructure();
        if ($menu->isNotEmpty()) : ?>
            <nav class="hidden lg:block">
                <ul class="lg:flex lg:gap-x-12">
                    <?php foreach ($menu as $item) : ?>
                        <?php if ($mainMenuItem = $item->mainMenu()->toPage()) : ?>
                            <li>
                                <a
                                    class="text-sm font-semibold leading-6 text-gray-900"
                                    <?php e($mainMenuItem->isOpen(), 'aria-current="page"') ?>
                                    href="<?= $mainMenuItem->url() ?>"
                                >
                                    <?php if ($item->labelText()->isNotEmpty()) : ?>
                                        <?= $item->labelText() ?>
                                    <?php else : ?>
                                        <?= $mainMenuItem->title() ?>
                                    <?php endif ?>
                                </a>
                        <?php endif ?>
                        <?php $subMenu = $item->subMenu()->toPages(); ?>
                        <?php if ($item->hasSubmenu()->isTrue() && $subMenu->isNotEmpty()) : ?>
                            <ul class="submenu-list">
                                <?php foreach ($subMenu as $subItem) : ?>
                                    <li><a href="<?= $subItem->url() ?>"><?= $subItem->title() ?></a></li>
                                <?php endforeach ?>
                            </ul>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </nav>
        <?php endif ?>

        <button
                class="
                    hidden lg:inline-block
                    bg-secondary py-3 px-4 font-semibold text-white text-sm ml-8
                    hover:bg-secondary-800 transition-colors rounded-md"
        >
            Mitglied werden
        </button>
    </div>
</header>