<?php

use Kirby\Cms\Response;

return array(
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
