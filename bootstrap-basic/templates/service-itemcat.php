

<?php
$wpb_all_query = new WP_Query(array('post_type'=>'service', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
$now_post=get_post();
?>

<div class="container block-service">
  <div class="">
    <div class="title title-block">Услуги</div>
<?php 
	$delay=0.5;
	foreach($wpb_all_query->posts as $value){
		
?>
	
	
	
	<a href="<?=$value->guid?>">
	
    <div class="one-service-block  wow rollIn" data-wow-delay="<?=$delay?>s">
      <div class="img" > 
	  <?if($value->post_name==$now_post->post_name){?>
         <img class="non-active" src="<?=get_field('icon_noactive_service',$value->ID)?>">
	  <?}else{?>
		 <img class="non-active"  src="<?=get_field('icon_service',$value->ID)?>">
	  <?}?>
		 <img class="active"  src="<?=get_field('icon_noactive_service',$value->ID)?>">
      </div>
      <div class="text"><?=get_field('name_service',$value->ID)?></div>
    </div>
	</a>
    <?
		$delay=$delay+0.5;
	}?>
  </div>
</div>



