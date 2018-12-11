<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

				</div><!--.site-content-->
			</div>
			
			<footer id="site-footer" role="contentinfo">
        <div class="container">
          <div id="footer-row" class="row site-footer">
							<div class="col-sm-3  col-xs-12 logo">
                <a href="/"><img src="/wp-content/themes/bootstrap-basic/img/logo_b.png"></a>
              </div>
            
            	 <div class="block col-xs-12"><? echo do_shortcode('[bvi text = "Версия для слабовидящих"]');?></div>
        
            	<div class="col-sm-3  col-xs-12 contact">
                <div class="title">Контакты</div>
                <div class="info"><?echo get_field( "adress",2 );?></div>
                <div class="info"><a href="mailto:<?echo get_field( "email",2 );?>"><?echo get_field( "email",2 );?></a></div>
                <div class="info"><a href="tel:<?echo get_field( "phone",2 );?>"><?echo get_field( "phone",2 );?></a></div>
              </div>
            	<div class="col-sm-3  col-xs-12 subscribe">
                 <div class="title">Подписывайтесь</div>
                 <div class="block">
                   	<a href=" <?echo get_field( "insta_link",2 );?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=" <?echo get_field( "vk_link",2 );?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
					
				</div>
              </div>
            	<div class="col-sm-3  col-xs-12 button">
                <a href="#zapis-form" class="fancybox-inline">
                	<div class="button-enroll">Записаться на прием</div>
                </a>
              </div>
          </div>
          <div id="footer-row-2" class="row site-footer site-footer-2">
            <div class="  col-lg-9 col-md-8 col-sm-6  col-xs-12 politika">
              <a href='/politika-obrabotki-personalnyh-dannyh'>Политика обработки персональных данных</a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 asmart">
              <a href="https://asmart-group.ru" target="_blank" >Сайт разработан IT-company <span>ASMART</span></a>
            </div>
        	</div>
        </div>
        
			</footer>
		</div><!--.container page-container-->
		
	<div style="display:none" class="fancybox-hidden">
		<div id="zapis-form">
					
			<?php echo do_shortcode('[contact-form-7 id="183" title="Записаться на прием" html_class="form-zapis"]'); ?>
		</div>
	</div>
	
	<div class="help-block-doctors" style="display:none;">
<?
	$wpb_all_query = new WP_Query(array('post_type'=>'doctor', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
	foreach($wpb_all_query->posts as $value){
		$doc=get_field('fio_doc',$value->ID);
?>
	<option value="<?=$doc?>"><?=$doc?></option>
<?	}?>
	</div>
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
	<script>
	new WOW().init();
	</script>
</html>