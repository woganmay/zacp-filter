<?php

/*
 * (c) Wogan May <wogan.may@gmail.com>
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->Censor->add('nuggets');
        })
];