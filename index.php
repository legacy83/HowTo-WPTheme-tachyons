<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'sans-serif bg-white pt5' ); ?>>

<article class="mw7 center ph3 ph5-ns tc br2 pv5 bg-light-gray mb5">
    <h1 class="fw6 f3 f2-ns lh-title mt0 mb3">
        <?= bloginfo( 'name' ); ?>
    </h1>
    <h2 class="fw2 f4 lh-copy mt0 mb3">
        <?= bloginfo( 'description' ); ?>
    </h2>
</article>

<?php wp_footer(); ?>
</body>
</html>
