<?php

namespace site\lab\infrastructure;

use trsenna\dalen\kernel\base\AbstractModule;

/**
 * Class Theme
 *
 * @package site\lab\infrastructure
 */
final class Theme extends AbstractModule
{
    /**
     * Theme constructor.
     */
    private function __construct()
    {
        // ...
    }

    /**
     * Get the singleton instance.
     *
     * @return Theme
     */
    public static function getInstance()
    {
        static $instance;
        if ( !isset( $instance ) ) {
            $instance = new Theme();
        }

        return $instance;
    }
}
