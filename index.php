<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="container">

    <header class="main-header">
        <div class="custom-logo">
            <?php

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
            ?>
            
        </div>
        <div class="search"></div>
        <nav class="main-menu"></nav>
    </header>

    <section class="banner"></section>

    <section class="content-holder">
        <article class="content"></article>
        <aside class="sidebar"></aside>
    </section>

    <footer class="main-footer">
        <aside class="footer-box"></aside>
        <aside class="footer-box"></aside>
        <aside class="footer-box"></aside>
        <aside class="footer-box"></aside>
    </footer>

    <div class="powered"></div>

</div>
</body>
</html>