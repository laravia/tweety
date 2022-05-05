<?php

use Laravia\Core\App\Laravia;

$config['tweety'] = [
    'links' => [
        ['name' => 'laravia.tweety::home', 'text' => Laravia::trans('tweety.siteTitleHome'), 'sort' => 10],
    ],
];

return $config;
