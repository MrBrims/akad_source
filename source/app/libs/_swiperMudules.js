import { Swiper, Navigation, Pagination, Autoplay, Lazy } from 'swiper';
Swiper.use([Navigation, Pagination, Autoplay, Lazy])

// Слайдер команды
export function swiperMudules() {
	const sliderTeam = new Swiper('.team__body', {
		pagination: {
			el: ".team__nav",
			clickable: true,
		},
		loop: true,
		slidesPerView: 1,
		spaceBetween: 0,
		lazy: true,
		autoplay: {
			delay: 3000,
		},
	});

	// Слайдер отзывов с сайта
	const sliderSiteRev = new Swiper('.site-rev__body', {
		pagination: {
			el: ".site-rev__nav",
			clickable: true,
		},
		loop: true,
		slidesPerView: 1,
		spaceBetween: 10,
		lazy: true,
		breakpoints: {
			520: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			920: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			1200: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
		},
	});

	// Слайдер отзывов с соц сетей
	const sliderSocRev = new Swiper('.soc-rev__body', {
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		},
		speed: 2000,
		freeMode: true,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 15,
		lazy: true,
		breakpoints: {
			480: {
				slidesPerView: 1,
				spaceBetween: 15,
			},
			520: {
				slidesPerView: 2,
				spaceBetween: 15,
			},
			920: {
				slidesPerView: 3,
				spaceBetween: 15,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 15,
			},
		},
	});

	// Слайдер отзывов с соц сетей
	const sliderRespRev = new Swiper('.resp-rev__body', {
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
			reverseDirection: true,
		},
		speed: 2000,
		freeMode: true,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 15,
		lazy: true,
		breakpoints: {
			480: {
				slidesPerView: 1,
				spaceBetween: 15,
			},
			520: {
				slidesPerView: 2,
				spaceBetween: 15,
			},
			920: {
				slidesPerView: 3,
				spaceBetween: 15,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 15,
			},
		},
	});

	// Слайдер блоговых записей
	const blogSlider = new Swiper('.blog-slider__body', {
		pagination: {
			el: ".blog-slider__nav",
			clickable: true,
		},
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,
		lazy: true,
		breakpoints: {
			480: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			520: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			920: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
		},
	});
}