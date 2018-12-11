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
<?php get_template_part('templates/service', 'itemcat');?>
<div class="container service-content post">
	<div class="row">
		
		<div class="col-md-12 content-area" id="main-column">
			<div class="title-block left">	<?= get_field('name_service')?>	</div>
			<div class="text">
				<img class="img-in-text" src="<?= get_field('img_service')?>">
				<?= get_field('text_service')?>
			</div>
			
			
		</div>
		<div class="col-sm-8">
			<div class="title-block left"> Цены	</div>
			<div class="price-block">
				<?
					$section = get_field('price_section_service');
					$n_section=0;
					if(!empty($section))
					foreach($section as $value){
						$n_section++;
				?>
					
					<div class="one-section">
						<div class="name-section" num="<?=$n_section?>">
							<span class=" glyphicon glyphicon-chevron-down"></span> 
							<span class="name"><?=$value['name_section_service'];?> </span>
						</div>
						<div class="services-section" num="<?=$n_section?>" status="no-active" style="display:none;">
						<?
							$section = get_field('price_section_service');
							if(isset($value["list_section_service"]))
								foreach($value["list_section_service"] as $value2){
						?>
						
							<div class="service-section">
								<div class="name"><?=$value2['name_service'];?></div>
								<div class="price"><?=$value2['Price'];?></div>
							</div>
						
							<?}?>
						</div>
					</div>
				
				<?}?>
			</div>
		</div>
		
		<div class="col-sm-4 form-block">
			<?=do_shortcode('[contact-form-7 id="183" title="Записаться на прием"]') ?>
		</div>

	</div>
</div>
<?php get_footer(); ?> 
