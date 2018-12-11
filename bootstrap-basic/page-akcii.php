<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */


?>
<div class="container page-akcii">
	<div class="title-block">Акции</div>

<?php 



$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 1, // количество постов на странице
	'post_type'       => 'stock', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params);
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post(); 
	$post=get_post();
	
?>
	<div class="one-akcii">
		<div class="title"><?=get_field('name_stock',$post->ID)?></div>
		
		<?
		$img=get_field('photo_stock',$post->ID);
		if(!empty($img)){?>
		<div class="img">
			<img src="<?=$img?>">
		</div>
		<?}?>
		<div class="text"><?=get_field('info_stock',$post->ID)?></div>
	</div>
	
	
<?
endwhile;
 
wp_pagenavi();
?>


</div>


<?php get_footer(); ?> 