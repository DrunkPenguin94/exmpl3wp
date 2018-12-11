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
<div class="container page-kontakt">
	
		<div class="title title-block">
			<?=the_title()?>
			
		</div>
		<div class="content row">
			<div class="col-xs-12 col-md-5 block-info">
				<div class="info first">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span><?=get_field('adress_kont')?></span>
				</div>
				<div class="line"></div>
				<div class="info center">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span><a href="tel:<?echo get_field( "tel_kont");?>"><?echo get_field( "tel_kont" );?></a></span>
				</div>
				<div class="line"></div>
				<div class="info end">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span><a href="mailto:<?echo get_field( "email_kont" );?>"><?echo get_field( "email_kont" );?></a></span>
					
				</div>
			</div>
			<div class="col-xs-0 col-md-1">
			
			</div>
		
			<div class="col-xs-12 col-md-6 map">
				<?=get_field('map_kont')?>
			</div>
		</div>
		
		<div class="block-form">
			<div class="title-big">
				Задать вопрос
			</div>
			<div class="title-mini">
				Если у Вас появились вопросы, пишите нам.<br>
				Мы обязательно ответим.
			</div>
			<?=do_shortcode('[contact-form-7 id="250" title="Задать вопрос"]')?>
		
		</div>

</div>


<?php get_footer(); ?> 