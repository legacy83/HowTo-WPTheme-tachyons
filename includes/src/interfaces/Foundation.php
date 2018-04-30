<?php

namespace site\lab\interfaces;

use trsenna\dalen\kernel\base\BootstrapInterface;

/**
 * Class Foundation
 *
 * @package site\lab\interfaces
 */
final class Foundation implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function __bootstrap()
    {
        add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    public function setup_theme()
    {
        // ...
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style( 'lab-style', get_stylesheet_uri() );
    }
}
