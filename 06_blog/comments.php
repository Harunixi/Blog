<?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
<h3>コメント</h3>
<ol class="single-page">
  <?php wp_list_comments(); ?>
</ol>
<?php endif; ?>
<div class="comments">
<?php $args = array(
  'title_reply' => 'コメントを書く',
  'comment_notes_after' => '<p>誹謗中傷はダメ！ルールを守って楽しいコメント！</p>',
  'label_submit' => 'Comment'
);
comment_form( $args ); ?>
</div>
