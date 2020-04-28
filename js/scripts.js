$(function(){
	// Основной слайдер на главной
	$('.main_slider .slider').owlCarousel({
		items: 1,
		margin: 0,
		nav: true,
		dots: false,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		loop: true,
		smartSpeed: 750,
		autoplay: true,
		autoplayTimeout: 5000,
		onInitialized: function(event){
			setTimeout(function(){
				let arrW = $(event.target).find('.owl-nav button').width()
				let dotsW = $(event.target).find('.owl-dots').width()

				$(event.target).find('.owl-nav button.owl-next').css(
					'margin-right', (dotsW / -2) - arrW - 70
				)

				$(event.target).find('.owl-nav button.owl-prev').css(
					'margin-right', (dotsW / -2) - arrW - 10 + 150
				)
			}, 100)
		},
		onResized: function(event){
			setTimeout(function(){
				let arrW = $(event.target).find('.owl-nav button').width()
				let dotsW = $(event.target).find('.owl-dots').width()

				$(event.target).find('.owl-nav button.owl-next').css(
					'margin-right', (dotsW / -2) - arrW - 70
				)

				$(event.target).find('.owl-nav button.owl-prev').css(
					'margin-right', (dotsW / -2) - arrW - 10 + 150
				)
			}, 100)
		}
	})


	// Основной слайдер на главной
	$('.main_slider2 .slider').owlCarousel({
		items: 1,
		margin: 0,
		nav: true,
		dots: false,
		loop: true,
		smartSpeed: 750,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		autoplay: true,
		autoplayTimeout: 5000,
		onInitialized: function(event){
			setTimeout(function(){
				let dotsOffset = $(event.target).find('.owl-dots').offset()

				$(event.target).find('.owl-nav button.owl-prev').css(
					'left', (dotsOffset.left - 12)
				)
			}, 100)
		},
		onResized: function(event){
			setTimeout(function(){
				let dotsOffset = $(event.target).find('.owl-dots').offset()

				$(event.target).find('.owl-nav button.owl-prev').css(
					'left', (dotsOffset.left - 12)
				)
			}, 100)
		}
	})


	// Основной слайдер на главной
	$('.main_slider3 .slider').owlCarousel({
		items: 1,
		margin: 0,
		nav: true,
		dots: false,		
		loop: true,
		smartSpeed: 750,
		autoplay: true,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		autoplayTimeout: 5000,
		onInitialized: function(event){
			setTimeout(function(){
				let arrW = $(event.target).find('.owl-nav button').width()
				let dotsOffset = $(event.target).find('.owl-dots').offset()

				let dotsW = $(event.target).find('.owl-dots').width()

				console.log(dotsOffset);

				$(event.target).find('.owl-nav button.owl-prev').css(
					'left', (dotsOffset.left - 10)
				)

				$(event.target).find('.owl-nav button.owl-next').css(
					'left', (dotsOffset.left  + dotsW )
				)
			}, 100)
		},
		onResized: function(event){
			setTimeout(function(){
				let arrW = $(event.target).find('.owl-nav button').width()
				let dotsOffset = $(event.target).find('.owl-dots').offset()

				$(event.target).find('.owl-nav button.owl-prev').css(
					'left', (dotsOffset.left - 10)
				)

				$(event.target).find('.owl-nav button.owl-next').css(
					'left', (dotsOffset.left + arrW + 30)
				)
			}, 100)
		}
	})


	// Отзывы
	$('.reviews .slider').owlCarousel({
		items: 2,
		margin: 73,
		nav: true,
		dotsEach : true,
		dots: false,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 2,
	            margin: 36
	        }
		},
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		loop: true,
		smartSpeed: 750,
	})


	// Статьи
	$('.articles .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		dotsEach : true,
		loop: true,
		smartSpeed: 750,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 3,
	            margin: 20
	        },
	        1200:{
	            items: 3,
	            margin: 36
	        }
		},
	})


	// Видео отзывы
	$('.video_reviews .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		loop: true,
		dotsEach : true,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 3,
	            margin: 20
	        },
	        1200:{
	            items: 3,
	            margin: 36
	        }
		},
		
	})


	// Акции
	$('.stocks .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		dotsEach : true,
		loop: true,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 3,
	            margin: 20
	        }
		},
	})


	// Сотрудники
	$('.team .slider').owlCarousel({
		items: 1,
		margin: 73,
		nav: true,
		dotsEach : true,
		dots: false,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		loop: true,
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 2,
	            margin: 36
	        }
		},
		
	})


	// Вакансии
	$('.vacancies .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		dotsEach : true,
		navText: [
			'<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.03202 12C5.80015 12 5.56802 11.9132 5.39132 11.7426L0.265737 6.80513C-0.0885791 6.46382 -0.0885791 5.91121 0.265737 5.57077L5.39132 0.633341C5.74564 0.292031 6.3193 0.292031 6.67271 0.633341L6.75059 0.708357C7.10491 1.04967 7.10491 1.60228 6.75059 1.94271L3.24976 5.31503L21 5.31503C21.5002 5.31503 21.9062 5.7061 21.9062 6.18795C21.9062 6.6698 21.5002 7.06087 21 7.06087L3.24976 7.06087L6.75059 10.4332C7.10491 10.7745 7.10491 11.3271 6.75059 11.6675L6.67271 11.7426C6.49556 11.9132 6.26389 12 6.03202 12Z" fill="#FF954D"/></svg>',
	        '<svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.968 0C32.1999 0 32.432 0.0867869 32.6087 0.257442L37.7343 5.19487C38.0886 5.53618 38.0886 6.08879 37.7343 6.42923L32.6087 11.3667C32.2544 11.708 31.6807 11.708 31.3273 11.3667L31.2494 11.2916C30.8951 10.9503 30.8951 10.3977 31.2494 10.0573L34.7502 6.68497H0.906181C0.405972 6.68497 0 6.2939 0 5.81205C0 5.3302 0.405972 4.93913 0.906181 4.93913H34.7502L31.2494 1.56682C30.8951 1.22551 30.8951 0.672895 31.2494 0.332458L31.3273 0.257442C31.5044 0.0867869 31.7361 0 31.968 0Z" fill="white"/></svg>'	        
	    ],
		loop: true,
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 3,
	            margin: 36
	        }
		},		
	})


	// Меню в шапке
	$('header .menu').flexMenu({		
		showOnHover: true,
		linkText: '<span>ОСТАЛЬНОЕ</span>',
		linkTitle: '',
		linkTextAll: 'Меню',
	})

	//социальные сети
	if($('.mob_scroll .socials a').length>4)
	{
		$(".mob_scroll .socials a").eq(2).after($('<a href="/" class="more"><img src="./images/dot2.svg" alt=""><div class="arrow"><svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5L0 0L9 0L4.5 5Z" fill=""/></svg></div><div class="more_block"></div></a>'));
		$('.mob_scroll .socials a').each(function( index, element ) {
			if(index>3)
			{
				$(element).clone(true).appendTo(".mob_scroll .more_block");
				(element).remove();
			}
		});
	}
	$('body').on('click', '.mob_scroll .more_block a', function(e) {
		var href = $(this).attr('href');
      	window.open(href, '_blank');
	});

	$('body').on('click', '.mob_scroll a.more', function(e) {
    	e.preventDefault()
    });


	if($('.mob_header .socials a').length>4)
	{
		$(".mob_header .socials a").eq(2).after($('<a href="/" class="more"><img src="./images/dot2.svg" alt=""><div class="arrow"><svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5L0 0L9 0L4.5 5Z" fill=""/></svg></div><div class="more_block"></div></a>'));
		$('.mob_header .socials a').each(function( index, element ) {
			if(index>3)
			{
				$(element).clone(true).appendTo(".mob_header .more_block");
				(element).remove();
			}
		});
	}
	$('body').on('click', '.mob_header .more_block a', function(e) {
		var href = $(this).attr('href');
      	window.open(href, '_blank');
	});


	$('body').on('click', '.mob_header a.more', function(e) {
    	e.preventDefault()
    });


	$('.products_sort_mobile .schema-order__link').click(function(e){
		e.preventDefault()	
		if($(this).hasClass("active"))
		{
			$(this).removeClass("active");
			$(".schema-order__popover").hide();
		}	
		else
		{
			$(this).addClass("active");
			$(".schema-order__popover").show();
		}

	})
	

	// Фильтр
	$('body').on('click', 'aside .mob_filter_link', function(e) {
    	e.preventDefault()

    	if( $(this).hasClass('active') ) {
			$(this).removeClass('active')
			$('aside .filter').fadeOut(200)
			$('.overlay').fadeOut(200)
		} else {
			$(this).addClass('active')
			$('aside .filter').fadeIn(300)
			$('.overlay').fadeIn(300)
		}
	})

	$('aside .filter .close, .overlay, aside .block .title .close').click(function(e){
		e.preventDefault()
	    $('aside .mob_filter_link').removeClass('active')
		$('aside .filter').fadeOut(200)
		$('.overlay').fadeOut(200)
	})


	$priceRange = $('.filter #price_range').ionRangeSlider({
        type     : 'double',
        min      : 0,
        max      : 10000,
        from     : 1000,
        to       : 5000,
        step     : 10,
        postfix  : ' ₽'
    }).data("ionRangeSlider")


    // Таймер
	$('.timer').each(function(){
		let timerDate = $(this).data('date')


		$(this).countdown(timerDate, function(event) {
			let daysArr = event.strftime( '%D' ).split('')
			let hoursArr = event.strftime( '%H' ).split('')
			let minutesArr = event.strftime( '%M' ).split('')
			let secondsArr = event.strftime( '%S' ).split('')

			$(this).html( event.strftime(String()
				+ '<div class="item">'
					+ '<div class="val"><span>'+daysArr[0]+'</span><span>'+daysArr[1]+'</span></div>'
					+ '<div>дней</div>'
				+ '</div>'

				+ '<div class="item">'
					+ '<div class="val"><span>'+hoursArr[0]+'</span><span>'+hoursArr[1]+'</span></div>'
					+ '<div>часов</div>'
				+ '</div>'

				+ '<div class="item">'
					+ '<div class="val"><span>'+minutesArr[0]+'</span><span>'+minutesArr[1]+'</span></div>'
					+ '<div>минут</div>'
				+ '</div>'

				+ '<div class="item">'
					+ '<div class="val"><span>'+secondsArr[0]+'</span><span>'+secondsArr[1]+'</span></div>'
					+ '<div>секунд</div>'
				+ '</div>'
				) )
		})
	})


	// До/После
	$('.before_after .item').each(function(){
		$(this).beforeAfter()
	})


	// Фото с маркерами
	$('.image_tips .image .btn').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.image')
		let info = $(this).data('info')

		if( $(this).parents('.item').hasClass('active') ) {
			parent.find('.item').removeClass('active')
			parent.find('.info').hide()
		} else {
			parent.find('.item').removeClass('active')
			parent.find('.info').hide()

			$(this).parents('.item').addClass('active')
			parent.find(info).fadeIn(300)
		}
	})

	$('.image_tips .image .close').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.image')

		parent.find('.item').removeClass('active')
		parent.find('.info').hide()
	})


	// Квиз-Опрос
	$('.quiz_poll .step .links .next').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.steps')
		let nextStep = $(this).data('step')

		if($(this).hasClass("valide"))
		{
			let check = $(this).parent().prev().find("input");

			if(check.val()!="")
			{	
				check.removeClass("error");			
				parent.find('.step').hide()
				parent.find(nextStep).fadeIn(300)
			}
			else
			{
				check.addClass("error");
			}
		}
		else
		{
			parent.find('.step').hide()
			parent.find(nextStep).fadeIn(300)
		}
	})


	$("input[name='agree']").change(function () {
		if (this.checked) {
			$(this).closest("form").find("button").prop("disabled", false);
		}
		else
		{
			$(this).closest("form").find("button").prop("disabled", true);
		}
	});

	$('.product_delete').click(function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
	});


	// Покупка товара
	$('.product_info .buy .buy_link').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.btn')

		$(this).addClass('bounceOut')
		parent.find('.order_link').delay(750).fadeIn(300)
	})

	// Социальная выпадашка
	$('header .socials a.more, .mob_header .socials a.more').click(function(e){
		e.preventDefault()
		if($(this).hasClass("active"))
		{
			$(this).removeClass("active")
		}
		else
		{
			$(this).addClass("active")
		}
		
	})


	// Логотип
	$('.resizeble-font').each(function () {
        let length = $(this).text().replace(/^\s+|\s+$|\(|\)|8-/gm, '').length,
            size = $(this).width() / length * parseFloat($(this).data('ratio'))

        if( size > 33 ) {
        	size = 33
        }

        if( size < 16 ) {
        	size = 16
        }
        size2 = size+4
        $(this).css('font-size', size + 'px').css('line-height', size2 + 'px')
    })

    $('.resizeble-font2').each(function () {
        let length = $(this).text().replace(/^\s+|\s+$|\(|\)|8-/gm, '').length,
            size = $(this).width() / length * parseFloat($(this).data('ratio'))

        if( size > 16 ) {
        	size = 16
        }

        if( size < 10 ) {
        	size = 10
        }

        $(this).css('font-size', size + 'px')
    })


    $('.resizeble-font3').each(function () {
        let length = $(this).text().replace(/^\s+|\s+$|\(|\)|8-/gm, '').length,
            size = $(this).width() / length * parseFloat($(this).data('ratio'))

        if( size > 48 ) {
        	size = 48
        }

        if( size < 14 ) {
        	size = 14
        }

        size2 = size+3

        $(this).css('font-size', size + 'px').css('line-height', size2 + 'px')
    })


    $('.apply').click(function(e){
		//e.preventDefault()
		let color1 =  $(".color1").val();
    	let color2 =  $(".color2").val();

		localStorage.setItem('color1', color1);
		localStorage.setItem('color2', color2);

		window.location.reload(true)
	});

	$('.clear').click(function(e){
		//e.preventDefault()
		localStorage.removeItem('color1');
		localStorage.removeItem('color2');
		window.location.reload(true)
	});

		

    let color1 = localStorage.getItem('color1');
    let color2 = localStorage.getItem('color2');

    if(color1!=null)
    {
	    $(".color1").val(color1);
	    $(".color2").val(color2);

	    var root = document.querySelector(':root');
	    root.style.setProperty('--main_color2', color1);
	    root.style.setProperty('--main_color3', color2);

	    let rgba = hexDec(color1);
	    
	    root.style.setProperty('--box-shadow-color', "rgba("+rgba+",0.75)");

	    /*let rgba_opacity = hexDec(color2);

	    root.style.setProperty('--main_color_opacity', "rgba("+rgba_opacity+",0.1)");	  */  
    }



	/*SVG CHANGE*/

	var svg = '<svg width="846" height="575" viewBox="0 0 846 575" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 47C0 21.0426 21.0426 0 47 0L792.958 0C818.706 0 839.661 20.7165 839.955 46.4625L845.456 527.462C845.756 553.628 824.627 575 798.459 575H47C21.0426 575 0 553.957 0 528V47Z" fill="url(#paint0_linear)"/><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="846" height="575"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 47C0 21.0426 21.0426 0 47 0L792.958 0C818.706 0 839.661 20.7165 839.955 46.4625L845.456 527.462C845.756 553.628 824.627 575 798.459 575H47C21.0426 575 0 553.957 0 528V47Z" fill="white"/></mask><g mask="url(#mask0)"><path opacity="0.0651042" d="M456 428C456 585.953 327.953 714 170 714C12.0466 714 -116 585.953 -116 428C-116 270.047 12.0466 142 170 142C327.953 142 456 270.047 456 428Z" stroke="white" stroke-width="92"/><path opacity="0.13365" d="M356 428C356 530.725 272.725 614 170 614C67.275 614 -16 530.725 -16 428C-16 325.275 67.275 242 170 242C272.725 242 356 325.275 356 428Z" stroke="white" stroke-width="72"/></g><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="0" y2="575" gradientUnits="userSpaceOnUse"><stop stop-color="'+color1+'"/><stop offset="1" stop-color="'+color2+'"/></linearGradient></defs></svg>';

	var encoded = window.btoa(svg);	
	document.styleSheets[0].addRule('.first_section .info:after',"background-image: url(data:image/svg+xml;base64,"+encoded+") !important;");


	var svg = '<svg width="69" height="9" viewBox="0 0 69 9" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="29" height="9" rx="4.5" fill="url(#paint0_linear)"/><rect x="36" width="17" height="9" rx="4.5" fill="url(#paint1_linear)"/><rect x="60" width="9" height="9" rx="4.5" fill="url(#paint2_linear)"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="0" y2="9" gradientUnits="userSpaceOnUse"><stop stop-color="'+color1+'"/><stop offset="1" stop-color="'+color2+'"/></linearGradient><linearGradient id="paint1_linear" x1="36" y1="0" x2="36" y2="9" gradientUnits="userSpaceOnUse"><stop stop-color="'+color1+'"/><stop offset="1" stop-color="'+color2+'"/></linearGradient><linearGradient id="paint2_linear" x1="60" y1="0" x2="60" y2="9" gradientUnits="userSpaceOnUse"><stop stop-color="'+color1+'"/><stop offset="1" stop-color="'+color2+'"/></linearGradient></defs></svg>';

	var encoded = window.btoa(svg);	
	document.styleSheets[0].addRule('.block_head .title:after, .stocks .stock .name a:after, .ads_block .item .name a:after',"background-image: url(data:image/svg+xml;base64,"+encoded+") !important;");

	var svg = '<svg width="723" height="1111" viewBox="0 0 723 1111" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 286.846C0 246.188 19.7742 208.07 53.013 184.656L212.395 72.3803C269.051 32.4697 347.362 46.2692 386.963 103.142L652.511 484.501C691.393 540.341 678.47 617.024 623.434 657.036L198.504 965.961C115.88 1026.03 0 967.007 0 864.856L0 286.846Z" fill="url(#paint0_linear)"/><path opacity="0.13365" d="M269.5 555C269.5 615.475 220.475 664.5 160 664.5C99.5248 664.5 50.5 615.475 50.5 555C50.5 494.525 99.5248 445.5 160 445.5C220.475 445.5 269.5 494.525 269.5 555Z" stroke="white" stroke-width="51"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="0" y2="1110.27" gradientUnits="userSpaceOnUse"><stop stop-color="'+color2+'"/><stop offset="1" stop-color="'+color2+'"/></linearGradient></defs></svg>';

	var encoded = window.btoa(svg);	
	document.styleSheets[0].addRule('.about .img:after, .how_we_work .img:after, .big_boss_quote .img:after, .director_letter .img:after, .contacts_block .map:after, .soc_vk .widget:after, .soc_inst .widget:after, .upload .form:after, .before_after .item:after, .three_photo .photo:after',"background-image: url(data:image/svg+xml;base64,"+encoded+") !important;");

})

function hexDec(h){
	var m=h.slice(1).match(/.{2}/g);
	 
	m[0]=parseInt(m[0], 16);
	m[1]=parseInt(m[1], 16);
	m[2]=parseInt(m[2], 16);
	 
	return(m.join(','));
 };