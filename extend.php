<?php

/*
 * (c) Wogan May <wogan.may@gmail.com>
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {

            $words = file_get_contents(__DIR__ . "badwords.txt");
            $words = explode("\n", $words);

            foreach($words as $word)
                $config->Censor->add(trim($word));
                
        })
];