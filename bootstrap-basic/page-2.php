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
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="block-slider-big">
  <div class="block-slider-big-corusel">
  	<?php 
	$slider = get_field('slider-main');
	foreach($slider as $value){
    
?>
    <div class="one-slider-block " style="background-image:url(<?=$value["img"]?>);">
    	<div class=" container">
        <div class="text">
          <?=$value["text"]?>
        </div>
        <div class="block-button"> 
          <a href="#zapis-form" class="fancybox-inline">
          	<div class="button-white-hidden">Записаться на прием</div>
          </a>
        </div>
      </div>
     
    </div>
    
    <?}?>
  </div>
</div>

<div class="block-info ">
  <div class=" content-absolute">
    <div class="container">
      <div class="content">
         <div class="time-work">
           <div class="title">Время работы</div>
           <?php 
              $time_work = get_field('time_work');
              foreach($time_work as $value){
            ?>
              <div class="one-line">
                <div class="day"><?=$value["week_day"]?></div><div class="time"><?=$value["tome_work"]?></div>
              </div>

          <?}?>
        </div>
        <div class="happy-time">

           <?php 
              $happy_day = get_field('happy_day');
              foreach($happy_day as $value){
            ?>
          <div class="title"><?=$value["title"]?></div>
          <div class="day_time"><?=$value["day_time"]?></div>
          <div class="saly"><?=$value["saly"]?></div>
		  <div class='block-button'>
		  <a href="#zapis-form" class="fancybox-inline">
            <div class="button-enroll">Записаться на прием</div>
		  </a>
          </div>

          <?}?>
        </div>
        <div class="contact">
          <div class="title">Наши контактный телефон</div>
          <div class="number"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?echo get_field( "phone",2 );?>"><?echo get_field( "phone",2 );?></a></div>
          <div class="text">Если есть вопросы, мы всегда Вам на них ответим</div>
        </div>
      </div>
      <div class="three-line">
        <div class="line-1"></div><div class="line-2"></div><div class="line-1"></div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('templates/service', 'itemcat');?>

<div class="block-o-nas">
  <div class="container">
      <div class=" row-flex">
      	<div class="col-sm-7 col-xs-12 info wow bounceInUp center">
          <div class="title"><?=get_field('infromation_main_title');?></div>
          <div class="text"><?=get_field('infromation_main_text');?></div>
        </div>
        <div class="col-sm-5 hidden-xs doc">
          <div class="img wow lightSpeedIn" >
			
				<img src="<?=get_field('infromation_main_img');?>">
			
		</div>
        </div>
      </div>
  </div>
  
</div>
<?php get_template_part('templates/doctors', 'itemcat');?>

<div class="block-reviews main">
	<div class="block-administrator-img">

	</div>
	<div class="block-review">
		<div class="container-reviews">
			<div class="title title-block">Отзывы</div>
			<div class="all-reviews">
<?        	
	$wpb_all_query = new WP_Query(array('post_type'=>'review', 'post_status'=>'publish', 'posts_per_page'=>5)); 
	foreach($wpb_all_query->posts as $value){
?>
				<div class="one-review-block">
					<div class="date"><?=get_field('date_review',$value->ID)?></div>
					<div class="name_surname"><?=get_field('fio_review',$value->ID)?></div>
					<div class="text"><?=get_field('text_review',$value->ID)?></div>
		
				</div>
    
    <?}?>
			</div>
     
		</div>
		<div class="block-buntton container-reviews">
      <div class="container-button">
			    <a href="/otzyvy#form"><div class="go_review blue-hidden-button"> Оставить отзыв</div></a>
      </div>
		</div>
    
	</div>
  
</div>

<?php get_footer(); ?> 