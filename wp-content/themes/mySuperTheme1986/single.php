<?php
/*
Template Name: single
*/
?>
<?php  get_header('other') ?>
<?php

/**
 * @var $post WP_Post;
 */
$post = get_post();

?>
<br /><br /><br />
<div class="container">
	<h1><?php echo $post->post_title ?></h1>
	<?php echo $post->post_content ?>
</div>
<br /><br /><br />
<?php get_footer() ?>
