import NiceSelect from 'nice-select2/dist/js/nice-select2.js'

export function niceSelectVanilla() {
	const selectElement = document.querySelector('.spec-select-wrap')
	selectElement.addEventListener('click', loadOptions)
	const select = document.querySelector('.spec-select')
	let nice = NiceSelect.bind(select)

	function loadOptions() {
		// Проверяем, были ли уже загружены опции, чтобы избежать повторной загрузки
		if (select.querySelectorAll('option').length > 2) {
			return
		}

		fetch(window.location.origin + '/wp-json/my-namespace/v2/spec')
			.then(response => response.json())
			.then(data => {
				data.forEach(value => {
					const option = document.createElement('option')
					option.value = value
					option.textContent = value
					select.appendChild(option)
				})
				nice.update()
				const selectNice = document.querySelector(
					'.spec-select-wrap .nice-select'
				)
				selectNice.classList.add('open')
			})
	}

	// const simpleSelect = document.querySelectorAll('.simple-select')
	// const searchSelect = document.querySelectorAll('.search-select')
	// simpleSelect.forEach(function (elem) {
	// 	NiceSelect.bind(elem)
	// })
	// searchSelect.forEach(function (elem) {
	// 	NiceSelect.bind(elem, { searchable: true })
	// })
}
