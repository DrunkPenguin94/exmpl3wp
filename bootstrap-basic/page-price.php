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
$wpb_all_query = new WP_Query(array('post_type'=>'service', 'post_status'=>'publish', 'posts_per_page'=>-1));
$now_post=get_post();
?>
<div class="container page-price">
	
		<div class="title title-block">
			<?=$now_post->post_title?>
			
		</div>
		
		<div class='block-content-price service-content'>
		
		<? foreach($wpb_all_query->posts as $value){?>
			
			<div class="img" > 
		  
				<img class="non-active"  src="<?=get_field('icon_service',$value->ID)?>">
		  
			 
			</div>
			<div class="name_service"><?=get_field('name_service',$value->ID)?></div>
			<div class="price-block">
				<?
					$section = get_field('price_section_service',$value->ID);
					$n_section=0;
					if(!empty($section))
					foreach($section as $value2){
						$n_section++;
				?>
					
					<div class="one-section">
						<div class="name-section" num="<?=$n_section?>">
							<span class=" glyphicon glyphicon-chevron-down"></span> 
							<span class="name"><?=$value2['name_section_service'];?> </span>
						</div>
						<div class="services-section" num="<?=$n_section?>" status="no-active" style="">
						<?
							$section = get_field('price_section_service');
							if(isset($value2["list_section_service"]))
								foreach($value2["list_section_service"] as $value3){
						?>
						
							<div class="service-section">
								<div class="name"><?=$value3['name_service'];?></div>
								<div class="price"><?=$value3['Price'];?></div>
							</div>
						
							<?}?>
						</div>
					</div>
				
				<?}?>
			</div>
		
		<?}?>
		</div>
		
		
	

</div>


<?php get_footer(); ?> 