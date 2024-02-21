export function gift() {
	const giftPopup = document.querySelector('.gift')
	const giftClose = document.querySelector('.gift__close')
	const giftBtn = document.querySelector('.gift__btn')
	const giftMobile = document.querySelector('.gift-mobile')
	const giftMobileBtn = document.querySelector('.gift-mobile__btn')
	let giftPopupVisible = false
	let giftMobileVisible = false

	if (giftPopup) {
		giftClose.addEventListener('click', () => {
			giftPopup.classList.remove('--visible')
		})

		giftBtn.addEventListener('click', () => {
			giftPopup.classList.remove('--visible')
		})

		window.addEventListener('scroll', function () {
			let scrollPosition = window.scrollY

			if (scrollPosition >= 100 && !giftPopupVisible) {
				giftPopup.classList.add('--visible')
				giftPopupVisible = true
			}
		})
	}

	if (giftMobile) {
		window.addEventListener('scroll', function () {
			let scrollPosition = window.scrollY

			if (scrollPosition >= 100 && !giftMobileVisible) {
				giftMobileBtn.classList.add('rotate-scale-up')
				giftMobileVisible = true
			}
		})
	}
}
