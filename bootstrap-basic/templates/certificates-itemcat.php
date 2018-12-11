
<div class="block-certificates down">
  <div class="container">
      <div class=" row">
      	<div class="title title-block"> Сертификаты</div>
        <div class="certificate">
<?php 
	$team = get_field('certificates',7);
	foreach($team as $value){
?>
			
          <div class="one-certificate-block">
			<div class="img" >
				
				<? $img_link=wp_get_attachment_image( $value["img"],'photo-260-315' ) ;
					$img_link_big=wp_get_attachment_url($value["img"]) ;
				?>
				<a class="fancybox" href="<?=$img_link_big?>">
					<?echo $img_link?>
				</a>
            </div>
          </div>
    
    <?}?>
        </div>
      </div>
  </div>
  
</div>