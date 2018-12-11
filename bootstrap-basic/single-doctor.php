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

<div class="container doctor-content post">
	<div class="row">
		<div class="col-xs-12 col-md-4 doc_img">
			<? $img_link=wp_get_attachment_image_src( get_field('photo_doc'),'photo-370-450' ) ?>
					
					<img src="<?echo $img_link[0]?>">
		</div>
		
		<div class="col-xs-12 col-md-8 block-info">
			<div class="fio"><?=get_field('fio_doc')?></div>
			<div class="position"><?=get_field('position_doc')?></div>
			
			<?
			$info=get_field('info_doc_1');
			if(!empty($info)){?>
				<div class="info-title">
					<div class="img-icon"><img src="/wp-content/themes/bootstrap-basic/img/mortarboard.png"></div>
					<div class="title">Образование</div>
				</div>
				<div class="info_doc"><?=$info?></div>
			<?}?>
			<?
			$info=get_field('info_doc_2');
			if(!empty($info)){?>
				<div class="info-title">
					<div class="img-icon"><img src="/wp-content/themes/bootstrap-basic/img/briefcase.png"></div>
					<div class="title">Опыт работы</div>
				</div>
				
				<div class="info_doc"><?=$info?></div>
			<?}?>
			
			<?
			$info=get_field('info_doc_3');
			if(!empty($info)){?>
				<div class="info-title">
					<div class="img-icon"><img src="/wp-content/themes/bootstrap-basic/img/paper-boat.png"></div>
					<div class="title">Когда я не врач</div>
				</div>
				
				<div class="info_doc"><?=$info?></div>
			<?}?>
		</div>
		
		
		<div class="col-xs-12 block-documents" style="">
		<?
		$doc=get_field('doc_doc');
			if(!empty($doc)){
			foreach($doc as $value){

		?>
			<div class="one-doc col-xs-12 col-md-3 col-sm-4">
				<? $img_link=wp_get_attachment_url($value["scan_doc"] )  ?>
				<a class="fancybox" href="<?=$img_link?>">
						<img src="<?echo $img_link?>">
				</a>
				
			</div>
		
			<?}?>
		
		
		<?}?>
		</div>
	</div>
</div>
<?php get_footer(); ?> 
