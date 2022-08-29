<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/ress.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('orignal_class'); ?>>
<div class="about">
    <article class="profile">
        <h3>About</h3>
        <img src="<?php echo esc_url(get_theme_file_uri('/images/About_image.jpg')); ?>">
        <h4>Profile</h4>
        <p>Name:はるにぃ<br>
            一言:遊戯王を楽しむ23歳。Webデザイン・コーディング初心者。色々なものに手を出して経験してみたい。</p>
    </article>
    <!-- ウィジェットの追加 -->
    <article class="archive">
    <?php if ( is_active_sidebar('main-sidebar') ) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
    <?php endif; ?>
    </article>
</div>
</body>