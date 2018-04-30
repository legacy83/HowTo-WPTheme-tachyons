<?php

namespace site\lab;

use site\lab\infrastructure\Theme;
use site\lab\interfaces\Foundation;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once( __DIR__ . '/vendor/autoload.php' );
}

Theme::getInstance()
    ->component( 'foundation', new Foundation() )
    ->run();
