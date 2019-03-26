<?php

/*
 * (c) Wogan May <wogan.may@gmail.com>
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->Censor->word('nuggets');
        })
];