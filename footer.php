<div id="footer_line" class="line">
		<div id="footer" class="center_block">
			<div class="column one">
				<a href="/" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_footer.png" alt="" /></a>
				<div class="copyright">&copy; 2012 - 2015, Психологический центр<br />"Юнгтерра"</div>
				<a href="http://elikov.ru/uslugi-web-dizainera/web-dizain-saitov.html" class="author"><span class="left">Дизайн сайтов</span> <span class="right">Евгений Еликов</span></a>
			</div>
			<div class="column two">
				<h4>Читайте нас</h4>
				<a href="https://www.facebook.com/jungterra" class="social_button"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/button_fb.png" alt="" /></a>
				<a href="https://twitter.com/jungterra" title="Веб дизайн сайтов. Услуги веб дизайнера. Евгений Еликов" class="social_button"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/button_tw.png" alt="" /></a>
			</div>
			<div class="column three">
				<h4>Информация</h4>
				<? wp_nav_menu(array('menu' => 'info' )); ?>
			</div>
			<div class="column four">
				<h4>Мероприятия</h4>
				<? wp_nav_menu(array('menu' => 'events' )); ?>

			</div>
			<div class="column five">
				<h4>Юнгтерра</h4>
				<? wp_nav_menu(array('menu' => 'jung' )); ?>
			</div>
		</div>
	</div>
	<div id="footer_copyright_text" class="line">Вся информация, представленная на сайте, является собственностью психологичекого центра "Юнгтерра" и может быть использована только с письменного разрешения администрации.</div>
	<script>
				$(function() {
					//header link auth
					function launch() {
						$('#consult').lightbox_me({centered: true, onload: function() { $('#consult').find('input:first').focus()}});
						$('#question').lightbox_me({centered: true, onload: function() { $('#question').find('input:first').focus()}});
						$('#consult2').lightbox_me({centered: true, onload: function() { $('#consult2').find('input:first').focus()}});
					}
							   
					$('.show_consult, #add_consult').click(function(e) {
						$("#consult").lightbox_me({centered: true, onload: function() {
							$("#consult").find("input:first").focus();
						}});
									
						e.preventDefault();
					});
					
					$('#add_question, #add_question_2').click(function(e) {
						$("#question").lightbox_me({centered: true, onload: function() {
							$("#question").find("input:first").focus();
						}});
									
						e.preventDefault();
					});
				
				
					$('.show_consult2').click(function(e) {
						$("#consult2").lightbox_me({centered: true, onload: function() {
							$("#consult2").find("input:first").focus();
						}});
									
						e.preventDefault();
					});
					
					$('.show_teaching').click(function(e) {
						$("#teaching").lightbox_me({centered: true, onload: function() {
							$("#teaching").find("input:first").focus();
						}});
									
						e.preventDefault();
					});
				
					if(window.location.hash == '#teaching') {
						$("#teaching").lightbox_me({centered: true, onload: function() {
							$("#teaching").find("input:first").focus();
						}});
					}
					
				
				});
			</script>
			<div id="consult">
				<?php echo do_shortcode('[contact-form-7 id="4" title="form_consult"]'); ?>
			</div>
			
			<div id="consult2">
				<?php echo do_shortcode('[contact-form-7 id="2616" title="form_add_consult"]'); ?>
			</div>
			
			<div id="question">
				<?php echo do_shortcode('[contact-form-7 id="2606" title="add_question"]'); ?>
			</div>
			
			<div id="teaching">
				<?php echo do_shortcode('[contact-form-7 id="7357" title="form_teaching"]'); ?>
			</div>
<?php wp_footer(); ?>