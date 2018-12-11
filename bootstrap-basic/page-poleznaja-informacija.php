<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();
$n_word=100;
/**
 * determine main column size from actived sidebar
 */


?>
<div class="container page-information-main">
	<div class="title-block"><?=the_title()?></div>

<?php 



$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 9, // количество постов на странице
	'post_type'       => 'information', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params);
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post(); 
	$post=get_post();
	
	
	$text=$post->post_title;
	//echo '<pre>'.var_dump($post).'</pre>';
	$text_point_end = "";
    if (strlen($text) > $n_word)
        $text_point_end = "...";
    $text_title = mb_substr($text, 0, $n_word);
    $text_title = $text_title . $text_point_end;
	
?>
	<div class="one-information col-xs-12 col-sm-6 col-md-6 col-lg-4">
		<div class="block">
		
			<?
			$img=get_field('img_info',$post->ID);
			if(!empty($img)){?>
			<div class="img">
				<? $img_link=wp_get_attachment_image_src( $img,'photo-350-230' ) ?>
				<img src="<?=$img_link[0]?>">
			</div>
			<?}?>
			<div class="text"><?=$text_title?></div>
			<div class="link"><a href="<?=$post->guid?>">Подробнее</a></div>
		</div>
	</div>
	
	
<?
endwhile;
 
wp_pagenavi();
?>


</div>


<?php get_footer(); ?> 