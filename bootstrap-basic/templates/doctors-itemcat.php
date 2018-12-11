
<div class="block-team">
  <div class="container">
      <div class=" row">
      	<div class="title title-block">Наша команда</div>
        <div class="people">
<?php 
	
	$wpb_all_query = new WP_Query(array('post_type'=>'doctor', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
	foreach($wpb_all_query->posts as $value){
?>
			
          <div class="one-team-block">
			<a href="<?=$value->guid?>">
				<div class="text"> 
				  <div class="fio"><?=get_field('fio_doc',$value->ID)?></div>
				  <div class="info"><?=get_field('position_doc',$value->ID)?></div>
				  <div class="three-line">
					<div class="line-1"></div><div class="line-2"></div><div class="line-1"></div>
				  </div>
				</div>
				<div class="img" > 
					<? $img_link=wp_get_attachment_image( get_field('photo_doc',$value->ID),'photo-260-315' ) ?>
					
					<?echo $img_link?>
				</div>
			</a>
          </div>
    
    <?}?>
        </div>
      </div>
  </div>
  
</div>