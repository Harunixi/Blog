<?php get_header(); ?>
    <main class="main-page">
        <div class="inner">
            <?php get_header(); ?>
                <?php if (have_posts() ): ?>
                <!-- もし、記事が1件以上あったら-->
                <?php while (have_posts()):the_post(); ?>
                <!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
                <section <?php post_class("single-page"); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <ul>
                            <li><?php the_time('M jS, Y ');?> <!-- 記事の投稿日 --></li>
                            <span class="meta-sep">&bull;</span>
                            <li><?php the_category( ',' ); ?> <!-- 記事のカテゴリー --></li>
                            <span class="meta-sep">&bull;</span>
                            <li><?php the_author(); ?> <!-- 記事の投稿者 --></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <?php the_content( ); ?><!-- 記事の内容 -->
                    </div>
                </section>
            <?php endwhile; ?>
            <!-- 繰り返し終了 -->
            <?php endif; ?>
            <!-- if文終了。-->
            <div class="return">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="HOME">Back to the top</a>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>