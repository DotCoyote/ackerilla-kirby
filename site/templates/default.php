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

                <main class="py-16">
                    <section>
                        <article class="max-w-screen-xl mx-auto ">
                            <div class="grid grid-cols-2">
                                <div class="px-8">
                                    <div class="h-full">
                                        <?php if ($asset = asset('assets/no-one-cares-l_5MJnbrmrs-unsplash.jpg')) : ?>
                                            <img class="object-cover w-full h-full" src="<?= $asset->url() ?>" alt="">
                                        <?php endif ?>
                                    </div>
                                </div>

                                <div class="px-8 py-4">
                                    <span class="uppercase text-gray-600 tracking-wider text-sm">Unsere Einleitung</span>
                                    <h2 class="text-5xl font-semibold text-tertiary mt-2 leading-tight">Pure Agriculture and Organic Form</h2>
                                    <h3 class="mt-8 text-tertiary font-bold text-lg">Wir liefern organisches Gemüse!</h3>

                                    <p class="text-sm leading-snug text-gray-700 mt-8">Eine wunderbare Heiterkeit hat meine ganze Seele eingenommen, gleich den süßen Frühlingsmorgen, die ich mit ganzem Herzen genieße. Ich bin allein und freue mich meines Lebens in dieser Gegend, die für solche Seelen geschaffen ist wie die meine.</p>

                                    <ul class="text-sm font-semibold mt-8" role="list">
                                        <li>Ich bin so glücklich, mein Bester</li>
                                        <li>so ganz in dem Gefühle von ruhigem Dasein versunken</li>
                                        <li>daß meine Kunst darunter leidet. Ich könnte jetzt nicht zeichnen</li>
                                        <li>nicht einen Strich, und bin nie ein </li>
                                    </ul>
                                </div>
                            </div>


                        </article>

                        <div class="grid grid-cols-3 gap-8 max-w-screen-lg mx-auto px-8 mt-16">
<!--                            teaser-->
                            <a href="#" class="bg-primary pt-80 relative rounded-md">
                                <div class="h-full absolute inset-0 ">
                                    <?php if ($asset = asset('assets/no-one-cares-l_5MJnbrmrs-unsplash.jpg')) : ?>
                                        <img class="object-cover w-full h-full rounded-md" src="<?= $asset->url() ?>" alt="">
                                    <?php endif ?>
                                </div>

                                <div class="absolute bg-white left-4 right-4 bottom-0 py-4 px-12 rounded-t-md text-center font-semibold text-tertiary">
                                    <p>Best quality standards</p>
                                </div>

                            </a>
<!--                            /teaser-->
<!--                            teaser-->
                            <a href="#" class="bg-primary pt-60 relative rounded-md">
                                <div class="h-full absolute inset-0 ">
                                    <?php if ($asset = asset('assets/no-one-cares-l_5MJnbrmrs-unsplash.jpg')) : ?>
                                        <img class="object-cover w-full h-full rounded-md" src="<?= $asset->url() ?>" alt="">
                                    <?php endif ?>
                                </div>

                                <div class="absolute bg-white left-4 right-4 bottom-0 py-4 px-12 rounded-t-md text-center font-semibold text-tertiary">
                                    <p>Best quality standards</p>
                                </div>

                            </a>
<!--                            /teaser-->
<!--                            teaser-->
                            <a href="#" class="bg-primary pt-60 relative rounded-md">
                                <div class="h-full absolute inset-0 ">
                                    <?php if ($asset = asset('assets/no-one-cares-l_5MJnbrmrs-unsplash.jpg')) : ?>
                                        <img class="object-cover w-full h-full rounded-md" src="<?= $asset->url() ?>" alt="">
                                    <?php endif ?>
                                </div>

                                <div class="absolute bg-white left-4 right-4 bottom-0 py-4 px-12 rounded-t-md text-center font-semibold text-tertiary">
                                    <p>Best quality standards</p>
                                </div>

                            </a>
<!--                            /teaser-->
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>
<?php snippet('footer') ?>
