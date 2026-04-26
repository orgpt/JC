document.addEventListener('DOMContentLoaded', () => {
	const modal = document.querySelector('.jc-modal');
	const modalContent = modal ? modal.querySelector('.jc-modal__content') : null;

	const closeModal = () => {
		if (!modal) {
			return;
		}

		modal.hidden = true;
		document.body.style.overflow = '';
	};

	document.querySelectorAll('.jc-quick-view').forEach((button) => {
		button.addEventListener('click', () => {
			if (!modal || !modalContent) {
				return;
			}

			modalContent.innerHTML = `
				<img src="${button.dataset.image}" alt="${button.dataset.title}">
				<div>
					<h2>${button.dataset.title}</h2>
					<p class="jc-product-card__price">${button.dataset.price}</p>
					<p>${button.dataset.description || ''}</p>
					<a class="btn btn--primary" href="${button.dataset.link}">${juniorChicData.quickViewLabel}</a>
				</div>
			`;

			modal.hidden = false;
			document.body.style.overflow = 'hidden';
		});
	});

	document.querySelectorAll('[data-close-modal]').forEach((node) => {
		node.addEventListener('click', closeModal);
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') {
			closeModal();
		}
	});
});

