<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?> - <?php bloginfo('description'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<link rel="shortcut icon" href="<?php echo get_settings('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css?ver=6" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/addon.css?ver=6" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/carousel.css?ver=6" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.lightbox-0.5.css?ver=6" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.lightbox_me.js"></script>
</head>
<body>
	<div id="header_line" class="line">
		<div id="header" class="center_block">
			<a href="/" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="ЮнгТерра" /></a>
			<div id="schedule_box">
				<div class="schedule_date"><span>30</span> декабря</div>
				<div class="schedule_time">18:00 - 19:30</div>
				<div class="schedule_name">Психоаналитичская группа №3</div>
				<div class="schedule_link"><a href="#">Полное расписание занятий &gt;</a></div>
			</div>
			<div id="address_box">
				<span>(812) 405-98-10</span> г. Санкт-Петербург,<br />Петроградская набережная 42
			</div>
			<a href="#wpapp_content" id="order_button">Записаться на прием</a>
		</div>
	</div>
	<div id="mainmenu_line" class="line">
		<div id="mainmenu" class="center_block">
			<? wp_nav_menu(array('menu' => 'menu' )); ?>
		</div>
	</div>
	<?php
		if(is_front_page()):
	?>
	<div id="slider_line" class="line">
		<div id="slider_box">
			<?
				//if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); }
				masterslider(1);
			?>
		</div>
		<div id="slider_inner" class="center_block">
			<div id="slider_right">
				<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
				<?php dynamic_sidebar( 'home_right_1' ); ?>
				<?php endif; ?>
			</div>
			<div id="order_panel">Индивидуальная консультация психолога <a href="#wpapp_content">Записаться</a></div>
			<a href="/online-konsultirovanie-po-skype/" id="skype_button">Консультации по Skype</a>
		</div>
	</div>
	<?
		else:
	?>
	<div id="title_line" class="line">
		<div id="title" class="center_block"><? single_term_title(); ?></div>
	</div>
	<?
		endif;
	?>
	<div id="main_line" class="line">
		<div id="main" class="center_block">
			<div class="content">
				<?php
					if(is_front_page()):
				?>
				<div id="mainitem_box">
					<?
						query_posts('cat=29,30,31,32,33,34&showposts=6&orderby=date&order=DESC');
						while (have_posts()) : the_post();
					?>
					<div class="item">
						<div class="img_box"><? the_post_thumbnail('large','class=itemimg'); ?></div>
						<?
							if($category->cat_ID == 29) $color = 'green';
							elseif($category->cat_ID == 30) $color = 'red';
							elseif($category->cat_ID == 31) $color = 'blue';
							elseif($category->cat_ID == 32) $color = 'green';
							elseif($category->cat_ID == 33) $color = 'red';
							elseif($category->cat_ID == 34) $color = 'blue';
							else $color = 'green';
						?>
						<div class="cat_title <? echo $color; ?>"><?
							foreach((get_the_category()) as $category) {
								if(in_array ($category->cat_ID, array(29,30,31,32,33,34)))
									echo '<a href="'. get_category_link($category->cat_ID) .'">'. $category->cat_name .'</a>';
							}
						?></div>
						<div class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
						<div class="desc"><? the_excerpt(); ?></div>
					</div>
					<?
						endwhile;
						wp_reset_query();
					?>
				</div>
				<a href="/polezno-znat/" id="mainitem_about">Показать еще</a>
				<?php
					else:
				?>
				<? while (have_posts()) : the_post(); ?>
				<div id="article_title_box">
					<?
						if(is_page() || is_single()) {
							echo '<h1>';
							the_title();
							echo '</h1>';
						}
						else {
							echo '<div class="artticle_title"><a href="';
							the_permalink();
							echo '">';
							the_title();
							echo '</a></div>';
						}
					?>
					<div class="img_box"><? the_post_thumbnail(); ?></div>
					<script type="text/javascript">(function() {
if (window.pluso)if (typeof window.pluso.start == "function") return;
if (window.ifpluso==undefined) { window.ifpluso = 1;
var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
var h=d[g]('body')[0];
h.appendChild(s);
}})();</script>
					<div style="display:block; float:left; width:100%; margin-bottom:10px">
						<div style="margin-left:auto; margin-right:auto; width:200px; display:block; float:none" data-user="2089463833" class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,email"></div>
					</div>
					<?
						$category = get_the_category();
						if($category[0]->cat_ID) {
							$cat = $category[0]->cat_ID;
							if($cat == 29) $color = 'green';
							elseif($cat == 30) $color = 'red';
							elseif($cat == 31) $color = 'blue';
							elseif($cat == 32) $color = 'green';
							elseif($cat == 33) $color = 'red';
							elseif($cat == 34) $color = 'blue';
							else $color = 'green';
						}
					?>
					<? if($category[0]->cat_ID): ?><div class="article_cat <? echo $color; ?>"><a href="<? echo get_category_link($category[0]->cat_ID); ?>"><? echo $category[0]->cat_name; ?></a></div><? endif; ?>
				</div>
				<div id="article">
					<? 
						if(is_page() || is_single()) {
							the_content();
						}
						else {
							the_excerpt();
						}
					?>
				</div>
				<? if(is_page() || is_single()) comments_template( '', true ); ?>
				<!--<div id="mail_box">
					<h3>Подпишитесь на самые новые материалы:</h3>
					<form method="post" action="">
						<div class="input_box">
							<input type="text" class="input_text" name="" value="" placeholder="Укажите свою почту" />
							<input type="submit" class="input_submit" value="Подписаться" />
						</div>
					</form>
				</div>-->
				<? endwhile; ?>
				<?php
					endif;
				?>
			</div>
			<div class="right">
				<?
					if(!is_front_page()) {
						echo '<div id="kurs_box">';
						if ( is_active_sidebar( 'home_right_2' ) ) {
							dynamic_sidebar( 'home_right_2' );
						}
						echo '</div>';
					}
				?>
				<div id="rightmenu">
					<h3>Чем можем помочь</h3>
					<ul class="menu">
						<li><a href="http://jungterra.ru/muzhchina-i-zhenshhina/" title="Отношения">Отношения</a></li>
						<li><a href="http://jungterra.ru/detskaya-psixologiya/" title="Родители и дети">Родители и дети</a></li>
						<li><a href="http://jungterra.ru/snovideniya/" title="Сновидения">Сновидения</a></li>
						<li><a href="http://jungterra.ru/psixologiya-semej/" title="Семья">Семья</a></li>
						<li><a href="http://jungterra.ru/podrostki/" title="Подростки">Подростки</a></li>
						<li><a href="http://jungterra.ru/stress-prichiny-lechenie/" title="Стресс">Стресс</a></li>
						<li><a href="http://jungterra.ru/problemy-seksa-v-bolshom-gorode/" title="Секс">Секс</a></li>
						<li><a href="http://jungterra.ru/zavisimost/" title="Зависимости">Зависимости</a></li>
						<li><a href="http://jungterra.ru/business/" title="Бизнес">Бизнес</a></li>
						<li><a href="http://jungterra.ru/zdorove/" title="Здоровье">Здоровье</a></li>
						<li><a href="http://jungterra.ru/vyjti-iz-depressii-lechit-depressiyu/" title="Депрессия">Депрессия</a></li>
						<li><a href="http://jungterra.ru/onlajn-test/" title="Тестирование">Тестирование</a></li>
						<li><a href="http://jungterra.ru/zhenskaya-psixologiya/" title="Женщина">Женщина</a></li>
						<li><a href="http://jungterra.ru/fobii-i-straxi/" title="Фобии">Фобии</a></li>
						<li><a href="http://jungterra.ru/rubrikator/" title="Библиотека">Библиотека</a></li>
						<li><a href="http://jungterra.ru/tvorcheskij-podxod-v-iskusstve-zhizni/" title="Искусство жизни">Искусство жизни</a></li>
						<li><a href="http://jungterra.ru/rasstanovki/" title="Расстановки">Расстановки</a></li>
						<li><a href="http://jungterra.ru/zadat-vopros-specialistu/" title="Задать вопрос">Задать вопрос</a></li>
					</ul>
				</div>
				<div id="tips">
					<h3>Советы психологов</h3>
					<div class="text">У меня очень сложные отношения с детьми, практически они представляют собой один негатив и боль. Сыновья взрослые 31 и 28 т. Один женат. Встречаемся очень редко, т.к. живут в других городах. Приезжая, если пообщаются с бывшей свекровью, меняются на глазах…</div>
					<div class="link"><a href="/vopros-otvet/"><span>Совет психолога</span> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/marker.png" alt="" /></a></div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if(is_front_page()):
	?>
	<div id="library_line" class="line">
		<div id="library" class="center_block">
			<h2>Наша библиотека</h2>
			<div id="libraryitem_box">
				<?
					$i = 1;
					query_posts('cat=10&showposts=5&orderby=date&order=DESC');
					while (have_posts()) : the_post();
					if($i<5) $item_cl = 'item'; else $item_cl = 'item last';
				?>
				<div class="<? echo $item_cl; ?>">
					<div class="book_box"><table width="100%" border="0">
						<tr><td valign="center"><? the_post_thumbnail(); ?></td></tr>
					</table></div>
					<div class="desc"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
				</div>
				<?
					$i++;
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
	</div>
	<div id="consultation_line" class="line">
		<div id="consultation" class="center_block">
			<div class="left">
				<h3>Психологисеская консультация</h3>
				<div class="text">
					<p>Ощущаете ли Вы одиночество? Непонимание среди близких людей и знакомых? Кажется ли Вам, что мир не такой, каким Вы хотели бы его видеть? У Вас нет ни сил, ни желания, а самое главное понимания, что делать и в каком направлении двигаться, чтобы все изменить и сделать лучше? Вы постоянно жалеете себя и надеетесь на лучшее, но ничего не меняется?<br />Ваши семейные отношения зашли в тупик? Внешне выглядит все нормально, но внутри Вы чувствуете, что Вам чего-то не хватает? У Вас ничего не получается, бизнес не идет в гору, и Вы находитесь в упадническом настроении?</p>
					<p>А теперь представьте, если все негативные мысли покинут Вас. Представьте жизнь, наполненную яркими красками и желанием двигаться вперед, любить и быть любимыми. Представьте ощущение счастья и легкости, безоблачные семейные отношения с неугасающей страстью и то чувство, свойственное молодости, когда хочется творить. А ведь всего перечисленного можно достичь!</p>
					<p><strong>Консультация психолога позволит Вам высказаться!</strong></p>
					<p>Психологическое консультирование – это не лечение, поскольку Вы ничем не болеете. Состояние, подобное Вашему, переживают многие, но кто-то справляется с ним сам, а кому-то требуется поддержка специалистов. Психологическая консультация позволяет разобраться в себе, найти ответы на многочисленные вопросы, обрести гармонию самим с собой и внешним миром, выявить свои желания и определиться с тем, что действительно Вам нужно, а что является надуманным, разобраться с причинами плохого настроения и найти способы их устранения. Не всегда, но очень часто консультация психолога является единственным способом исправить сложившееся положение дел.</p>
					<p>Ваше сегодняшнее состояние стоит расценивать как сигнал того, что пришло время переосмысления и корректировки жизненного пути. И чем мучительнее это время для Вас, тем более существенные перемены Вам необходимы, тем сложнее разобраться со своими мыслями и желаниями самостоятельно, тем больше необходимость в психологической помощи и доверительном разговоре со специалистом, в котором Вы сможете полностью высказаться и получить ценные советы. Посетить консультацию психолога мы приглашаем Вас в нашем институте.</p>
					<p>Санкт-петербургский институт Юнга – это коллектив исключительно опытных специалистов, работающих в одном из самых современных и эффективных разделов психологии – учении К. Г. Юнга. Многие наши психологи члены РОАП (Российского Общества Аналитической Психологии), удостоены различных престижных наград и имеют собственные публикации в научных изданиях.</p>
					<p>Мы окажем Вам профессиональную психологическую консультацию самого высокого уровня и поможем справиться с большинством проблем личностного и межличностного характера, подскажем как стать счастливыми, обрести уверенность, силы и желание двигаться вперед, жить в гармонии с социумом и получать от жизни удовольствие.</p>
					<p><strong>Приходите! Вместе мы справимся с Вашими недугами!</strong></p>
				</div>
			</div>
			<div class="right">
				<h3>Наши специалисты</h3>
				<?
					query_posts('cat=7&showposts=2&orderby=date&order=DESC');
					while (have_posts()) : the_post();
				?>
				<div class="item">
					<div class="photo_box"><? the_post_thumbnail(); ?></div>
					<div class="name"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
					<!--<div class="stage">Общий стаж работы: 7 лет</div>-->
					<div class="order"><a href="#wpapp_content">Записаться на прием</a></div>
					<div class="desc">
						<? the_excerpt(); ?>
					</div>
				</div>
				<?
					endwhile;
					wp_reset_query();
				?>
				<a href="/nashi-specialisty/" id="spec_about">Смотреть всех специалистов</a>
			</div>
		</div>
	</div>
	<div id="video_line" class="line">
		<div id="video" class="center_block">
			<h2>Видео о работе центра</h2>
			<div id="videoitem_box">
				<div class="item">
					<div class="video_box"><iframe width="270" height="183" src="http://www.youtube.com/embed/YibIKFAnkcI" frameborder="0" allowfullscreen></iframe></div>
					<div class="desc">Джан Винер</div>
				</div>
				<div class="item">
					<div class="video_box"><iframe width="270" height="183" src="http://www.youtube.com/embed/YDKH4EVI-QU" frameborder="0" allowfullscreen></iframe></div>
					<div class="desc">Валерий Михайлович Голянич - возможности программы повышения психологической компетенции руководителей</div>
				</div>
				<div class="item">
					<div class="video_box"><iframe width="270" height="183" src="http://www.youtube.com/embed/SuuYi4b-S2w" frameborder="0" allowfullscreen></iframe></div>
					<div class="desc">Э.Ширер (Ann Shearer, UK) и К. Краузер (Catherine Crowther, UK)</div>
				</div>
				<div class="item last">
					<div class="video_box"><iframe width="270" height="183" src="http://www.youtube.com/embed/n42hFacAJIU" frameborder="0" allowfullscreen></iframe></div>
					<div class="desc">Юлия Казакевич (Москва)</div>
				</div>
			</div>
			<a href="/video/" id="video_about">Смотреть другие видео</a>
		</div>
	</div>
	<?
		else:
			$category = get_the_category();
			$cat = $category[0]->cat_ID;
			if((is_page() || is_single()) && $cat):
	?>
	<div id="about_line" class="line">
		<div id="about" class="center_block">
			<h3>Возможно вас также заинтересует</h3>
			<div id="mainitem_box">
				<?
					$i=1;
					query_posts('cat='. $cat .'&showposts=4&orderby=date&order=DESC');
					while (have_posts()) : the_post();
					if($i == 4) $cl = 'item last';
					else $cl = 'item';
				?>
				<div class="<? echo $cl; ?>">
					<div class="img_box"><? the_post_thumbnail('large','class=itemimg'); ?></div>
					<?
						if($category->cat_ID == 29) $color = 'green';
						elseif($category->cat_ID == 30) $color = 'red';
						elseif($category->cat_ID == 31) $color = 'blue';
						elseif($category->cat_ID == 32) $color = 'green';
						elseif($category->cat_ID == 33) $color = 'red';
						elseif($category->cat_ID == 34) $color = 'blue';
						else $color = 'green';
					?>
					<div class="cat_title <? echo $color; ?>"><?
						foreach((get_the_category()) as $category) {
							if(in_array ($category->cat_ID, array(29,30,31,32,33,34)))
								echo '<a href="'. get_category_link($category->cat_ID) .'">'. $category->cat_name .'</a>';
						}
					?></div>
					<div class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
					<div class="desc"><? the_excerpt(); ?></div>
				</div>
				<?
					$i++;
					endwhile;
					wp_reset_query();
				?>
			</div>
		</div>
	</div>
	<?
			endif;
		endif;
	?>
	<?php get_footer(); ?>
</body>
</html>