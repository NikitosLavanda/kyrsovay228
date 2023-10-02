// Код JavaScript для валидации формы перед отправкой
const form = document.querySelector('form');
const projectNameInput = document.getElementById('project-name');
const projectDescriptionInput = document.getElementById('project-description');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	if (projectNameInput.value.trim() === '') {
		alert('Введите название проекта');
		projectNameInput.focus();
		return;
	}
	if (projectDescriptionInput.value.trim() === '') {
		alert('Введите описание проекта');
		projectDescriptionInput.focus();
		return;
	}
	form.submit();
});