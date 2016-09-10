<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="medium-comments">
	<div id="comments" class="comments-area">
<?php if ( have_comments() ) : 	?>
   <h2 class="comments-title">
    <?php
			printf( _n( 'One thought on - %2$s', '%1$s thoughts on - %2$s', get_comments_number(), 'medium' ),
			number_format_i18n( get_comments_number() ), get_the_title() );
		?>
  </h2>
    <ul class="comment-list">
    <?php
		wp_list_comments( array( 'callback' => 'medium_comment', 'style' => 'ul', 'short_ping' => true) ); ?>
    </ul>
       <?php paginate_comments_links(); ?>     
	<?php endif; // have_comments()
			comment_form(); ?>
</div>
</div><!-- #comments -->
