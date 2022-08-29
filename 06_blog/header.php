<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php
        global $page, $paged;
            if (is_front_page()) : //トップページ
            echo 'トップページ｜';
            bloginfo('name');
        elseif(is_home()) : //ブログページ（ブログサイトの場合はトップページ）
            wp_title('｜',true,'right');
            bloginfo('name');
        elseif(is_page()) : //固定ページ
            wp_title('｜',true,'right');
            bloginfo('name');
        elseif(is_single()) : //投稿ページ
            wp_title('｜',true,'right');
            bloginfo('name');
        elseif(is_category()) : //カテゴリーページ
            single_term_title();
            echo'｜カテゴリー';
        elseif(is_tag()) : //タグページ
            single_term_title();
            echo'｜タグ';
        elseif(is_archive()) : //アーカイブページ
            wp_title('');
            echo'｜アーカイブ';
        elseif(is_search()) : //検索結果ページ
            wp_title('');
            echo'｜検索結果';
        elseif(is_404()): //404ページ
            echo '404｜';
            bloginfo('name');
            endif;
        if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
            echo '｜' . sprintf('%sページ',
            max($paged,$page));
        endif;
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/ress.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class('orignal_class'); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="inner">
            <div class="container">
                <h1><a href="<?php echo esc_url(home_url('/')); ?>" title="HOME"><img src="<?php echo
                esc_url(get_theme_file_uri('/images/Title_logo.jpg')); ?>"></a></h1>
                <nav class="item">
                    <?php
                    // メインメニューを表示
                    if ( has_nav_menu( 'global-menu' )){
                    $globalMenu = array(
                    'theme_location' => 'global-menu',
                    'menu_id' => 'nav',
                    'menu_class' => 'item',
                    'container' => false,
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'depth' => 0,
                    );
                    wp_nav_menu( $globalMenu );
                    };
                    ?>
                </nav>
            <!-- end #nav-wrap -->
            </div>
        </div>
            <!-- ハンバーガーメニューのアイコン -->
            <div id="hamburger">
　              <!-- 1番上の線 -->
                <span class="inner_line" id="line1"></span>
　              <!-- 真ん中の線 -->
                <span class="inner_line" id="line2"></span>
　              <!-- 1番下の線 -->
                <span class="inner_line" id="line3"></span>
            </div>
    </header>
</body>
</html>