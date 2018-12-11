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
<div class="container page-akcii page-review">
	<div class="title-block"><?=the_title()?></div>

<?php 



$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 10, // количество постов на странице
	'post_type'       => 'review', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params);
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post(); 
	$post=get_post();
	
?>
	<div class="one-review">
		
		<div class="text date"><?=get_field('date_review',$post->ID)?></div>
		<div class="text fio"><?=get_field('fio_review',$post->ID)?></div>
		<div class="text review"><?=get_field('text_review',$post->ID)?></div>
	</div>
	
	
<?
endwhile;
 
wp_pagenavi();
?>


</div>

<div class="block-reviews page-review">
	<div class="block-administrator-img">

	</div>
	<div class="block-review">
		<div class="container-reviews">
			
			<div class="all-reviews">
				<a name="form"></a>
				<?=do_shortcode('[contact-form-7 id="4" title="Отзывы"]') ?>
			</div>
			
		</div>
	</div>
  
</div>


<?php get_footer(); ?> 