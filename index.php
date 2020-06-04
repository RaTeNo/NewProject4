<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Переключение IE в последнию версию, на случай если в настройках пользователя стоит меньшая -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Адаптирование страницы для мобильных устройств -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Запрет распознования номера телефона -->
		<meta name="format-detection" content="telephone=no">
		<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

		<!-- Заголовок страницы -->
		<title>Заголовок страницы</title>

		<!-- Данное значение часто используют(использовали) поисковые системы -->
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico или .png -->
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<link rel="stylesheet" href="css/fancybox.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/ion.rangeSlider.css">

		<link rel="stylesheet" href="css/styles.css">

		<link rel="stylesheet" href="css/response_1185.css" media="(max-width: 1185px)">
		<link rel="stylesheet" href="css/response_1023.css" media="(max-width: 1023px)">
		<link rel="stylesheet" href="css/response_767.css" media="(max-width: 767px)">
		<link rel="stylesheet" href="css/response_479.css" media="(max-width: 479px)">
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


		<style>
			/*:root
			{	
			        --main_color2: #4d6dff;
    				--main_color3: #142e52;
			        --box-shadow-color: rgba(77, 109, 255, 0.75);
			}*/
			

			<?php 
				$main_color2 ="#4d6dff";
    			$main_color3 ="#142e52";
				$svg1 = '<svg width="1440" height="575" viewBox="0 0 1440 575" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 41C0 18.3563 18.3563 0 41 0L1400 0C1422.64 0 1441 18.3563 1441 41V575H0V41Z" fill="'.$main_color3.'"/><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1441" height="575"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 41C0 18.3563 18.3563 0 41 0L1400 0C1422.64 0 1441 18.3563 1441 41V575H0V41Z" fill="white"/></mask><g mask="url(#mask0)"><path opacity="0.0651042" d="M989 431.5C989 554.383 889.383 654 766.5 654C643.617 654 544 554.383 544 431.5C544 308.617 643.617 209 766.5 209C889.383 209 989 308.617 989 431.5Z" stroke="white" stroke-width="92"/><path opacity="0.13365" d="M910 431.5C910 510.753 845.753 575 766.5 575C687.247 575 623 510.753 623 431.5C623 352.247 687.247 288 766.5 288C845.753 288 910 352.247 910 431.5Z" stroke="white" stroke-width="72"/></g></svg>';

				$svg2 = '<svg width="69" height="9" viewBox="0 0 69 9" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="29" height="9" rx="4.5" fill="url(#paint0_linear)"/><rect x="36" width="17" height="9" rx="4.5" fill="url(#paint1_linear)"/><rect x="60" width="9" height="9" rx="4.5" fill="url(#paint2_linear)"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="0" y2="9" gradientUnits="userSpaceOnUse"><stop stop-color="'.$main_color3.'"/><stop offset="1" stop-color="'.$main_color3.'"/></linearGradient><linearGradient id="paint1_linear" x1="36" y1="0" x2="36" y2="9" gradientUnits="userSpaceOnUse"><stop stop-color="'.$main_color3.'"/><stop offset="1" stop-color="'.$main_color3.'"/></linearGradient><linearGradient id="paint2_linear" x1="60" y1="0" x2="60" y2="9" gradientUnits="userSpaceOnUse"><stop stop-color="'.$main_color3.'"/><stop offset="1" stop-color="'.$main_color3.'"/></linearGradient></defs></svg>';

				$svg3 ='<svg width="723" height="1111" viewBox="0 0 723 1111" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 286.846C0 246.188 19.7742 208.07 53.013 184.656L212.395 72.3803C269.051 32.4697 347.362 46.2692 386.963 103.142L652.511 484.501C691.393 540.341 678.47 617.024 623.434 657.036L198.504 965.961C115.88 1026.03 0 967.007 0 864.856L0 286.846Z" fill="url(#paint0_linear)"/><path opacity="0.13365" d="M269.5 555C269.5 615.475 220.475 664.5 160 664.5C99.5248 664.5 50.5 615.475 50.5 555C50.5 494.525 99.5248 445.5 160 445.5C220.475 445.5 269.5 494.525 269.5 555Z" stroke="white" stroke-width="51"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="0" y2="1110.27" gradientUnits="userSpaceOnUse"><stop stop-color="'.$main_color3.'"/><stop offset="1" stop-color="'.$main_color3.'"/></linearGradient></defs></svg>';

				$svg4 ='<svg width="633" height="699" viewBox="0 0 633 699" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M633 235.304C633 191.223 609.782 150.401 571.896 127.869L449.022 54.7911C396.014 23.2655 327.935 35.113 288.693 82.6924L106.898 303.114C53.6206 367.711 77.68 465.401 154.863 497.869L459.532 626.029C541.918 660.686 633 600.188 633 510.809L633 235.304Z" fill="'.$main_color3.'"/><path opacity="0.13365" d="M363.5 432C363.5 492.475 412.525 541.5 473 541.5C533.475 541.5 582.5 492.475 582.5 432C582.5 371.525 533.475 322.5 473 322.5C412.525 322.5 363.5 371.525 363.5 432Z" stroke="white" stroke-width="51"/></svg>';

				$svg5 ='<svg width="1376" height="555" viewBox="0 0 1376 555" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 41C0 18.3563 18.3563 0 41 0L1334.77 0C1357.5 0 1375.9 18.4958 1375.77 41.2284L1373.13 514.228C1373.01 536.783 1354.69 555 1332.14 555H41C18.3564 555 0 536.644 0 514V41Z" fill="'.$main_color3.'"/><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1376" height="555"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 41C0 18.3563 18.3563 0 41 0L1334.77 0C1357.5 0 1375.9 18.4958 1375.77 41.2284L1373.13 514.228C1373.01 536.783 1354.69 555 1332.14 555H41C18.3564 555 0 536.644 0 514V41Z" fill="white"/></mask><g mask="url(#mask0)"><path opacity="0.0651042" d="M1292 365C1292 522.953 1163.95 651 1006 651C848.047 651 720 522.953 720 365C720 207.047 848.047 79 1006 79C1163.95 79 1292 207.047 1292 365Z" stroke="white" stroke-width="92"/><path opacity="0.13365" d="M1192 365C1192 467.725 1108.72 551 1006 551C903.275 551 820 467.725 820 365C820 262.275 903.275 179 1006 179C1108.72 179 1192 262.275 1192 365Z" stroke="white" stroke-width="72"/><path opacity="0.0651042" d="M511 425.5C511 545.07 414.07 642 294.5 642C174.93 642 78 545.07 78 425.5C78 305.93 174.93 209 294.5 209C414.07 209 511 305.93 511 425.5Z" stroke="white" stroke-width="70"/><path opacity="0.13365" d="M438 425.5C438 504.753 373.753 569 294.5 569C215.247 569 151 504.753 151 425.5C151 346.247 215.247 282 294.5 282C373.753 282 438 346.247 438 425.5Z" stroke="white" stroke-width="50"/></g></svg>'
			?>
			/*.first_section .info:after{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg1); ?>') !important;
			}
			.block_head .title:after, .stocks .stock .name a:after, .ads_block .item .name a:after{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg2); ?>') !important;
			}
			.about .img:after, .how_we_work .img:after, .big_boss_quote .img:after, .director_letter .img:after, .contacts_block .map:after, .soc_vk .widget:after, .soc_inst .widget:after,
			.upload .form:after, .before_after .item:after, .three_photo .photo:after
			{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg3); ?>') !important;
			}

			.socials_block .socials:after{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg4); ?>') !important;
			}

			.first_section2 .cont:after{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg5); ?>') !important;
			}

			*/

		</style>
	</head>

	<body>
		<div class="color_change">
			<p><input type="text" class="color1"></p>
			<p><input type="text" class="color2"></p>
			<p><button class="apply">Применить</button></p>
			<p><button class="clear">Очистить</button></p>
		</div>
		<div class="wrap">
			<div class="main">
				<!-- Шапка -->
				<header>
					<button type="button" class="close">
						<span></span>
						<span></span>
					</button>


					<div class="mob_scroll">
						<div class="info">
							<div class="cont flex">

								<div class="logo">
									<div class="name resizeble-font" data-ratio="1.5"><a href="">.КОМПАНИЯ .КОМПАНИЯ .КОМПАНИЯ</a></div>
									<div class="desc resizeble-font2" data-ratio="1.5">ТОВАРЫ И УСЛУГИ</div>
								</div>


								<div class="socials">
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc1.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc2.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc3.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
								</div>




								<div class="contacts">
									<div class="email">
										<a href="mailto:mail@info.com">mail@info.com</a>
									</div>

									<div class="phones">
										<div><a href="tel:88001231213">8 800 123-12-13</a></div>

										<div><a href="tel:88001231213">8 800 123-12-13</a></div>
									</div>
								</div>

							</div>
						</div>


						<div class="bottom">
							<div class="cont">
						
								<ul class="menu flex">
									<li class="item">
										<a href="/">ГЛАВНАЯ</a>
									</li>
						
									<li class="item">
										<a href="/" class="active">ПРОЕКТЫ</a>
									</li>
						
									<li class="item">
										<a href="#" class="sub_link">
											<span>УСЛУГИ</span>
										</a>
						
										<div class="sub_menu">
											<div><a href="/">Пункт меню</a></div>
											<div><a href="/">Пункт меню</a></div>
											<div><a href="/">Пункт меню</a></div>
										</div>
									</li>
						
									<li class="item">
										<a href="/">ЦЕНЫ</a>
									</li>
						
									<li class="item">
										<a href="/">О НАС</a>
									</li>
						
									<li class="item">
										<a href="/">СТАТЬИ</a>
									</li>
						
									<li class="item">
										<a href="/">Пункт меню</a>
									</li>
						
									<li class="item">
										<a href="/" class="sub_link">
											<span>Пункт меню</span>
										</a>
						
										<div class="sub_menu">
											<div><a href="/">Пункт меню</a></div>
											<div><a href="/">Пункт меню</a></div>
											<div><a href="/">Пункт меню</a></div>
										</div>
									</li>
						
									<li class="item">
										<a href="/">Пункт меню</a>
									</li>
								</ul>
						
							</div>
						</div>
					</div>
				</header>


				<div class="mob_header">
					<div class="cont">

						<div class="logo">
							<a href="/">
								<div class="name resizeble-font3" data-ratio="1.5">.КОМПАНИЯ .КОМПАНИЯ .КОМПАНИЯ .КОМПАНИЯ</div>
								<div class="desc">ТОВАРЫ И УСЛУГИ</div>
							</a>
						</div>


						<div class="bg">
							<div class="contacts">
								<a href="/">
									<img data-src="images/ic_phone.svg" alt="" class="lozad">
								</a>

								<a href="/">
									<img data-src="images/ic_phone2.svg" alt="" class="lozad">
								</a>

								<a href="/">
									<img data-src="images/ic_email.svg" alt="" class="lozad">
								</a>
							</div>

							<div class="socials">
								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc1.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc2.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc3.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>
							</div>
						</div>


						<button type="button" class="mob_menu_link">
							<span></span>
							<span></span>
							<span></span>
						</button>

					</div>
				</div>
				<!-- End Шапка -->


				<!-- Основная часть -->
				 <section class="first_section block">
					<div class="cont">


				
						<div class="img">
							<div class="lozad" data-background-image="images/tmp/first_section_img.jpg"></div>
						</div>

						
						<div class="info">
							<div class="title">Торговая сеть</div>
				
							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домовМагазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
				
							<a href="/" class="link">Подробнее
								<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
								</svg>
							</a>
						</div>
					</div>
				</section> 


				<section class="advantages block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Наши <span>Преимущества</span></div>
						</div>


						<div class="flex">
							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb1.jpg" alt="" class="lozad">
								</div>

								<div class="name">Быстрота</div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
							</div>


							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb2.jpg" alt="" class="lozad">
								</div>

								<div class="name">Качество</div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
							</div>


							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb3.jpg" alt="" class="lozad">
								</div>

								<div class="name">Поддержка</div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
							</div>
						</div>

					</div>
				</section>


				<section class="about block margin_large">
					<div class="cont">

						<div class="img">
							<div class="lozad" data-background-image="images/tmp/about_img.jpg"></div>
						</div>

						<div class="info">
							<div class="block_head">
								<div class="title">Наша <span>компании</span></div>
							</div>

							<div class="text_block">
								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b>
								</p>

								<p>
									Выгодное расположение в непосредственной близости от жилых домов <b>Широкий товарный ассортимент,</b> удовлетворяющий любым требованиям покупателей
								</p>

								<a href="/" class="link">Подробнее
									<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg>
								</a>
							</div>
						</div>


						

					</div>
				</section>

				<section class="articles block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Последние <span>Новости</span></div>

							<a href="/" class="all_link">Все новости
								<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
								</svg>
							</a>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<a href="/" class="article">
									<img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad">

									<div class="info">
										<div class="name">Выгодное расположение в непосредственной жилых домов</div>

										<div class="date">30 января 2019</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<img data-src="images/tmp/article_thumb2.jpg" alt="" class="lozad">

									<div class="info">
										<div class="name">Выгодное расположение в непосредственной жилых домов</div>

										<div class="date">30 января 2019</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<img data-src="images/tmp/article_thumb3.jpg" alt="" class="lozad">

									<div class="info">
										<div class="name">Выгодное расположение в непосредственной жилых домов</div>

										<div class="date">30 января 2019</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad">

									<div class="info">
										<div class="name">Выгодное расположение в непосредственной жилых домов</div>

										<div class="date">30 января 2019</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<img data-src="images/tmp/article_thumb2.jpg" alt="" class="lozad">

									<div class="info">
										<div class="name">Выгодное расположение в непосредственной жилых домов</div>

										<div class="date">30 января 2019</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<img data-src="images/tmp/article_thumb3.jpg" alt="" class="lozad">

									<div class="info">
										<div class="name">Выгодное расположение в непосредственной жилых домов</div>

										<div class="date">30 января 2019</div>
									</div>
								</a>
							</div>
						</div>

					</div>
				</section>


				<section class="how_we_work block margin_large">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Как мы <span>Работаем</span></div>
								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
							</div>

							<div class="flex">
								<div class="item">
									<div class="name">Оставляете заявку</div>

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>

								<div class="item">
									<div class="name">Связь с менеджером</div>

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>

								<div class="item">
									<div class="name">Оплата</div>

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>

								<div class="item">
									<div class="name">Результат</div>

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>
							</div>
						</div>

						<div class="img">
							<div class="lozad" data-background-image="images/tmp/how_we_work_img.jpg"></div>
						</div>

					</div>
				</section>


				<section class="reviews block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Отзывы наших <span>Клиентов</span></div>

							<a href="/" class="all_link">ВСЕ ОТЗЫВЫ</a>

							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>

						</div>


						<div class="slider_wrap">
							<div class="slider owl-carousel">
								<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											
											<div>
												<div class="name">Ирина</div>
												<div class="rating">
													<svg width="98" height="13" viewBox="0 0 98 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M7 10.8439L10.4983 12.896C11.0503 13.2197 11.7311 12.7386 11.5847 12.129L10.656 8.26087L13.7474 5.65795C14.2346 5.24808 13.9741 4.47008 13.3321 4.41739L9.26276 4.08211L7.67094 0.431595C7.4196 -0.143865 6.5804 -0.143865 6.32906 0.431595L4.73724 4.08211L0.667942 4.41739C0.0258655 4.47008 -0.234626 5.24808 0.252564 5.65795L3.34397 8.26087L2.41535 12.129C2.26891 12.7386 2.94971 13.2197 3.50167 12.896L7 10.8439Z" fill="#FF954D"/>
														<path d="M28 10.8439L31.4983 12.896C32.0503 13.2197 32.7311 12.7386 32.5847 12.129L31.656 8.26087L34.7474 5.65795C35.2346 5.24808 34.9741 4.47008 34.3321 4.41739L30.2628 4.08211L28.6709 0.431595C28.4196 -0.143865 27.5804 -0.143865 27.3291 0.431595L25.7372 4.08211L21.6679 4.41739C21.0259 4.47008 20.7654 5.24808 21.2526 5.65795L24.344 8.26087L23.4153 12.129C23.2689 12.7386 23.9497 13.2197 24.5017 12.896L28 10.8439Z" fill="#FF954D"/>
														<path d="M49 10.8439L52.4983 12.896C53.0503 13.2197 53.7311 12.7386 53.5847 12.129L52.656 8.26087L55.7474 5.65795C56.2346 5.24808 55.9741 4.47008 55.3321 4.41739L51.2628 4.08211L49.6709 0.431595C49.4196 -0.143865 48.5804 -0.143865 48.3291 0.431595L46.7372 4.08211L42.6679 4.41739C42.0259 4.47008 41.7654 5.24808 42.2526 5.65795L45.344 8.26087L44.4153 12.129C44.2689 12.7386 44.9497 13.2197 45.5017 12.896L49 10.8439Z" fill="#FF954D"/>
														<path d="M70 10.8439L73.4983 12.896C74.0503 13.2197 74.7311 12.7386 74.5847 12.129L73.656 8.26087L76.7474 5.65795C77.2346 5.24808 76.9741 4.47008 76.3321 4.41739L72.2628 4.08211L70.6709 0.431595C70.4196 -0.143865 69.5804 -0.143865 69.3291 0.431595L67.7372 4.08211L63.6679 4.41739C63.0259 4.47008 62.7654 5.24808 63.2526 5.65795L66.344 8.26087L65.4153 12.129C65.2689 12.7386 65.9497 13.2197 66.5017 12.896L70 10.8439Z" fill="#FF954D"/>
														<path d="M91 10.8439L94.4983 12.896C95.0503 13.2197 95.7311 12.7386 95.5847 12.129L94.656 8.26087L97.7474 5.65795C98.2346 5.24808 97.9741 4.47008 97.3321 4.41739L93.2628 4.08211L91.6709 0.431595C91.4196 -0.143865 90.5804 -0.143865 90.3291 0.431595L88.7372 4.08211L84.6679 4.41739C84.0259 4.47008 83.7654 5.24808 84.2526 5.65795L87.344 8.26087L86.4153 12.129C86.2689 12.7386 86.9497 13.2197 87.5017 12.896L91 10.8439Z" fill="#FF954D"/>
													</svg>
												</div>
											</div>
										</div>

										<div class="text">
											<p>
												Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
											</p>

											<p>
												Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
											</p>
										</div>
									</div>
								</div>

									<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											
											<div>
												<div class="name">Ирина</div>
												<div class="rating">
													<svg width="98" height="13" viewBox="0 0 98 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M7 10.8439L10.4983 12.896C11.0503 13.2197 11.7311 12.7386 11.5847 12.129L10.656 8.26087L13.7474 5.65795C14.2346 5.24808 13.9741 4.47008 13.3321 4.41739L9.26276 4.08211L7.67094 0.431595C7.4196 -0.143865 6.5804 -0.143865 6.32906 0.431595L4.73724 4.08211L0.667942 4.41739C0.0258655 4.47008 -0.234626 5.24808 0.252564 5.65795L3.34397 8.26087L2.41535 12.129C2.26891 12.7386 2.94971 13.2197 3.50167 12.896L7 10.8439Z" fill="#FF954D"/>
														<path d="M28 10.8439L31.4983 12.896C32.0503 13.2197 32.7311 12.7386 32.5847 12.129L31.656 8.26087L34.7474 5.65795C35.2346 5.24808 34.9741 4.47008 34.3321 4.41739L30.2628 4.08211L28.6709 0.431595C28.4196 -0.143865 27.5804 -0.143865 27.3291 0.431595L25.7372 4.08211L21.6679 4.41739C21.0259 4.47008 20.7654 5.24808 21.2526 5.65795L24.344 8.26087L23.4153 12.129C23.2689 12.7386 23.9497 13.2197 24.5017 12.896L28 10.8439Z" fill="#FF954D"/>
														<path d="M49 10.8439L52.4983 12.896C53.0503 13.2197 53.7311 12.7386 53.5847 12.129L52.656 8.26087L55.7474 5.65795C56.2346 5.24808 55.9741 4.47008 55.3321 4.41739L51.2628 4.08211L49.6709 0.431595C49.4196 -0.143865 48.5804 -0.143865 48.3291 0.431595L46.7372 4.08211L42.6679 4.41739C42.0259 4.47008 41.7654 5.24808 42.2526 5.65795L45.344 8.26087L44.4153 12.129C44.2689 12.7386 44.9497 13.2197 45.5017 12.896L49 10.8439Z" fill="#FF954D"/>
														<path d="M70 10.8439L73.4983 12.896C74.0503 13.2197 74.7311 12.7386 74.5847 12.129L73.656 8.26087L76.7474 5.65795C77.2346 5.24808 76.9741 4.47008 76.3321 4.41739L72.2628 4.08211L70.6709 0.431595C70.4196 -0.143865 69.5804 -0.143865 69.3291 0.431595L67.7372 4.08211L63.6679 4.41739C63.0259 4.47008 62.7654 5.24808 63.2526 5.65795L66.344 8.26087L65.4153 12.129C65.2689 12.7386 65.9497 13.2197 66.5017 12.896L70 10.8439Z" fill="#FF954D"/>
														<path d="M91 10.8439L94.4983 12.896C95.0503 13.2197 95.7311 12.7386 95.5847 12.129L94.656 8.26087L97.7474 5.65795C98.2346 5.24808 97.9741 4.47008 97.3321 4.41739L93.2628 4.08211L91.6709 0.431595C91.4196 -0.143865 90.5804 -0.143865 90.3291 0.431595L88.7372 4.08211L84.6679 4.41739C84.0259 4.47008 83.7654 5.24808 84.2526 5.65795L87.344 8.26087L86.4153 12.129C86.2689 12.7386 86.9497 13.2197 87.5017 12.896L91 10.8439Z" fill="#FF954D"/>
													</svg>
												</div>
											</div>
										</div>

										<div class="text">
											<p>
												Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
											</p>

											<p>
												Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
											</p>
										</div>
									</div>
								</div>

									<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											
											<div>
												<div class="name">Ирина</div>
												<div class="rating">
													<svg width="98" height="13" viewBox="0 0 98 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M7 10.8439L10.4983 12.896C11.0503 13.2197 11.7311 12.7386 11.5847 12.129L10.656 8.26087L13.7474 5.65795C14.2346 5.24808 13.9741 4.47008 13.3321 4.41739L9.26276 4.08211L7.67094 0.431595C7.4196 -0.143865 6.5804 -0.143865 6.32906 0.431595L4.73724 4.08211L0.667942 4.41739C0.0258655 4.47008 -0.234626 5.24808 0.252564 5.65795L3.34397 8.26087L2.41535 12.129C2.26891 12.7386 2.94971 13.2197 3.50167 12.896L7 10.8439Z" fill="#FF954D"/>
														<path d="M28 10.8439L31.4983 12.896C32.0503 13.2197 32.7311 12.7386 32.5847 12.129L31.656 8.26087L34.7474 5.65795C35.2346 5.24808 34.9741 4.47008 34.3321 4.41739L30.2628 4.08211L28.6709 0.431595C28.4196 -0.143865 27.5804 -0.143865 27.3291 0.431595L25.7372 4.08211L21.6679 4.41739C21.0259 4.47008 20.7654 5.24808 21.2526 5.65795L24.344 8.26087L23.4153 12.129C23.2689 12.7386 23.9497 13.2197 24.5017 12.896L28 10.8439Z" fill="#FF954D"/>
														<path d="M49 10.8439L52.4983 12.896C53.0503 13.2197 53.7311 12.7386 53.5847 12.129L52.656 8.26087L55.7474 5.65795C56.2346 5.24808 55.9741 4.47008 55.3321 4.41739L51.2628 4.08211L49.6709 0.431595C49.4196 -0.143865 48.5804 -0.143865 48.3291 0.431595L46.7372 4.08211L42.6679 4.41739C42.0259 4.47008 41.7654 5.24808 42.2526 5.65795L45.344 8.26087L44.4153 12.129C44.2689 12.7386 44.9497 13.2197 45.5017 12.896L49 10.8439Z" fill="#FF954D"/>
														<path d="M70 10.8439L73.4983 12.896C74.0503 13.2197 74.7311 12.7386 74.5847 12.129L73.656 8.26087L76.7474 5.65795C77.2346 5.24808 76.9741 4.47008 76.3321 4.41739L72.2628 4.08211L70.6709 0.431595C70.4196 -0.143865 69.5804 -0.143865 69.3291 0.431595L67.7372 4.08211L63.6679 4.41739C63.0259 4.47008 62.7654 5.24808 63.2526 5.65795L66.344 8.26087L65.4153 12.129C65.2689 12.7386 65.9497 13.2197 66.5017 12.896L70 10.8439Z" fill="#FF954D"/>
														<path d="M91 10.8439L94.4983 12.896C95.0503 13.2197 95.7311 12.7386 95.5847 12.129L94.656 8.26087L97.7474 5.65795C98.2346 5.24808 97.9741 4.47008 97.3321 4.41739L93.2628 4.08211L91.6709 0.431595C91.4196 -0.143865 90.5804 -0.143865 90.3291 0.431595L88.7372 4.08211L84.6679 4.41739C84.0259 4.47008 83.7654 5.24808 84.2526 5.65795L87.344 8.26087L86.4153 12.129C86.2689 12.7386 86.9497 13.2197 87.5017 12.896L91 10.8439Z" fill="#FF954D"/>
													</svg>
												</div>
											</div>
										</div>

										<div class="text">
											<p>
												Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
											</p>

											<p>
												Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>


				


				<section class="big_boss_quote block margin_large">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Слово Нашего <span>Руководителя</span></div>
							</div>

							<div class="name">Иван Петрович</div>

							<div class="post">Генеральный директор</div>

							<div class="text_block">
								<p>
									«Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.
								</p>

								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент»
								</p>
							</div>
						</div>


						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div>

					</div>
				</section>


				<section class="video_reviews block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши <span>видео-отзывы</span></div>
							<a href="/" class="all_link">ВСЕ ОТЗЫВЫ</a>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb3.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>
						</div>

					</div>
				</section>


				<section class="prices block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Наши <span>Цены</span></div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="flex">
							<div class="item">
								<div class="name">Начальный</div>

								<div class="price">Бесплатно</div>

								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение</div>	

								<a href="/" class="link">Подробнее
									<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg>
								</a>
							</div>


							<div class="item">
								<div class="name">Стандарт</div>

								<div class="price">
									2500₽ <small>/ мес</small>
								</div>

								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение</div>

								<a href="/" class="link">Подробнее
									<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg>
								</a>
							</div>


							<div class="item">
								<div class="name">Премиум</div>

								<div class="price">
									5000₽ <small>/ мес</small>
								</div>

								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение</div>

								<a href="/" class="link">Подробнее
									<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg>
								</a>
							</div>
						</div>

					</div>
				</section>


				<section class="documents block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Наши <span>документы</span></div>
							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="flex">
							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_doc.svg" alt="" class="lozad">
								</div>
								<div class="name">документы.doc</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_pdf.svg" alt="" class="lozad">
								</div>
								<div class="name">новыйфайл.pdf</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_rar.svg" alt="" class="lozad">
								</div>
								<div class="name">наш_архив.rar</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_zip.svg" alt="" class="lozad">
								</div>
								<div class="name">еще_архив.zip</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_mp4.svg" alt="" class="lozad">
								</div>
								<div class="name">видео.mp4</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_fb2.svg" alt="" class="lozad">
								</div>
								<div class="name">книга.fb2</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_xls.svg" alt="" class="lozad">
								</div>
								<div class="name">таблица.xls</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_jpg.svg" alt="" class="lozad">
								</div>
								<div class="name">картинка.jpg</div>
							</a>
						</div>

					</div>
				</section>


				<section class="faq block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Ответы на Вопросы (FAQ)</div>
							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>
						</div>


						<div class="accordion">
							<div class="item">
								<div class="title">Почему Пятерочка? 
									<i>
										<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.577449 18.6289L8.23728 10.9904L0.577449 3.35192C-0.192483 2.58414 -0.192483 1.34387 0.577449 0.576083C1.34738 -0.191702 2.59112 -0.191702 3.36105 0.576083L12.4226 9.61232C13.1925 10.3801 13.1925 11.6204 12.4226 12.3882L3.36105 21.4244C2.59112 22.1922 1.34738 22.1922 0.577449 21.4244C-0.172741 20.6566 -0.192483 19.3967 0.577449 18.6289Z" fill="white"/>
										</svg>
									</i>
								</div>

								<div class="data text_block">
									<p>
										Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
									</p>

									<p>
										Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
									</p>
								</div>
							</div>


							<div class="item">
								<div class="title">Почему Пятерочка? 
									<i>
										<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.577449 18.6289L8.23728 10.9904L0.577449 3.35192C-0.192483 2.58414 -0.192483 1.34387 0.577449 0.576083C1.34738 -0.191702 2.59112 -0.191702 3.36105 0.576083L12.4226 9.61232C13.1925 10.3801 13.1925 11.6204 12.4226 12.3882L3.36105 21.4244C2.59112 22.1922 1.34738 22.1922 0.577449 21.4244C-0.172741 20.6566 -0.192483 19.3967 0.577449 18.6289Z" fill="white"/>
										</svg>
									</i>
								</div>

								<div class="data text_block">
									<p>
										Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
									</p>

									<p>
										Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
									</p>
								</div>
							</div>
							<div class="item">
								<div class="title">Почему Пятерочка? 
									<i>
										<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.577449 18.6289L8.23728 10.9904L0.577449 3.35192C-0.192483 2.58414 -0.192483 1.34387 0.577449 0.576083C1.34738 -0.191702 2.59112 -0.191702 3.36105 0.576083L12.4226 9.61232C13.1925 10.3801 13.1925 11.6204 12.4226 12.3882L3.36105 21.4244C2.59112 22.1922 1.34738 22.1922 0.577449 21.4244C-0.172741 20.6566 -0.192483 19.3967 0.577449 18.6289Z" fill="white"/>
										</svg>
									</i>
								</div>

								<div class="data text_block">
									<p>
										Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
									</p>

									<p>
										Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
									</p>
								</div>
							</div>
							<div class="item">
								<div class="title">Почему Пятерочка? 
									<i>
										<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.577449 18.6289L8.23728 10.9904L0.577449 3.35192C-0.192483 2.58414 -0.192483 1.34387 0.577449 0.576083C1.34738 -0.191702 2.59112 -0.191702 3.36105 0.576083L12.4226 9.61232C13.1925 10.3801 13.1925 11.6204 12.4226 12.3882L3.36105 21.4244C2.59112 22.1922 1.34738 22.1922 0.577449 21.4244C-0.172741 20.6566 -0.192483 19.3967 0.577449 18.6289Z" fill="white"/>
										</svg>
									</i>
								</div>

								<div class="data text_block">
									<p>
										Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
									</p>

									<p>
										Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
									</p>
								</div>
							</div>
						</div>

					</div>
				</section>


				<section class="director_letter block margin_large">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Письмо <span>Директору</span></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
							</div>


							<form action="" class="form">
								<div class="line">
									<div class="field">
										<input type="text" name="" value="" class="input" placeholder="Ваше имя" required>
									</div>
								</div>

								<div class="line">
									<div class="field">
										<input type="tel" name="" value="" class="input" placeholder="Телефон" required>
									</div>
								</div>

								<div class="line">
									<div class="field">
										<textarea name="" placeholder="Сообщение" required></textarea>
									</div>
								</div>


								<div class="bottom">
									<div class="agree">
										<input type="checkbox" name="agree" id="agree_check" checked>
										<label for="agree_check">Согласен с политикой <a href="">обработки данных</a>
											<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
										</label>
									</div>

									<div class="submit">
										<button type="submit" class="submit_btn">Отправить
											<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg>
										</button>
									</div>
								</div>
							</form>
						</div>


						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div>

					</div>
				</section>

				<section class="contacts_block block margin_large">
					<div class="cont">

						<div class="map">
							<div>
								<iframe width="100%" height="500" src="https://maps.google.com/maps?width=100&amp;height=500&amp;hl=ru&amp;q=%D0%92%D0%BE%D0%BB%D0%B6%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BC%D0%B8%D1%80%D0%B0%2036%20%D0%BF&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							</div>
						</div>


						<div class="info">
							<div class="block_head">
								<div class="title">Наши Контакты</div>
							</div>


							<div class="contacts">
								<div>Связь с нами:</div>

								<div class="val">
									<a href="tel:88001231213" class="phone">8 800 123-12-13</a>
									<!-- <div class="exp">Бесплатный звонок по России</div> -->
								</div>

								<div class="val">
									<a href="mailto:info@gmail.com" class="email">info@gmail.com</a>
									<div class="exp">Наша электронная почта</div>
								</div>
							</div>


							<div class="adres">
								<div>Наш адрес:</div>

								<div class="val">г. Волгоград, ул. Ленина, 31, офис 5</div>
							</div>
						</div>						

					</div>
				</section>


				<section class="order_block block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Оставьте Заявку</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей. Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<form action="" class="form">
							<div class="columns">
								<div class="line width1of4">
									<div class="field">
										<input type="text" name="" value="" class="input" placeholder="Ваше имя" required>
									</div>
								</div>

								<div class="line width1of4">
									<div class="field">
										<input type="tel" name="" value="" class="input" placeholder="Телефон" required>
									</div>
								</div>

								<div class="line width2of4">
									<div class="field">
										<textarea name="" placeholder="Сообщение" required></textarea>
									</div>
								</div>
							</div>


							<div class="bottom">
								<div class="agree">
									<input type="checkbox" name="agree" id="agree2_check" checked>
									<label for="agree2_check">Согласен с политикой <a href="">обработки данных</a>
										<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
									</label>
								</div>


								<div class="socials">
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc1.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc2.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc3.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
								</div>


								<div class="submit">
									<button type="submit" class="submit_btn">ОТПРАВИТЬ</button>
								</div>
							</div>
						</form>

					</div>
				</section>
				


				<section class="team block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Наши <span>Сотрудники</span></div>
							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей. Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<div class="item">									
									<div class="foto">
										<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
									</div>
									<div>
										<div class="name">Ирина Петрова</div>
										<div class="post">Генеральный директор</div>	
									</div>								
								</div>
								<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости</div>
							</div>

							<div class="slide">
								<div class="item">									
									<div class="foto">
										<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
									</div>
									<div>
										<div class="name">Ирина Петрова</div>
										<div class="post">Генеральный директор</div>	
									</div>								
								</div>
								<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости</div>
							</div>


							<div class="slide">
								<div class="item">									
									<div class="foto">
										<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
									</div>
									<div>
										<div class="name">Ирина Петрова</div>
										<div class="post">Генеральный директор</div>	
									</div>								
								</div>
								<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости</div>
							</div>

							<div class="slide">
								<div class="item">									
									<div class="foto">
										<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
									</div>
									<div>
										<div class="name">Ирина Петрова</div>
										<div class="post">Генеральный директор</div>	
									</div>								
								</div>
								<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости</div>
							</div>


						</div>

					</div>
				</section>

				<section class="stocks block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши <span>Акции</span></div>
							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей. Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>


							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb2.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>


							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb3.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>

							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb3.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>




				<section class="poll block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Блок <span>Опроса</span></div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>
						</div>


						<div class="widget">
							<!-- Put this script tag to the <head> of your page -->
							<!-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
							
							<script type="text/javascript">
							  VK.init({apiId: 7239986, onlyWidgets: true});
							</script> -->

							<!-- Put this div tag to the place, where the Poll block will be -->
							<!-- <div id="vk_poll"></div>
							<script type="text/javascript">
							VK.Widgets.Poll("vk_poll", {}, "356050851_510253bd6b71887e3d");
							</script> -->
						</div>

					</div>
				</section>


				<!-- <section class="ads_block block">
					<div class="cont">
				
						<div class="block_head">
							<div class="title">Блок c <span>Рекламой</span></div>
				
							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>
						</div>
				
				
						<div class="flex">
							<div class="item big">
								<a href="/" class="thumb">
									<img data-src="images/tmp/about_img.jpg" alt="" class="lozad">
								</a>
				
								<div class="info">
									<div class="name">
										<a href="/">x5 Retail Group</a>
									</div>
				
									<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
				
									<a href="/" class="link">Подробнее 
										<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg>
									</a>
								</div>
							</div>
				
				
							<div class="item">
								<a href="/" class="thumb">
									<img data-src="images/tmp/about_img.jpg" alt="" class="lozad">
								</a>
				
								<div class="info">
									<div class="name">
										<a href="/">x5 Retail Group</a>
									</div>
				
									<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>
							</div>
				
				
							<div class="item full">
								<a href="/" class="thumb">
									<img data-src="images/tmp/ads_thumb3.jpg" alt="" class="lozad">
								</a>
				
								<div class="info">
									<div class="name">
										<a href="/">x5 Retail Group</a>
									</div>
				
									<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>
							</div>
						</div>
				
					</div>
				</section> -->


				<section class="vacancies block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши <span>Вакансии</span></div>
							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Генеральный директор</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее</a>
								</div>
							</div>


							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Менеджер по продажам</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее</a>
								</div>
							</div>


							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Генеральный директор</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее</a>
								</div>
							</div>


							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Менеджер по продажам</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее</a>
								</div>
							</div>
						</div>

					</div>
				</section>

				
				
				<section class="soc_block soc_vk block margin_large">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Мы Вконтакте</div>

								<a href="/" target="_blank" rel="noopener nofollow" class="soc_link">
									<img data-src="images/ic_vk_link.svg" alt="" class="lozad icon">
									vk.com/group123124
								</a>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>

								<a href="/" class="link">Перейти<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
								</svg></a>
							</div>
						</div>


						<div class="widget">
							<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
							<script type="text/javascript">
								VK.Widgets.Group("vk_groups", {mode: 4, width: "320", height: "490"}, 121203589);
							</script>

							<div id="vk_groups"></div>
						
						</div>

					</div>
				</section>


				<section class="soc_block soc_inst block margin_large">
					<div class="cont">

						<div class="widget">
							<iframe src="https://averin.pro/widget.php?l=alfasiterus&style=1&width=320&gallery=1&s=80&icc=4&icr=3&t=1&tt=Мы в Инстаграм&h=1&ttcolor=FFFFFF&th=c3c3c3&bw=f9f9f9&bscolor=FFFFFF&bs=FF0000&ts=Подписаться" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
						</div>


						<div class="info">
							<div class="block_head">
								<div class="title">Мы в Instagram</div>

								<a href="/" target="_blank" rel="noopener nofollow" class="soc_link">
									<img data-src="images/ic_soc2.svg" alt="" class="lozad icon">
									instagram.com/user123124
								</a>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>

								<a href="/" class="link">Перейти<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
								</svg></a>
							</div>
						</div>

					</div>
				</section>


				<section class="payment block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Оплата наших <span>Услуг</span></div>

							<div class="desc text_block">
								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.
								</p>

								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей
								</p>
							</div>
						</div>


						<div class="widget">
							<iframe src="https://money.yandex.ru/quickpay/shop-widget?writer=buyer&targets=&targets-hint=%D0%9D%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%20%D0%B8%D0%BB%D0%B8%20%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B8&default-sum=1000&button-text=12&payment-type-choice=on&mobile-payment-type-choice=on&hint=&successURL=&quickpay=shop&account=41001885065609" height="227" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
						</div>

					</div>
				</section>


				<section class="services block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Услуги</div>

							<a href="/" class="all_link">ВСЕ УСЛУГИ</a>

							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
						</div>


						<div class="flex">
							<a href="/" class="service">
								<img data-src="images/tmp/service_thumb.jpg" alt="" class="lozad">

								<div class="info">
									<div class="name">Компьютерная диагностика</div>

									<div class="link">Подробнее
										<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg>
									</div>
								</div>
							</a>


							<a href="/" class="service">
								<img data-src="images/tmp/service_thumb2.jpg" alt="" class="lozad">

								<div class="info">
									<div class="name">Компьютерная диагностика</div>

									<div class="link">Подробнее
										<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg>
									</div>
								</div>
							</a>


							<a href="/" class="service">
								<img data-src="images/tmp/service_thumb3.jpg" alt="" class="lozad">

								<div class="info">
									<div class="name">Компьютерная диагностика</div>

									<div class="link">Подробнее
										<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg>
									</div>
								</div>
							</a>
						</div>

					</div>
				</section>


				<section class="upload block margin_large">
					<form class="cont">
						 <div class="info">
							<div class="block_head">
								<div class="title">Загрузка <span>Файлов</span></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
							</div>


							<div class="form file-uploader">
								<div class="file">
								    <div class="file-chooser">
								    	<input class="file-chooser__input" name="file[]" type="file" id="file">
								    	<label for="file">ЗАГРУЗИТЬ</label>
								    </div>
									
									<div class="list file-uploader__message-area">
										
									</div>
								</div>
							</div>
						</div>


						<div class="form">
							<div class="line">
								<div class="field">
									<input type="text" name="" value="" class="input" placeholder="Ваше имя" required>
								</div>
							</div>

							<div class="line">
								<div class="field">
									<input type="tel" name="" value="" class="input" placeholder="Телефон" required>
								</div>
							</div>

							<div class="line">
								<div class="field">
									<textarea name="" placeholder="Сообщение" required></textarea>
								</div>
							</div>


							<div class="bottom">
								<div class="agree">
									<input type="checkbox" name="agree" id="upload_agree_check" checked>
									<label for="upload_agree_check">Согласен с политикой обработки данных
										<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z"></path></svg></i>
									</label>
								</div>

								<div class="submit">
									<button type="submit" class="submit_btn">Отправить
										<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg>
									</button>
								</div>
							</div>
						</div>
					</form>
				</section>


				<section class="stock_finish block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Успей до конца Акции</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="timer" data-date="2020/06/25 22:34:56"></div>

						<div class="action_button">
							<a class="link" href="/">Подробнее <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg></a>
						</div>

					</div>
				</section>


				<section class="before_after block">
					<div class="cont">

						<div class="block_head">
							<div class="title">До и <span>После</span></div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>

							<a href="/" class="link">Подробнее <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
										</svg></a>
						</div>


						<div class="item">
							<img data-src="images/tmp/before_after_img1.jpg" alt="" class="lozad">

							<div class="resize">
							    <img src="images/tmp/before_after_img1.jpg" alt="">
							</div>

							<span class="handle"><span></span></span>
						</div>

					</div>
				</section>


				<section class="image_tips block margin_large">
					<div class="cont">

						<div class="block_head">
							<div class="title">Блок Картинка</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="image">
							<img data-src="images/tmp/image_tips_img.jpg" alt="" class="lozad">

							<div class="item item1">
								<div class="btn" data-info=".info1">
									<span></span>
								</div>
							</div>

							<div class="item item2">
								<div class="btn" data-info=".info2">
									<span></span>
								</div>
							</div>

							<div class="item item3">
								<div class="btn" data-info=".info3">
									<span></span>
								</div>
							</div>


							<div class="info info1">
								<button class="close">
									<span></span>
									<span></span>
								</button>

								<div class="name">Квартира 43 м<sup>2</sup></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>

								<a href="/" class="link">ПОДРОБНЕЕ</a>
							</div>


							<div class="info info2">
								<button class="close">
									<span></span>
									<span></span>
								</button>

								<div class="name">Квартира 43 м<sup>2</sup></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>

								<a href="/" class="link">ПОДРОБНЕЕ</a>
							</div>


							<div class="info info3">
								<button class="close">
									<span></span>
									<span></span>
								</button>

								<div class="name">Квартира 43 м<sup>2</sup></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>

								<a href="/" class="link">ПОДРОБНЕЕ</a>
							</div>
						</div>
					</div>
				</section>


				<section class="three_photo block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Три <span>Фото</span></div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>

							<a href="/" class="link">Подробнее
								<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
								</svg>
							</a>
						</div>


						<div class="photo">
							<a href="images/tmp/three_photo_img1.jpg" class="img1 fancy_img">
								<img data-src="images/tmp/three_photo_img1.jpg" alt="" class="lozad">
							</a>

							<a href="images/tmp/three_photo_img1.jpg" class="img2 fancy_img">
								<img data-src="images/tmp/about_img.jpg" alt="" class="lozad">
							</a>

							<a href="images/tmp/three_photo_img1.jpg" class="img3 fancy_img">
								<img data-src="images/tmp/three_photo_img1.jpg" alt="" class="lozad">
							</a>
						</div>

					</div>
				</section>



				<section class="socials_block block">
					<div class="cont">

						<div class="data">
							<div class="block_head">
								<div class="title">Напишите нам удобным способом</div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
							</div>


							<div class="socials">
								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc1.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc2.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc3.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="" class="number" target="_blank" rel="noopener nofollow">
									<img src="images/ic_phone.svg" alt="">
								</a>

								<a href="/" class="number" target="_blank" rel="noopener nofollow">
									<img src="images/ic_phone2.svg" alt="">
								</a>

								<a href="/" class="number" target="_blank" rel="noopener nofollow">
									<img src="images/ic_email.svg" alt="">
								</a>
							</div>
						</div>

					</div>
				</section>



				<section class="about_video block">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Видео о Компании</div>

								<div class="desc text_block">
									<p>
										Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b>
									</p>

									<p>
										Выгодное расположение в непосредственной близости от жилых домов <b>Широкий товарный ассортимент,</b> удовлетворяющий любым требованиям покупателей
									</p>
								</div>

								<a href="/" class="link">Подробнее
									<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg>
								</a>
							</div>
						</div>


						<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" class="video_link" data-fancybox>
							<img data-src="images/tmp/about_video_thumb.jpg" alt="" class="lozad">
						</a>

					</div>
				</section>


				<section class="quiz_poll block">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Пройдите Квиз-Опрос</div>
							</div>


							<form class="steps">
								<div class="step step1">
									<div class="title">Заголовок Опроса</div>

									<div class="desc">Торговая сеть «Перекресток» открыла 800-й супермаркет. Им стал второй экспериментальный магазин</div>
								

									<div class="links">
										<button class="next" data-step=".step2">НАЧАТЬ<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg>
								</a></button>
									</div>
								</div>


								<div class="step step2">
									<div class="title">Какой ваш Возраст?</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input">
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step3">ПРОДОЛЖИТЬ</button>
										<button class="next" data-step=".step1">Вернуться</button>
									</div>
								</div>

								<div class="step step3">
									<div class="title">Какой ваш Возраст 2?</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input" >
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step4">ПРОДОЛЖИТЬ</button>
										<button class="next" data-step=".step2">Вернуться</button>
									</div>
								</div>

								<div class="step step4">
									<div class="title">Ваше имя</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input" >
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step5">ПРОДОЛЖИТЬ</button>
										<button class="next" data-step=".step3">Вернуться</button>
									</div>
								</div>

								<div class="step step5">
									<div class="title">Телефон</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="tel" name="" value="" class="input">
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step6">ПРОДОЛЖИТЬ</button>
										<button class="next" data-step=".step4">Вернуться</button>
									</div>
								</div>

								<div class="step step6">
									<div class="title">Нажмите на "завершить" для завершения опроса</div>

									<div class="form">
										<div class="agree">
											<input type="checkbox" name="agree" id="quiz_poll_agree_check" checked>
											<label for="quiz_poll_agree_check">Согласен с политикой <a href="">обработки данных</a>
												<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
											</label>
										</div>
									</div> 

									<div class="links">
										<button class="next valide end" data-step=".step7">Завершить</button>
										<button class="next" data-step=".step5">Вернуться</button>
									</div>
								</div>


								<div class="step step7">
									<div class="success">
										<div class="icon">
											<svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M36.6353 0.486328C16.6811 0.486328 0.48645 16.681 0.48645 36.6352C0.48645 56.5894 16.6811 72.7841 36.6353 72.7841C56.5895 72.7841 72.7842 56.5894 72.7842 36.6352C72.7842 16.681 56.5895 0.486328 36.6353 0.486328ZM36.6353 65.5543C20.6937 65.5543 7.71623 52.5769 7.71623 36.6352C7.71623 20.6936 20.6937 7.7161 36.6353 7.7161C52.577 7.7161 65.5544 20.6936 65.5544 36.6352C65.5544 52.5769 52.577 65.5543 36.6353 65.5543ZM29.4056 44.4795L50.6611 23.224C52.0709 21.8142 54.3844 21.8142 55.7942 23.224C57.204 24.6338 57.204 26.9112 55.7942 28.321L31.9721 52.1431C30.5623 53.5529 28.2849 53.5529 26.8751 52.1431L17.5126 42.7805C16.1028 41.3707 16.1028 39.0933 17.5126 37.6835C18.9224 36.2737 21.1998 36.2737 22.6096 37.6835L29.4056 44.4795Z" fill="white"/>
											</svg>

										</div>

										<div class="title">Спасибо!</div>

										<div class="desc">Мы перезвоним вам в течении рабочего времени</div>
									</div>
								</div>
							</form>
						</div>


						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div>

					</div>
				</section>


				<section class="products block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Популярные товары</div>
						</div>


						<div class="flex mob_slider">
							<a href="/" class="product">

								<div class="stickers">
									<div><div class="sticker stock">акция</div></div>
								</div>
								
								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Отличный товар</div>

									<div class="cat">Фотоаппараты</div>

									<div class="price">5000₽</div>
								</div>
							</a>


							<a href="/" class="product">
								<div class="stickers">
									<div><div class="sticker recommend">акция</div></div>
								</div>

								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad"></div>
								<div class="info">
									<div class="name">Отличный товар</div>

									<div class="cat">Фотоаппараты</div>

									<div class="price">5000₽</div>
								</div>
							</a>


							<a href="/" class="product">

								<div class="stickers">
									<div><div class="sticker hit">акция</div></div>
								</div>
								
								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Отличный товар</div>

									<div class="cat">Фотоаппараты</div>

									<div class="price">5000₽</div>
								</div>
							</a>


						</div>
						
						<center><a href="/" class="link">Все товары<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
									</svg></a>	</center>
			
					</div>
				</section>


				<section class="partners block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Партнёры</div>

							<div class="desc">Мы очень любим наших партнеров и ценим сотрудничество с ними. Вот несколько компаний из списка наших контрагентов:</div>
						</div>


						<div class="flex">
							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>
						</div>

					</div>
				</section>


				<section class="gallery block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наша Галерея</div>
							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
						</div>


						<div class="flex images">
							<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb3.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb3.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb4.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb4.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb5.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb5.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb6.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb6.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>
						</div>

					</div>
				</section>

				<section class="gallery2 block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наша <span>Галерея</span></div>
							<div class="desc no_margin">Магазины «у дома»&#8203; для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
						</div>


						<div class="flex">
							<div>
								<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb2.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>


							<div>
								<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb2.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb2.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>
						</div>					

					</div>
				</section>
				<!-- End Основная часть -->
			</div>


			<!-- Подвал -->
			<footer>
				<div class="cont">

					<ul class="links">
						<li><a href="/">Продукты</a></li>
						<li><a href="/">Прайс-лист</a></li>
						<li><a href="/">Документы</a></li>
						<li><a href="/">Блог</a></li>
						<li><a href="/">О нас</a></li>
						<li><a href="/">Вакансии</a></li>
						<li><a href="/">Пресса</a></li>
						<li><a href="/">Контакты</a></li>
						<li><a href="/">Товары</a></li>
						<li><a href="/">Услуги</a></li>
						<li><a href="/">Поддержка</a></li>
						<li><a href="/">Сообщество</a></li>
					</ul>


					<div class="creator">
						Работает на платформе
						<a href="/" target="_blank" rel="noopener">Портал.РФ</a>
					</div>

					<div class="support">
						<a href="/">Центр Поддержки Пользователей</a>
					</div>


					<div class="copyright">
						alfastiea&copy; 2020
					</div>

				</div>
			</footer>
			<!-- End Подвал -->
		</div>


		<div class="buttonUp">
			<button type="button"></button>
		</div>


		<div class="overlay"></div>

		<div class="supports_error">
			Ваш браузер устарел рекомендуем обновить его до последней версии<br> или использовать другой более современный.
		</div>


		<!-- Подключение javascript файлов -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/jquery-migrate-1.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<script src="js/lozad.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/inputmask.min.js"></script>
		<script src="js/nice-select.js"></script>
		<script src="js/flexmenu.min.js"></script>
		<script src="js/fancybox.min.js"></script>
		<script src="js/ion.rangeSlider.min.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/before-after.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/file.js"></script>
	</body>
</html>