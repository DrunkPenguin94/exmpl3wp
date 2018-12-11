<?php get_header(); ?> 
<div class="container">
	<div class="row">
				<div class="col-md-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e('Ой, страница не найдена.', 'bootstrap-basic'); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e('Попробуйте воспользоваться поиском ниже', 'bootstrap-basic'); ?></p>

								<!--search form-->
								<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
									<div class="form-group">
										<div class="col-xs-10">
											<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Поиск &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Поиск &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
										</div>
										<div class="col-xs-2">
											<button type="submit" class="btn btn-default"><?php _e('Поиск', 'bootstrap-basic'); ?></button>
										</div>
									</div>
								</form>

								<div class="row">
									
								</div>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</main>
				</div>
	</div>
</div>
<?php get_footer(); ?> 