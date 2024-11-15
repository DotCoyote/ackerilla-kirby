<?php

use Kirby\Cms\Response;

return array(
    'debug' => true,
    'routes' =>
        array(
            array(
            'pattern' => '(:all)',
            'action' => function () {
                if (!kirby()->user()) {
                    return new Response('Access forbidden', 'text/html', 404);
                }
            }
        )
    )
);
