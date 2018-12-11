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

<div class="block-info-about container">
	<div class="row">
		<div class="col-xs-12 title title-block"> <?=get_field('about_title')?></div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-block">
			<?=get_field('about_text')?>
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 img-block">
			<?
				$img_about=get_field('about_img');
				foreach($img_about  as $value){
			?>
				<img src="<?=$value["img"]?>">
			<?
				}
			?>
			
		</div>
	</div>
</div>


<?
	$benefits=get_field('benefits');
?>
<div class="block-benefits container">
	<div class="row">
		<?
			foreach($benefits as $value){
		?>
			
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 benefit wow bounceInDown center">
				<div class="img">
					<img src="<?= $value["img"]?>">
				</div>
				<div class="name">
					<?= $value["name"]?>
				</div>
				<div class="info">
					<?= $value["info"]?>
				</div>
			</div>
		<?
			}
		?>
	</div>
	
</div>

<div class="block-appointment-about-page">
	<div class="container">
		<div class="row">
			<div class="text col-md-8 col-sm-6 col-xs-12 ">
				<div class="normal">Обращаясь в нашу клинику, Вы можете быть уверены</div>
				<div class="big">Здоровье ваших зубов в надежных руках</div>
			</div>
			
			<div class="forma col-md-4  col-sm-6 col-xs-12">
				<?=do_shortcode(get_field('code-form-2')) ?>
			</div>
		</div>
	</div>
	<div class="circle-block wow pulse" data-wow-iteration="5">
		Запишитесь на бесплатную консультацию и получите скидку!
	</div>
	<div class="arrow-block">
	
	</div>

</div>



<?php get_template_part('templates/doctors', 'itemcat');?>


<?
	$steps = get_field('appointment');
	$stepN=1;
?>
<div class="block-appointment-about">
	
	<div class="content">
		<div class="container-content">
			<div class="title title-block">
				Онлайн запись на прием
			</div>
			<div class="steps">
				<?
				
					foreach($steps as $value){
				?>
					<div class="step wow pulse" data-wow-iteration="5" >
						<div class="number"><?=$stepN?></div>
						<div class="text"><?=$value["text"]?></div>
						
					</div>
				<?
					$stepN++;
					}
				?>
			</div>
			<div class="button-block">
				<div class="button-enroll">Записаться на прием</div>
			</div>
		</div>
	</div>
	<div class="img-administrator">
	
	</div>
</div>


<?php get_template_part('templates/certificates', 'itemcat');?>
<?php get_footer(); ?> 