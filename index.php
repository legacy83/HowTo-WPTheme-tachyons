<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        </div><!-- .site-branding -->
    </header><!-- #masthead -->
</div><!-- #page -->

<script type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Lato:100' ] }
    };
    (function () {
        var wf = document.createElement( 'script' );
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName( 'script' )[ 0 ];
        s.parentNode.insertBefore( wf, s );
    })();
</script>

<style type="text/css">
    html,
    body {
        height: 92%;
    }

    .site {
        display: table;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 92%;
    }

    .site-header {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }

    .site-branding {
        display: inline-block;
        text-align: center;
    }

    .site-title {
        font-family: 'Lato', sans-serif;
        font-size: 96px;
        font-weight: 100;
    }
</style>

<?php wp_footer(); ?>
</body>
</html>
