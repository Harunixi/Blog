    <?php get_header(); ?>
    <main class="main-page">
        <div class="inner">
            <h2>Blog</h2>
            <section class="main">
                <div class="blog-main">
                    <?php if (have_posts()): //もし1件以上記事があったら ?>
                    <?php while (have_posts()): //記事がある間は繰り返す
                    the_post(); //次の記事のデータをセットする?>
                    <!--1記事め開始-->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(""); ?> >
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php //制限文字以上の時省略記号をつける
                              if(mb_strlen($post->post_title)>7) {
                              $title= mb_substr($post->post_title,0,7);
                               echo $title . '..';
                            } else {
                               echo $post->post_title;
                            }
                            ?></h3>
                            <div class="images">
                                <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
                                <?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
                                <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.png" alt="デフォルトのアイキャッチ画像" />
                                <?php endif; ?>
                            </div>
                            <div class="blog-text"><?php the_excerpt(); ?></div>
                            <p class="blog-date"><?php the_time('M jS, Y'); ?></p>
                        </a>
                    </article>
                    <!--1記事め終了-->
                    <?php endwhile; //ループ終了?>
                    <!--ページネーション開始-->
                     <?php the_posts_pagination(); ?>
                    <!--ページネーション終了-->
                    <?php else: //もし、表示すべき記事がなかったら ?>
                    <p>まだ記事はありません。</p>
                    <?php endif; //条件分岐終了 ?>
                </div>
                <?php get_sidebar(); ?>
            </section>
        </div>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>