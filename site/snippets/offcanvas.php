<?php

/** @var Kirby\Cms\Site $site */
?>

<!-- Mobile menu, show/hide based on menu open state. -->
<div class="st-menu st-effect-4 lg:hidden bg-white" id="menu-4" role="dialog" aria-modal="true">

    <div class="p-4">
        <div class="flex items-center justify-between ">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only"><?= $site->title(); ?></span>
                <?php if ($asset = asset('assets/logo.png')) : ?>
                    <img class="h-8 w-auto" src="<?= $asset->url() ?>" alt="<?= $site->title(); ?> Logo">
                <?php endif ?>
            </a>
            <button type="button" id="closeMenu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div class="mt-6 flow-root">
        <div class="-my-6">
            <?php
            $menu = $site->mainMenu()->toStructure();
            if ($menu->isNotEmpty()) : ?>
            <nav class="space-y-2 py-6">
                <ul class="divide-y divide-gray-500/10 border-b border-gray-500/10">
                    <?php foreach ($menu as $item) : ?>
                        <?php if ($mainMenuItem = $item->mainMenu()->toPage()) : ?>
                            <li>
                            <a
                                class="block px-3 py-4 text-base leading-7 text-gray-900 hover:bg-gray-50
                                    <?php e($mainMenuItem->isOpen(), 'font-semibold') ?>
                                    "
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
        </div>
            <?php endif ?>
    </div>
</div>
