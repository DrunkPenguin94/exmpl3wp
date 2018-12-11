<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 

<div class="container information-content post">
	<div class="title-block"><?=the_title()?></div>
	<div class="img">
	<?
			$img=get_field('img_info');
			if(!empty($img)){?>
			<div class="img">
				<? $img_link=wp_get_attachment_url( $img );?>
				<img src="<?=$img_link?>">
			</div>
			<?}?>
	</div>
	<div class="text">
		<?=get_field("info_info")?>
	</div>
</div>
<?php get_footer(); ?> 
